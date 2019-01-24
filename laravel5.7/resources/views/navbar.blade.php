<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #e3f2fd; background: linear-gradient(#4E4E4E, #000000);">
    <img src="images/logo_exia.png" style="width: 70px; margin-right: 10px;" alt="logo exia">
    <img src="images/logo_bde.png" style=" width: 40px; margin-right: 10px;" alt="logo bde">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="basicExampleNav">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/"><i class="fas fa-home" style="margin-right: 3px;"></i>Accueil
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown" id="dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-glass-cheers" style="margin-right: 3px;"></i> Evenements
                </a>
                <div class="dropdown-menu dropdown-primary" id="liste_deroulante_event" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/evenementspasses">Evénements passés</a>
                    <a class="dropdown-item" href="#">Evénements à venir</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/boite-a-idees">
                    <i class="far fa-lightbulb" style="margin-right: 3px;"></i>Boîte à idées
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/boutique"><i class="fas fa-shopping-cart" style="margin-right: 3px;"></i>Boutique
            </a>
            </li>
        </ul>
        <form class="form-inline">
            <i class="fas fa-search" id="search" aria-hidden="true" style="color: white"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
        </form>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Deconnexion') }}">
                    <i class="fas fa-cog" style="margin-right: 3px;"></i>Déconnexion
                </a>
            </li>
        </ul>
    </div>      
</nav>
