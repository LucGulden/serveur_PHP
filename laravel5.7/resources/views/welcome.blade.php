<!--importation du css de la page et des balises nécéssaires au fonctionnement du html-->
@extends('csswelcome')
@section('content')
	<header>
    	<h1 class="title">Bienvenue sur le site du BDE</h1>
    </header>
    <main>
		<!--création du formulaire de connection-->
    	<div class="container">
    	    <img src="https://www.conversationnel.fr/wp-content/uploads/2018/04/personnage.png" alt="personnage">
    		<form action="{{ route('Connexion') }}" method="POST">
    			{{ csrf_field() }}
    			<div class="form-input">
    				<input type="text" name="mail" placeholder="Mail" required="true">
    			</div>
    			<div class="form-input">
    				<input type="password" name="password" placeholder="Password" required="true">
    			</div>
    				<input type="submit" name="submit" value="Connexion" class="btn-login" required="true">	
    		</form><br>
    			<a href="/inscription"> Pas encore inscrit ?</a><br><br>
				<a href="/Guest" class="button guest" >Continuer en tant qu'invité</a>
    	</div>  	
    </main>
@endsection   
