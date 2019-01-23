<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">
        <link href="css/boutique.css" rel="stylesheet">

        <link href="css/all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

		<title>Boutique</title>

		<link rel="stylesheet" href="assets/theme/css/style.css">
		<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
		
	</head>
	<!--navbar-expand-lg -->
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #e3f2fd; background: linear-gradient(#4E4E4E, #000000);">
				<img src="images/logo_exia.png" style=" max-width: 6%; margin-right: 10px;" alt="logo exia">
				<img src="images/logo_bde.png" style=" max-width: 4%; margin-right: 10px;" alt="logo bde">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="basicExampleNav">
		  
				  <!-- Links -->
				  <ul class="navbar-nav mr-auto">
					<li class="nav-item active">
					  <a class="nav-link" href="#"><i class="fas fa-home" style="margin-right: 3px;"></i>Accueil
						<span class="sr-only">(current)</span>
					  </a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#"><i class="fas fa-cannabis" style="margin-right: 3px;"></i>Evénements</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#"><i class="far fa-lightbulb" style="margin-right: 3px;"></i>Boîte à idées</a>
					</li>
					<li>
					  
				  </ul>
				  <form class="form-inline">
				  <i class="fas fa-search" aria-hidden="true"></i>
			<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
					  </form>
		  
					<ul class="navbar-nav">
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false"><i class="fas fa-cog" style="margin-right: 3px;"></i>Compte</a>
					  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Se connecter</a>
						<a class="dropdown-item" href="#">Se déconnecter</a>
						<a class="dropdown-item" href="#">Paramètres</a>
					  </div>
					</li>
					</ul>
				</div>      
			  </nav>
			
		</header>

		<main>
			<header>
				<div class="title">
					<h1>
						Boutique
					</h1>
				</div>
			</header>
			<div class="panier">
				<a href="#" class="btn btn-black display-4">Panier</a>
			</div>
			<section class="topsales">
				<div class="container">
					<div class="top-sales">
						<h2 class="align-center">Top ventes</h2>
					</div>
					
					@foreach ($topsales_names as $topsales_name)
					<div class="media-container-row">
						<div class=" col-12 col-lg-4 col-md-6 my-2">
							<div class="pricing">
								<div class="plan-header">
									<div class="plan-price">
									<img class="price-figure mbr-fonts-style display-1" src="images/teddy.jpg" alt="Article">									
										<h3 class="plan-title mbr-fonts-style display-5">
											{{ $topsales_name }}
										</h3>
										<hr>
									</div>
								</div>
								<div class="plan-body">
									<p class="mbr-text mbr-fonts-style display-7">
										25,00€
									</p>
									<div class="mbr-section-btn pt-4 text-center">
										<a href="#" class="btn btn-black display-4">ajouter au panier</a>
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
					<div class="media-container-row">
						<div class=" col-12 col-lg-4 col-md-6 my-2">
							<div class="pricing">
								<div class="plan-header">
									<div class="plan-price">
									<img class="price-figure mbr-fonts-style display-1" src="images/teddy.jpg" alt="Article">									
										<h3 class="plan-title mbr-fonts-style display-5">
											Teddy Exia.CESI Strasbourg
										</h3>
										<hr>
									</div>
								</div>
								<div class="plan-body">
									<p class="mbr-text mbr-fonts-style display-7">
										25,00€
									</p>
									<div class="mbr-section-btn pt-4 text-center">
										<a href="#" class="btn btn-black display-4">ajouter au panier</a>
									</div>
								</div>
							</div>
						</div>
			
						<div class=" col-12 col-lg-4 col-md-6 my-2">
							<div class="pricing">
								<div class="plan-header">
									<div class="plan-price">
									<img class="price-figure mbr-fonts-style display-1" src="images/teddy.jpg" alt="Article">									
										<h3 class="plan-title mbr-fonts-style display-5">
											Teddy Exia.CESI Strasbourg
										</h3>
										<hr>
									</div>
								</div>
								<div class="plan-body">
									<p class="mbr-text mbr-fonts-style display-7">
										25,00€
									</p>
									<div class="mbr-section-btn pt-4 text-center">
										<a href="#" class="btn btn-black display-4">ajouter au panier</a>
									</div>
								</div>
							</div>
						</div>
			
						<div class=" col-12 col-lg-4 col-md-6 my-2">
							<div class="pricing">
								<div class="plan-header">
									<div class="plan-price">
									<img class="price-figure mbr-fonts-style display-1" src="images/teddy.jpg" alt="Article">									
										<h3 class="plan-title mbr-fonts-style display-5">
											Teddy Exia.CESI Strasbourg
										</h3>
										<hr>
									</div>
								</div>
								<div class="plan-body">
									<p class="mbr-text mbr-fonts-style display-7">
										25,00€
									</p>
									<div class="mbr-section-btn pt-4 text-center">
										<a href="#" class="btn btn-black display-4">ajouter au panier</a>
									</div>
								</div>
							</div>
						</div>
			
					</div>
				</div>
					<div class="container">
						<div class="media-container-row">
							<div class=" col-12 col-lg-4 col-md-6 my-2">
								<div class="pricing">
									<div class="plan-header">
										<div class="plan-price">
										<img class="price-figure mbr-fonts-style display-1" src="images/teddy.jpg" alt="Article">									
											<h3 class="plan-title mbr-fonts-style display-5">
												Teddy Exia.CESI Strasbourg
											</h3>
											<hr>
										</div>
									</div>
									<div class="plan-body">
										<p class="mbr-text mbr-fonts-style display-7">
											25,00€
										</p>
										<div class="mbr-section-btn pt-4 text-center">
											<a href="#" class="btn btn-black display-4">ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
				
							<div class=" col-12 col-lg-4 col-md-6 my-2">
								<div class="pricing">
									<div class="plan-header">
										<div class="plan-price">
										<img class="price-figure mbr-fonts-style display-1" src="images/teddy.jpg" alt="Article">									
											<h3 class="plan-title mbr-fonts-style display-5">
												Teddy Exia.CESI Strasbourg
											</h3>
											<hr>
										</div>
									</div>
									<div class="plan-body">
										<p class="mbr-text mbr-fonts-style display-7">
											25,00€
										</p>
										<div class="mbr-section-btn pt-4 text-center">
											<a href="#" class="btn btn-black display-4">ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
				
							<div class=" col-12 col-lg-4 col-md-6 my-2">
								<div class="pricing">
									<div class="plan-header">
										<div class="plan-price">
										<img class="price-figure mbr-fonts-style display-1" src="images/teddy.jpg" alt="Article">									
											<h3 class="plan-title mbr-fonts-style display-5">
												Teddy Exia.CESI Strasbourg
											</h3>
											<hr>
										</div>
									</div>
									<div class="plan-body">
										<p class="mbr-text mbr-fonts-style display-7">
											25,00€
										</p>
										<div class="mbr-section-btn pt-4 text-center">
											<a href="#" class="btn btn-black display-4">ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
				
						</div>
					</div>
			</section>
		</main>


<!-- Footer -->
<footer class="page-footer font-small indigo" style="margin-top: 30px; background-color: #e3f2fd; background: linear-gradient(#4E4E4E, #000000);">

	<!-- Footer Links -->
	<div class="container text-center text-md-left">

		<!-- Grid row -->
		<div class="row">

			<!-- Grid column -->
			<div class="col-md-3 mx-auto">

				<!-- Links -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contactez-nous</h5>

				<ul class="list-unstyled">
					<li>
					<i class="fas fa-phone"></i> 0 800 054 568
					</li>
					<li>
					<i class="far fa-envelope"></i>
					</li>
				</ul>

			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none">

			<!-- Grid column -->
			<div class="col-md-3 mx-auto">

				<!-- Links -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

				<ul class="list-unstyled">
					<li>
						<a href="#!">Link 1</a>
					</li>
					<li>
						<a href="#!">Link 2</a>
					</li>
					<li>
						<a href="#!">Link 3</a>
					</li>
					<li>
						<a href="#!">Link 4</a>
					</li>
				</ul>

			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none">

			<!-- Grid column -->
			<div class="col-md-3 mx-auto">

				<!-- Links -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

				<ul class="list-unstyled">
					<li>
						<a href="#!">Link 1</a>
					</li>
					<li>
						<a href="#!">Link 2</a>
					</li>
					<li>
						<a href="#!">Link 3</a>
					</li>
					<li>
						<a href="#!">Link 4</a>
					</li>
				</ul>

			</div>
			<!-- Grid column -->

			<hr class="clearfix w-100 d-md-none">

			<!-- Grid column -->
			<div class="col-md-3 mx-auto">

				<!-- Links -->
				<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Suivez-nous sur les réseaux</h5>

			 <div>
					
					<a class="btn-floating btn-lg btn-yt" type="button" role="button"><i class="fab fa-youtube"></i></a>
					
					<a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
					
					<a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
				 
					<a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
			 </div>   

			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2018 Copyright:
		<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->

		<script src="./assets/vendors/jquery/jquery-3.3.1.min.js"></script>
		<script src="./assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="js/all.min.js"></script>

	</body>
</html>