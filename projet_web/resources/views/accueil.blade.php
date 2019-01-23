<!doctype html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mdb.min.css" rel="stylesheet">
        <link href="css/style.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <link href="css/all.min.css" rel="stylesheet">
        <title>BDE Exia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
		
<!-- BARRE DE NAVIGATION -->
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

        <li class="nav-item dropdown" id="dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><i class="fas fa-glass-cheers" style="margin-right: 3px;"></i> Evenements</a>
        <div class="dropdown-menu dropdown-primary" id="liste_deroulante_event" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Evénements passés</a>
          <a class="dropdown-item" href="#">Evénements à venir</a>
        </div>
      </li>


        <li class="nav-item">
        <a class="nav-link" href="#"><i class="far fa-lightbulb" style="margin-right: 3px;"></i>Boîte à idées</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/boutique"><i class="fas fa-shopping-cart" style="margin-right: 3px;"></i>Boutique</a>
        </li>

        
        

    </ul>
    <form class="form-inline">
    <i class="fas fa-search" aria-hidden="true"></i>
<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
        </form>

        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-cog" style="margin-right: 3px;"></i>Déconnexion</a>
        </li>
        </ul>
    </div>      
</nav>
<!--/.Navbar-->
 




    <div class="container-fluid border border-primary rounded mb-0" style="margin-top: 30px; width: 90%; background-color: rgba(204,204,204,0.33); border-width: 10px;">
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
          <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active"><h2 class="text-center">Lorem ipsum dolor sit amet</h2>
              <div class="row">
                <div class="col-12 col-md-6 align-self-center">
                  <img class="d-block w-100" style="margin-bottom:10px;" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
                </div>
                <div class="col-12 col-md-6">  
                  
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
                </div>
              </div>
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <div class="row">
                  <div class="col-12 col-md-6">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" alt="Second slide">
                  </div>
                  <div class="col-12 col-md-6">  
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
                  </div>
              </div>
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
            <div class="row">
                  <div class="col-12 col-md-6">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Third slide">
                  </div>
                  <div class="col-12 col-md-6">  
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
                  </div>
              </div>
            </div>
            <!--/Third slide-->
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          <!--/.Controls-->
        
      <!--/.Carousel Wrapper-->
      </div>
    </div>


<!-- Footer -->
<footer class="page-footer font-small indigo" style="margin-top: 30px; background-color: #e3f2fd; background: linear-gradient(#4E4E4E, #000000);">

    <!-- Footer Links -->
    <div class="container text-center">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-12 col-md-6 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contactez-nous</h5>

          <ul class="list-unstyled">
            <li>
            <i class="fas fa-phone"></i> 0 800 054 568
            </li>
            <li style="margin-top: 10px;">
            <i class="far fa-envelope"></i><a href="mailto:bde-strasbourg.exia.cesi@viacesi.fr"> bde-strasbourg.exia.cesi@viacesi.fr</a>
            </li>
          </ul>

        </div>
       

    

    
       

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-12 col-md-6 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Suivez-nous sur les réseaux</h5>

         <div>
            
            <a class="btn-floating btn-lg btn-yt" role="button"><i class="fab fa-youtube"></i></a>
            
            <a class="btn-floating btn-lg btn-li" role="button"><i class="fab fa-linkedin-in"></i></a>
            
            <a class="btn-floating btn-lg btn-tw" role="button"><i class="fab fa-twitter"></i></a>
           
            <a class="btn-floating btn-lg btn-fb" role="button"><i class="fab fa-facebook-f"></i></a>
         </div>   

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© CESI 2019 - <a href="/mentions_legales">Mentions Légales</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script src="js/mdb.min.js"></script>
		<script src="js/all.min.js"></script>
    </body>
</html>
