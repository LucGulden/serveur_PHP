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
									<form method="post" action="">
										<label for="number">Quantité :</label>
										<input type="number" name="number" id="number">
									</form>
									<div class="mbr-section-btn pt-4 text-center">
									<a href="/panier" class="btn btn-black display-4">Ajouter au panier</a>
									</div>
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
				<form action="/action_page.php">
 					Créer une nouvelle catégorie:<br>
  					<input type="text" name="newcategory"><br>
 					<input type="Submit" value="Ajouter!">
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
									<form method="post" action="">
										<label for="number">Quantité :</label>
										<input type="number" name="number" id="number">
									</form>
									<div class="mbr-section-btn pt-4 text-center">
									<a href="/panier" class="btn btn-black display-4">Ajouter au panier</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						</div>
					</div>
			</section>
@endsection