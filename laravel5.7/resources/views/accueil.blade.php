@extends('layout')

@section('content')
<?php
use Illuminate\Support\Facades\Session;
?>

@if(Session::has('connexion')) 
  <div class="alert alert-success success">
    <p > Vous êtes bien connecté en tant que <?php echo e(Session::get('prenom')); ?><p>
  </div>
@else 
        <?php 
        	header('Location: /');
        	exit();
         ?>
@endif

<?php
        $guest = Session::get('role');
            if ($guest == 2) 
                {?>
            
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
      @foreach($databaseusers as $databaseuser)
        <tr>
           <td>{{$databaseuser->prenom_users}}</td>
           <td>{{$databaseuser->nom_users}}</td>
           <td>{{$databaseuser->mail_user}}</td>
           <td>{{$databaseuser->nom_role}}</td>
        </tr>
      @endforeach
    </tbody>
</table>
<?php }?>

<script >
  function alerte()
  {
  alert("En poursuivant votre navigation, vous acceptez l’utilisation de Cookies nous permettant de personnaliser le contenu et les annonces, d’offrir des fonctionnalités. Pour plus d'infirmation voir les conditions du règlement");
  }
</script>

<div class="container-fluid border border-warning rounded mb-0" style="margin-top: 30px; width: 90%; background-color: rgba(204,204,204,0.33); border-width: 10px;">
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top: 20px; padding-bottom: 20px;">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <?php $id_utilisateur = Session::get('id');?>
          <div class="carousel-inner" role="listbox">
            <?php $i=0; ?>
            @foreach($articles as $article)
            <div class="<?php if($i==0) {echo 'carousel-item active';} else {echo 'carousel-item';}?>">
              <h2 class="text-center">{{ $article->nom_article }}</h2>
              <div class="row">
                <div class="col-12 col-md-6 align-self-center text-align-center">
                  <img class="d-block vente" style="margin-bottom:10px;" src="{{ $article->image_article }}" alt="First slide">
                  <strong style="margin-left: 15px;">Prix: <?php echo(number_format($article->prix_article, 2, ',', ' ')) ?>€</strong>
                </div>
                <div class="col-12 col-md-6" style="margin-top: 10px;">  
                  
                  <p>{{ $article->description_article }}</p>
                </div>
              </div>
            </div>
            <?php $i++; ?>
            @endforeach
          </div>
      </div>
    </div>
    <?php
        $cookie = Session::get('cookie');

        if ($cookie == 0 ) 
        {session::put('cookie','1');?>
          <img src onerror='alerte()'>
    <?php }?>
@endsection