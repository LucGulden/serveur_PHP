@extends('layout')

@section('content')
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
            <?php $i=0; ?>
            @foreach($articles as $article)
            <div class="<?php if($i==0) {echo 'carousel-item active';} else {echo 'carousel-item';}?>">
              <h2 class="text-center">{{ $article->nom_article }}</h2>
              <div class="row">
                <div class="col-12 col-md-6 align-self-center text-align-center">
                  <img class="d-block w-100" style="margin-bottom:10px;" src="{{ $article->image_article }}" alt="First slide">
                  <strong style="margin-left: 15px;">Prix: <?php echo(number_format($article->prix_article, 2, ',', ' ')) ?>€</strong>
                </div>
                <div class="col-12 col-md-6" style="margin-top: 10px;">  
                  
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula vehicula sapien, in accumsan ipsum gravida a. Integer scelerisque, felis sed ultricies lobortis, justo quam aliquet est, id pretium ante odio eu orci. In sit amet mauris et risus suscipit vehicula vel a justo. Sed velit tellus, faucibus in magna ac, faucibus posuere enim. Mauris nec tortor neque. Mauris non nulla urna. Maecenas ut risus ac odio tincidunt imperdiet pharetra quis nunc. Nunc in laoreet libero. Fusce lobortis dolor sit amet ultricies sodales. Quisque laoreet massa a urna aliquet laoreet. Proin sed aliquet neque, sed ultrices massa. Vivamus aliquam lacinia eros in condimentum. Sed lobortis molestie tellus eu euismod. Fusce dignissim blandit felis, id finibus mi sollicitudin eu. Aenean venenatis nulla quis finibus faucibus. Duis in risus et justo maximus laoreet et ut enim.</p>
                </div>
              </div>
            </div>
            <?php $i++; ?>
            @endforeach
          </div>
      </div>
    </div>
@endsection