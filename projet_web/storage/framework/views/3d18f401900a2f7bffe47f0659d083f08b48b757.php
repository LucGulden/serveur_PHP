<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/mdb.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/style.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/all.min.css')); ?>" rel="stylesheet">
        <title>BDE Exia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
		<nav class="navbar navbar-expand-lg navbar-dark blue-gradient">

 
	<img src="images/logo_exia.png" style=" max-width: 10%; max-height: 50%; margin-right: 10px;">
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
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

      <!-- Dropdown -->
   

    
    <!-- Links -->
	

	</ul>
 
  <div class="justify-content-end">
  		<ul class="navbar-nav">
  		<li>
		    <form class="form-inline">
		      <div class="md-form my-0">
		        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		      </div>
		    </form>
		</li>


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
  </div>
  <!-- Collapsible content -->
<img src="images/logo_bde.png" style=" max-width: 6%; max-height: 6%;">
</nav>
<!--/.Navbar-->




<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
		<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/mdb.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('js/all.min.js')); ?>"></script>
    </body>
</html>
