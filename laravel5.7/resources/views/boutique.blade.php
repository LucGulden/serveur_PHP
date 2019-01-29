@extends('layout')

@section('content')

@if(Session::has('connexion'))
		<p > <p>
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
				<?php
        			$guest = Session::get('role');
       				if ($guest == 1 || $guest == 2 || $guest == 4   ) 
        		{?>
					<div class="panier">
						<a href="/panier" class="btn btn-black display-4">Panier</a>
					</div>
				<?php }?>
					
			<section class="topsales">
				<div class="container">
					<div class="top-sales">
						<h2 class="align-center">Top ventes</h2>
					</div>
					<div class="media-container-row">
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
									<?php echo(number_format($topvente->prix_article, 2, ',', ' ')) ?>€<br>
									Description: {{$topvente->description_article}}.
									</p>
									
									<?php
       									if ($guest == 1 || $guest == 2 || $guest == 4   ) 
        								{?>
									<form method="post" action="{{ route('addbasket') }}">
										@csrf
										<span class="input-group-btn">
										<input type="hidden" name="id_article" value="{{$topvente->id_article}}"/>
										<label for="number">Quantité :</label>
										<input type="number" name="number" id="number"value=1  required="required"><br>
										<span id="erreur_format"></span>
       									<button type="submit" class="btn btn-form btn-black display-4" name="add_basket" id="bouton_envoi">Ajouter au panier</button></span>
									</form>
									<?php }?>
								
									<?php
       									if ($guest == 4) 
        								{?>
									<form method="post" action="{{ route('deletearticle') }}">
										@csrf
										<span class="input-group-btn">
										<input type="hidden" name="id_article" value="{{$topvente->id_article}}"/>
										<button type="submit" class="btn btn-form btn-black display-4" name="supprimer">Supprimer</button></span>
									</form>
									<?php }?>
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
					<form method="post" action="{{ route('sort') }}">					
							@csrf
							<label for="category_sort">Trier par catégorie :</label>
							<select name="category_sort" id="category_sort">
							<option value=""></option>
							@foreach($categories as $categorie)
							<option value="{{$categorie->nom_categorie}}">{{$categorie->nom_categorie}}</option>
							@endforeach
							</select><br>
							<label for="price_sort">Trier par prix :</label>
							<select name="price_sort" id="price_sort">
											<option value=""></option>
											<option value="Croissant">Croissant</option>
											<option value="Decroissant">Décroissant</option>
							</select><br>
							<button type="submit" class="btn btn-form btn-black display-4" name="sort">Trier!</button></span>
						</form>
						
						<?php
						if ($guest == 4) 
        				{?>

						<form method="post" action="{{ route('addcategory') }}">
									@csrf
									<span class="input-group-btn">
									Créer une nouvelle catégorie:<br>
									<input type="text" name="newcategory" id="newcategory" required="required"><br>
									<button type="submit" class="btn btn-form btn-black display-4" name="add_category">Ajouter!</button></span>
						</form>
						<form method="post" action="{{ route('createarticle') }}">
									@csrf
									<span class="input-group-btn">
									Créer un nouvel article:<br>
									<label for="nom_article">Nom de l'article :</label>
									<input type="text" name="nom_article" id="nom_article" required="required"/><br>
									<label for="description_article">Description de l'article:</label>
									<textarea name="description_article" id="description_article"></textarea><br>
									<label for="prix_article">Prix de l'article :</label>
									<input type="text" name="prix_article" id="prix_article"  required="required"/><span id="erreurPrice"></span><br>
									<label for="image_article">Photo de l'article :</label>
									<input type="text" name="image_article" id="image_article" /><br>
									<label for="categorie_article" required="required">Catégorie de l'article :</label>
									<select name="categorie_article" id="categorie_article">
										@foreach($categories as $categorie)
											<option value="{{$categorie->nom_categorie}}">{{$categorie->nom_categorie}}</option>
										@endforeach
									</select><br>
									<button type="submit" class="btn btn-form btn-black display-4" name="add_article" id="add_button">Ajouter!</button></span>
						</form>
						<?php }?>
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
									<?php echo(number_format($article->prix_article, 2, ',', ' ')) ?>€<br>
									Description: {{$article->description_article}}.
									</p>
									<?php
       									if ($guest == 1 || $guest == 2 || $guest == 4   ) 
        								{?>
									<form method="post" action="{{ route('addbasket') }}">
										@csrf
										<span class="input-group-btn">
										<input type="hidden" name="id_article" value="{{$article->id_article}}"/>
										<label for="number">Quantité :</label>
										<input type="number" name="number" id="number" value=1  required="required"><br>
										<span id="erreur_format"></span>
       									<button type="submit" class="btn btn-form btn-black display-4" name="add_basket" id="bouton_envoi">Ajouter au panier</button></span>
									</form>
									<?php }?>

									<?php
       									if ($guest == 4) 
        								{?>
									<form method="post" action="{{ route('deletearticle') }}">
										@csrf
										<span class="input-group-btn">
										<input type="hidden" name="id_article" value="{{$article->id_article}}"/>
										<button type="submit" class="btn btn-form btn-black display-4" name="supprimer">Supprimer</button></span>
									</form>
									<?php }?>
								</div>
							</div>
						</div>
						@endforeach
						</div>
					</div>
			</section>
			<script>
				var formValid = document.getElementById('bouton_envoi');
				var quantite = document.getElementById('number');
				var formError = document.getElementById('erreur_format');
				var quantiteValid = /[\u0400-\u04FF]+/g;

				var buttonValid = document.getElementById('add_button');
				var price = document.getElementById('prix_article');
				var priceError = document.getElementById('erreurPrice');
				var priceValid =  /^[0-9]+(.[0-9]+)?$/;
				
				buttonValid.addEventListener('click', validation);

				function validation(event){
					if (priceValid.test(price.value)==false){
						event.preventDefault();
						priceError.textContent = 'Format de données entrées non valide!';
						priceError.style.color = 'red';
					}else{
					}
				}

			</script>
@endsection