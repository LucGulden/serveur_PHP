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
				<a href="#" class="btn btn-black display-4">Panier</a>
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
									<div class="mbr-section-btn pt-4 text-center">
									<button type="submit" onclick = "">Ajouter au panier!</button>
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
			
			<div class="dropdown" id="tri">
				<button class="btn btn-black dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Catégorie
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				  <a class="dropdown-item" href="#">Vêtements</a>
				  <a class="dropdown-item" href="#">Chapeaux</a>
				  <a class="dropdown-item" href="#">Mugs</a>
				</div>
</button>
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
									<div class="mbr-section-btn pt-4 text-center">
									<button type="submit" onclick = "">Ajouter au panier!</button>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						</div>
					</div>
			</section>
@endsection