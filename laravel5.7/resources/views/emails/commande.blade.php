<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Vous avez reçu une nouvelle commande!</h1>
    <p>
@foreach($users as $user)
    {{$user->nom_users}} {{$user->prenom_users}} a passé une commande! <br><br>
@endforeach
@foreach($articles as $article)
    Nom de l'article: {{$article->nom_article}};<br>
    Prix de l'article: {{$article->prix_article}}€;<br>
    Quantité commandée: {{$article->quantite}};<br><br>
@endforeach
    <br>
@foreach($users as $user)
    Pour le contacter par mail, utilisez l'adresse mail suivante: {{$user->mail_user}}. <br>
@endforeach
    </p>
    <p> Bonne journée! <br>
        La boutique du BDE.
    </p>
</body>
</html>