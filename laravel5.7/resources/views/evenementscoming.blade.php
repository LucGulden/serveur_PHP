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

  <section class="mbr-section form1 cid-rfRVRaDa1Q" id="form1-c">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Evenements à venir</h1>
            </div>
        </div>
    </div>
</section>

<section>

    
  @foreach($events as $event)
  <?php
    $nom_event=$event->nom_events;
  ?>
    <div class="container-fluid border border-warning rounded mb-0">
        <h3>{{ $event->nom_events }}</h3>
        <p>{{ $event->description_events }}</p>
		<img src="{{ $event->image_events }}" alt="image de présentation de l'évènement" style="max-width: 300px"/>
		<div class="jaime">
        <a href=<?=$nom_event.".csv"?> class="btn btn-form btn-black display-4">Liste participants</a>
           <form method="post" action="{{ route('Evenementscoming_post') }}">
        @csrf
        <span class="input-group-btn">
        <input type="hidden" name="id_event_post" value="{{ $event->id_events }}"/>
        
        <?php
        $guest = Session::get('role');
        if ($guest == 1 || $guest == 2 || $guest == 4   ) 
        {?>
        <button type="submit" class="btn btn-form btn-black display-4" name="participe_event">Participer à l'événement</button></span>
        <?php }?>
        </form>
        <p>{{ $event->nbrparticipants_events }} personnes participent à cet événement</p>
		</div>
    </div>
    @endforeach
   
</section>

@endsection