<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="assets/style.css"/>
        <link rel="stylesheet" href="assets/vendors/font-awesome.css"/>	
        <title>Page de connexion</title>
        <style>
html
{
	background: url(https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size: cover;

}

body{
	margin: 0;
}

.title {
color: #fff;
font-size: 7em;
font-weight: bold;
font-family: Helvetica;
text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
}

.title {
  text-align: center;
}

.container{
	width:500px;
	height: 400px;
	text-align: center;
	background-color:rgba(0, 0, 0, 0.7);
	border-radius: 4px;
	margin: 0 auto;
	margin-top: 150px;
}

.container img {
	width: 120px;
	height: 120px;
	margin-top: -60px;
	margin-bottom: 30px;

}

input[type="text"], input[type="password"]
{
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 20px;
	border-radius: 150px;

}

form-input:before{
	background: url(https://www.conversationnel.fr/wp-content/uploads/2018/04/personnage.png);
	content:"\f007";
	position: absolute;
	font-family: verdana;
	font-size: 30px;
	color: #985986;
	padding-top: 5px;


}

.btn-login{
	padding: 15px 30px;
	color: #fff;
	background-color: #D3D3D3;
	border-radius: 150px;
	border: none;
	font-family: verdana;
	border-bottom: 4px solid #DCDCDC

}

.guest{
	border-radius:12px 0 12px 0;
	background: #ffb938;
	border:none;
	color:#fff;
	font:bold 12px Verdana;
	padding:6px 8px 6px 8px;

}

a{
	text-decoration: none;
	color: rgba(168, 168,168,0.8);
	font-family: verdana;
	margin-bottom:10px;
	font-size: 20px;

}

.btn-login:hover{
	padding: 15px 30px;
	color: #fff;
	background-color: #ffb938;
	border-radius: 150px;
	border: none;
	border-bottom: 4px solid #FFC252;


}

a:hover{
	color: rgba(255, 255, 255, 1);
	font-weight: bold;
}
        </style>
    </head>
    <body>
	<header>
    	<h1 class="title">Bienvenue sur le site du BDE</h1>
    </header>
    <main>
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
    			<a href="http://127.0.0.1:8000/inscription"> Pas encore inscrit ?</a><br><br>
				<a href="/Guest" class="button guest" >Continuer en tant qu'invité</a>
    	</div>  	
    </main>   
    </body>
</html>