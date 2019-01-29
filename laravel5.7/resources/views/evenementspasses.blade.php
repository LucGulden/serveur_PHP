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

    
  @foreach($events as $event)
    <div class="container-fluid border border-warning rounded mb-0">
        <h3>{{ $event->nom_events }}</h3>
        <p>{{ $event->description_events }}</p>
		<img src="{{ $event->image_events }}" alt="image de présentation de l'évènement" style="max-width: 300px"/>
		<div class="jaime">
		<span class="input-group-btn"><button type="submit" class="btn btn-form btn-black display-4">Voir les photos de l'évènements</button></span>
        </div>
    </div>
    @endforeach
   
</section>

@endsection
  
  
