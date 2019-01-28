@extends('layout')

@section('content')

@if(Session::has('connexion')) 
    <div class="alert alert-danger">
        <p> voues etes bien connectée<p>
        {{Session::get('connexion')}}
    </div>
@else 
        <?php 
          header('Location: /');
          exit();
         ?>
@endif
				<div class="title">
					<h1>
						Boutique
					</h1>
				</div>
			<div class="panier">
				<a href="/panier" class="btn btn-black display-4">Panier</a>
			</div>
			<section class="topsales">
				<div class="container">
					<div class="top-sales">
						<h2 class="align-center">Top ventes</h2>
					</div>
					<div class="media-container-row">
						
						<!--  -->
						@foreach($topventes as $topvente)
						<div class=" col-12 col-lg-4 col-md-6 my-2">
							<div class="pricing">
								<div class="plan-header">
									<div class="plan-price">
									<img class="price-figure mbr-fonts-style display-1 vente" src="{{$topvente->image_article}}" alt="Article">									
										<h3 class="plan-title mbr-fonts-style display-5">
										{{$topvente->nom_article}}
										</h3>
										<hr>
									</div>
								</div>
								<div class="plan-body">
									<p class="mbr-text mbr-fonts-style display-7">
									<?php echo(number_format($topvente->prix_article, 2, ',', ' ')) ?>€
									</p>
									<form method="post" action="{{ route('Boutique_post') }}">
										@csrf
										<span class="input-group-btn">
										<input type="hidden" name="id_article" value="{{$topvente->id_article}}"/>
										<?php
        								$guest = Session::get('role');
       									if ($guest == 1 || $guest == 2 || $guest == 4   ) 
        								{?>
										<label for="number">Quantité :</label>
										<input type="number" name="number" id="number"value=1>
       									<button type="submit" class="btn btn-form btn-black display-4" name="add_basket">Ajouter au panier</button></span>
       									<?php }?>
									</form>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>
			<div>
				<p id="presentation">
					Bienvenue sur la boutique du BDE de l'eXia.CESI Strasbourg.
					Sur cette page vous pouvez commander les articles qui vous sont proposés. Tout paiement se fera en mains propres au trésorier du BDE. Vous serez notifiés par mail lorsque votre commande sera prête à être récupérée. Il faudra la chercher au BDE.
				</p>
			</div>
			
			<div id="categorie">
				<form action="/action_page.php">
					@foreach($categories as $categorie)
					<input type="checkbox" name="categorie" value="{{$categorie->nom_categorie}}"> {{$categorie->nom_categorie}} <br>
  					@endforeach
					<input type="submit" value="Submit">
				</form>
				<form method="post" action="{{ route('Boutique_post') }}">
							@csrf
							<span class="input-group-btn">
							Créer une nouvelle catégorie:<br>
							<input type="text" name="newcategory"><br>
							<button type="submit" class="btn btn-form btn-black display-4" name="add_category">Ajouter!</button></span>
				</form>
				<form method="post" action="{{ route('Boutique_post') }}">
							@csrf
							<span class="input-group-btn">
							Créer une nouvelle catégorie:<br>
							<label for="nom_article">Nom de l'article :</label>
       	   					<input type="text" name="nom_article" id="nom_article" /><br>
       						<label for="description_article">Description de l'article:</label>
							<textarea name="description_article" id="description_article"></textarea><br>
							<label for="prix_article">Prix de l'article :</label>
							<input type="text" name="prix_article" id="prix_article" /><br>
							<label for="image_article">Photo de l'article :</label>
							<input type="text" name="image_article" id="image_article" /><br>
							<button type="submit" class="btn btn-form btn-black display-4" name="add_article">Ajouter!</button></span>
				</form>
				
			
			</div>
		
			<section class="topsales">
				<div class="container">
					<div class="row">
					@foreach($articles as $article)
						<div class=" col-12 col-lg-4 col-md-6 my-2">
							<div class="pricing">
								<div class="plan-header">
									<div class="plan-price">
									<img class="price-figure mbr-fonts-style display-1 vente" src="{{$article->image_article}}" alt="Article">									
										<h3 class="plan-title mbr-fonts-style display-5">
										{{$article->nom_article}}
										</h3>
										<hr>
									</div>
								</div>
								<div class="plan-body">
									<p class="mbr-text mbr-fonts-style display-7">
									<?php echo(number_format($article->prix_article, 2, ',', ' ')) ?>€
									</p>
									<form method="post" action="{{ route('Boutique_post') }}">
										@csrf
										<span class="input-group-btn">
										<input type="hidden" name="id_article" value="{{$article->id_article}}"/>
										<?php
        								$guest = Session::get('role');
       									if ($guest == 1 || $guest == 2 || $guest == 4   ) 
        								{?>
										<label for="number">Quantité :</label>
										<input type="number" name="number" id="number" value=1>
       									<button type="submit" class="btn btn-form btn-black display-4" name="add_basket">Ajouter au panier</button></span>
       									<?php }?>
									</form>
									<form method="post" action="{{ route('Boutique_post') }}">
										@csrf
										<span class="input-group-btn">
										<input type="hidden" name="id_article" value="{{$article->id_article}}"/>
										<button type="submit" class="btn btn-form btn-black display-4" name="supprimer">Supprimer</button></span>
									</form>
								</div>
							</div>
						</div>
						@endforeach
						</div>
					</div>
			</section>
@endsection