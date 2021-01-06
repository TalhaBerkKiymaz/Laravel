@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="./hotelimage/hotel1.jpg" alt="hotel1" class="img-fluid"> 
        <div class="container">
          <div class="carousel-caption text-left">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel2.jpg" alt="hotel2" class="img-fluid"> 
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel3.jpg" alt="hotel3" class="img-fluid"> 
        <div class="container"> 
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel4.jpg" alt="hotel4" class="img-fluid"> 
        <div class="container"> 
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel5.jpg" alt="hotel5" class="img-fluid"> 
        <div class="container"> 
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel6.jpg" alt="hotel6" class="img-fluid"> 
        <div class="container"> 
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel7.jpg" alt="hotel7" class="img-fluid"> 
        <div class="container"> 
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel8.jpg" alt="hotel8" class="img-fluid"> 
        <div class="container"> 
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="./hotelimage/hotel9.jpg" alt="hotel9" class="img-fluid"> 
        <div class="container"> 
          <div class="carousel-caption text-right">
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="./hotelimage/minic.jpg" width="250" height="250" alt="minic" class="img-fluid"> 
        <h2>Miniclub</h2>
        <p>Bij miniclub zijn de spannendste, origineelste en leukste attracties te vinden die je je maar kunt voorstellen. Deze attracties zijn verspreid over 500 m2!
           Klimmen, glijden, rijden, botsen, zweven, spelen, schieten en kruipen. Het kan allemaal in miniclub! Veilig en hygiënisch.</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="./hotelimage/restaurant.jpg" width="250" height="250" alt="restaurant" class="img-fluid"> 
        <h2>Restaurant</h2>
        <p>Al het eten en drinken dat in Adenya wordt aangeboden, wordt gekocht bij "Halal-gecertificeerde" bedrijven en aan u gepresenteerd in overeenstemming met de islamitische principes.
           Sedir Restaurant, waar u een open buffet kunt kiezen voor ochtend-, avond- en lunchmaaltijden, ons A'lacarte-restaurant dat u speciale delicatessen bij het haardvuur biedt, Taş Ev, met premium smaken, en Sancak café / restaurant en Yelken Snack-restaurants die de hele dag door snacks serveren, met verschillende concepten.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src="./hotelimage/zwembad.jpg" width="250" height="250" alt="zwembad" class="img-fluid"> 
        <h2>Zwembad</h2>
        <p>Je hebt het verdiend om af en toe de tijd stop te zetten en de drukte te laten passeren. 
            Dit kan je nergens beter dan op een onbewoond eiland. 
            Welnu, bij Adenya hoef je geen miljonair te zijn om je er een te voelen. Luxueuze verwennerij en altijd onder de meest strenge hygiënische normen. </p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Single Suit <span class="text-muted">(Single King)</span></h2>
        <p class="lead">De kamer, ontworpen voor 2 volwassenen en 1 kind, heeft een oppervlakte van 22 m² en bestaat uit twee opties, 
          met uitzicht op zee en het land. In de kamer is er een tweepersoonsbed en een eenpersoonsslaapbank voor het kind.</p>
      </div>
      <div class="col-md-5">
        <img src="./hotelimage/singlesuit.jpg" width="500" height="500" alt="singlesuit" class="img-fluid"> 
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">King Suit </h2>
        <p class="lead">Als je wilt zeggen dat ik vakantie heb gehad in de Middellandse Zee, dan is deze kamer iets voor jou. Ons King Suit, 
          dat de hele Middellandse Zee onder uw voeten legt, heeft een ruime gebruiksoppervlakte van 64 m². De ouders- en kinderkamers hebben 
          een zithoek, een groot balkon en een balkonzitgroep.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="./hotelimage/kingsuit.jpg" width="500" height="500" alt="kingsuit" class="img-fluid"> 
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Superior Suit </h2>
        <p class="lead">Onze suite met een gebruiksoppervlakte van 68 m² wordt haar gasten aangeboden met uitzicht op het land. 
          Met een slaapkamer, een kinderkamer, een zithoek, balkonsets, biedt het veel mogelijkheden om tijd door te brengen met het gezin.
          Op het balkon staat een grote jacuzzi voor vier personen. Voorzieningen van het merk Bvlgari, dagelijkse traktaties in de kamer en vele andere privileges die uw comfort verhogen, wachten op u.</p>
      </div>
      <div class="col-md-5">
      <img src="./hotelimage/superiorsuit.jpg" width="500" height="500" alt="superiorsuit" class="img-fluid"> 
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection