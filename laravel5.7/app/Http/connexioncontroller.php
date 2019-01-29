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
	/*fonction permettant l'inscription des utilisateurs*/
    function register (Request $request){
		/*Vérifie la bonne syntaxe des éléments renseignés dans le formulaire d'inscription*/
  		$this->validate($request,[
  			'nom' => ['required','string','max:15'],
  			'prénom' =>['required','string','max:15'],
			'password'=> ['required','string','min:6','max:15','regex:/.*(?=.*\d+).*(?=.*[A-Z]).*/'],
			'centre'=> ['required', 'string', 'regex:/(Strasbourg|Lyon|Nancy)/']
		  ]);
		$databaseusers = DB::connection('mysql2')->table('users')->get();
		$centre = DB::connection('mysql2')->table('centre')->where('lieu_centre', $request->input('centre'))->first();
		$user = DB::connection('mysql2')->table('users')->where('mail_user',$request->input('mail'))->first();
		/*Condition permettant de vérifier que l'email renseigner n'existe pas déja dans la bdd*/
		  if($user != null)
		  {
  			?>
  			<script>
				alert("email deja existant");	
			</script>
			<?php
			return view('welcome');
  			}
		/*insert les éléments du formualire dans la bdd*/
		DB::connection('mysql2')->table('users')->insert(['nom_users'=>$request->input('nom'),'mdp_user'=>Hash::make($request->input('password')),'prenom_users'=>$request->input('prénom'),'mail_user'=>$request->input('mail'),'id_centre'=>$centre->id_centre,'id_role'=>1]);
		$idinsert=DB::connection('mysql2')->table('users')->where('mail_user', $request->input('mail'))->first();
		DB::connection('mysql')->table('users')->insert(['id_users'=>$idinsert->id_users]);
		DB::connection('mysql')->table('commande')->insert(['achevement_commande'=>0]);
		$panierinsert=DB::getPdo()->lastInsertId();
		
		/*Création d'un nouveau panier par utilisateur*/
		DB::connection('mysql')->table('achete')->insert(['id_users'=>$idinsert->id_users,'id_commande'=>$panierinsert]);
		return view('welcome',[
			'databaseusers'=> $databaseusers,
		]);
    } 

	/*fontion permettant la connection*/
    function login (Request $request){
		$user = DB::connection('mysql2')->table('users')->where('mail_user',$request->input('mail'))->first();
		/*condition vérifiant si l'iditifiant a été trouvé*/
		if($user != null){
			/*condition vérifiant si le mot de passe est correct */
			if (Hash::check($request->input('password'), $user->mdp_user)) {
				?>
				<!--script de récupération de token-->
				<script>
						var token = 0;
						var loginData = JSON.stringify({
							"mail_user": "dylan.lafarge@viacesi.fr",
							"mdp_user": "Qehun966"
						});
						
						/* requete d'envoie à l'API*/
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
				/*création d'une session et de ses variables*/ 
				session_start();
				session::put('prenom', $user->prenom_users);
				session::put('id', $user->id_users);
				session::put('connexion','1');
				session::put('role', $user->id_role);
				session::put('cookie','0');
			}
			/*création d'une alert si le mot de passe n'est pas juste*/
			else {
				?>
				<script>
					alert("Mdp Incorrect");	
				</script>
				<?php
				return view('welcome');	
			}
		}
		/*création d'une alert si l'identifiant n'est pas trouvé*/
		else {
			?>
			<script>
				alert("Identifiant Incorrect");	
			</script>
			<?php
			return view('welcome');
		}
	}
	
	/*destrtuction d'une session et de ses différentes variables */
	function deconnexion(){
		Session::forget('token');
		Session::forget('connexion');
		Session::forget('cookie');
		Session::save();
		header('location: /');
		exit;
	}
	/*création d'une session invité et de ses variables*/ 
	function guest(){
		session_start();
		session::put('prenom','invité');
		session::put('connexion','1');
		session::put('role', '3');
		session::put('cookie','0');
		return redirect('/accueil');

	}
	/*stockage du token*/
	function valider($token){
		session::put('token', $token);
		return redirect('/accueil');
	}

}

