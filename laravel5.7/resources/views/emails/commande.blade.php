<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Vous avez reçu une nouvelle commande!</h1>
    <p>{{$user->nom_users}} {{$user->prenom_users}} a commandé les articles suivants: 
@foreach($articles as $article)
    Nom de l'article: {{$article->nom_article}}
    Prix de l'article: {{$article->prix_article}}
    Quantité commandée: {{$article->quantite}}<br>
@endforeach
    <br>
    </p>
    <p> Bonne journée!
    </p>
</body>
</html>