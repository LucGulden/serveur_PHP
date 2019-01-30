@extends('layout')

@section('content')

<!-- Consition premettant d'afficher la page qu'a des utilisateurs connectés-->
@if(Session::has('connexion'))
		<p > <p>
@else 
        <?php 
          header('Location: /');
          exit();
         ?>
@endif


<!-- Section représentant le titre 'Evenements passés' en grand -->
<section class="mbr-section form1 cid-rfRVRaDa1Q" id="form1-c">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Evenements passés</h1>
            </div>
        </div>
    </div>
</section>


<section>
    <?php $count=0;?>

    <!-- Pour chaque événement, on crée un container qui contient le titre l'image, 
    un bouton permettant d'afficher les photos de l'événement -->
    @foreach($events as $event)
  
    <div class="container-fluid border border-warning rounded mb-0">
        <h3>{{ $event->nom_events }}</h3>
        <p>{{ $event->description_events }}</p>
        <img src="{{ $event->image_events }}" alt="image de présentation de l'évènement" style="max-width: 300px"/>
        <div class="jaime">
            <form method="post" action="{{ route('Evenementspasses_post') }}">
            @csrf
                <span class="input-group-btn">
                    <input type="hidden" name="idevent" value="{{ $event->id_events }}"/>
                    <button id="menu" type="submit" class="btn btn-form btn-black display-4" name="{{$count.'nom_post'}}">Voir les photos de l'évènements</button>
                </span>
            </form>
        </div>

        <?php
            // Si on clique sur le bouton voir les photos, 
            // on affiche la div contenant la galerie de photos correspondante
            if(isset($_POST[$count.'nom_post']))
            {
            ?>
            <div id="{{ $event->id_events }}">
                <div class="container">
                    <div class="container gallery-container">
                        <div class="tz-gallery">
                            <div class="row mb-3">
                            @foreach($photos_events as $photos_event)
                                <div class="col-md-4">
                                    <div class="card">
                                        <img src="{{ $photos_event->chemin_photos }}" alt="{{ $photos_event->nom_events }}" class="card-img-top">
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php $count++; ?>
    @endforeach

</section>
@endsection