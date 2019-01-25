<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class connexioncontroller extends Controller
{

    function register (Request $request){

  		$this->validate($request,[
  			'nom' => ['required','string','max:15'],
  			'prénom' =>['required','string','max:15'],
			'password'=> ['required','string','min:6','max:15','regex:/.*(?=.*\d+).*(?=.*[A-Z]).*/'],
			'centre'=> ['required', 'string', 'regex:/(Strasbourg|Lyon|Nancy)/']
  		]);
  		$centre = DB::connection('mysql2')->table('centre')->where('lieu_centre', $request->input('centre'))->first();
  		/*var_dump($request->input('centre'));*/
    	DB::connection('mysql2')->table('users')->insert(['nom_users'=>$request->input('nom'),'mdp_user'=>$request->input('password'),'prenom_users'=>$request->input('prénom'),'mail_user'=>$request->input('mail'),'id_centre'=>$centre->id_centre,'id_role'=>1]);
    	return view('welcome');
    } 

    function login (Request $request){

	$user = DB::connection('mysql2')->table('users')->where('mail_user',$request->input('mail'))->first();
	if ($user->mdp_user==$request->input('password')) 
	{
		session_start();
		$_SESSION['id']=$user->id_users;	
		$_SESSION['nom']=$user->nom_users;
		$_SESSION['role']='1';
		return redirect('/accueil');
	}
	else 
	{
		return view('welcome');
	}
	}

	function deconnexion(){
		session_start();
		session_destroy();

		return view('welcome');

	}
}

