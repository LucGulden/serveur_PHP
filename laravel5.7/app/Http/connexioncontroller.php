<?php

namespace App\Http\Controllers;

?>
<script src="js/jquery-3.3.1.min.js"></script>
<?php
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Cookie;

class connexioncontroller extends Controller
{

    function register (Request $request){

  		$this->validate($request,[
  			'nom' => ['required','string','max:15'],
  			'prénom' =>['required','string','max:15'],
			'password'=> ['required','string','min:6','max:15','regex:/.*(?=.*\d+).*(?=.*[A-Z]).*/'],
			'centre'=> ['required', 'string', 'regex:/(Strasbourg|Lyon|Nancy)/']
		  ]);
		$databaseusers = DB::connection('mysql2')->table('users')->get();
		$centre = DB::connection('mysql2')->table('centre')->where('lieu_centre', $request->input('centre'))->first();
		$user = DB::connection('mysql2')->table('users')->where('mail_user',$request->input('mail'))->first();
  		if($user != null){
  			?>
  			<script>
				alert("email deja existant");	
			</script>
			<?php
			return view('welcome');
  		}
    	DB::connection('mysql2')->table('users')->insert(['nom_users'=>$request->input('nom'),'mdp_user'=>Hash::make($request->input('password')),'prenom_users'=>$request->input('prénom'),'mail_user'=>$request->input('mail'),'id_centre'=>$centre->id_centre,'id_role'=>1]);
		$luc=DB::connection('mysql2')->table('users')->where('mail_user', $request->input('mail'))->first();
		DB::connection('mysql')->table('users')->insert(['id_users'=>$luc->id_users]);
		DB::connection('mysql')->table('commande')->insert(['achevement_commande'=>0]);
		$julien=DB::getPdo()->lastInsertId();

		DB::connection('mysql')->table('achete')->insert(['id_users'=>$luc->id_users,'id_commande'=>$julien]);
		return view('welcome',[
			'databaseusers'=> $databaseusers,
		]);
    } 

    function login (Request $request){
		$user = DB::connection('mysql2')->table('users')->where('mail_user',$request->input('mail'))->first();
		if($user != null){
			if (Hash::check($request->input('password'), $user->mdp_user)) {
				?>
				<script>
						var token = 0;
						var loginData = JSON.stringify({
							"mail_user": "dylan.lafarge@viacesi.fr",
							"mdp_user": "Qehun966"
						});

						$.ajax({
							type: "POST",
							url: "http://localhost:3000/users/login",
							data: loginData,
							success: function(response, status){
								token = response.token
								location.href="/setToken/"+ token +"/";
							},
							contentType : "application/json"
						});
					
				</script>
				<?php
				session_start();
				session::put('prenom', $user->prenom_users);
				session::put('id', $user->id_users);
				session::put('connexion','1');
				session::put('role', $user->id_role);
				session::put('cookie','0');
				//return redirect('/accueil');
				
			}
			else {
				?>
				<script>
					alert("Mdp Incorrect");	
				</script>
				<?php
				return view('welcome');	
			}
		}
		else {
			?>
			<script>
				alert("Identifiant Incorrect");	
			</script>
			<?php
			return view('welcome');
		}
	}

	function deconnexion(){
		Session::forget('token');
		Session::forget('connexion');
		Session::forget('cookie');
		Session::save();
		header('location: /');
		exit;
	}

	function guest(){
		session_start();
		session::put('prenom','invité');
		session::put('connexion','1');
		session::put('role', '3');
		session::put('cookie','0');
		return redirect('/accueil');

	}

	function valider($token){
		session::put('token', $token);
		return redirect('/accueil');
	}

}

