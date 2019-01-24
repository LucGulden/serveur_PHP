@extends('layout')

@section('content')

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
    <div class="container-fluid border border-warning rounded mb-0">
        <h3>{{ $event->nom_event }}</h3>
        <p>{{ $event->description_event }}</p>
		<img src="{{ $event->image_event }}" alt="image de présentation de l'évènement" style="max-width: 300px"/>
		<div class="jaime">    
		<span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">J'aime</button></span>
		<span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">Voir les photos de l'évènements</button></span>
        </div>
    </div>
    @endforeach
   
</section>

@endsection