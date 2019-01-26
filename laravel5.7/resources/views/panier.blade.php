@extends('layout')

@section('content')
				<div class="title">
					<h1>
						Votre panier
					</h1>
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