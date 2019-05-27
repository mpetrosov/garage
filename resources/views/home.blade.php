@extends('master')
<div class="circle one"></div>
<div class="circle two"></div>
<div class="circle three"></div>
@section('head')
<div class="row own-color jumbotron">
  <div class="col-2">
    <a class="" href="#"><img src="{{URL::asset('/img/Logo-Motionn2 klein.png')}}" class="rounded" alt="profile Pic" height="100" width="200"></a>
  </div>
  <div class="col-7 d-flex align-items-end">
      <h3 class="motion">Motionn Garagebedrijf B.V.</h3>
  </div>
  <div class="col-3 contact">
        <h4>Calandstraat 89, Schiedeam</h4>
        <h5>010-7518506</h5>
        <h6>Maandag t/m zaterdag</h6>
        <h6>van 9:00 tot 17:45 uur</h6>
    </div>
</div>
{{-- <nav class="navbar navbar-expand-sm navbar-dark bg-dark own-color">   
    <a class="navbar-brand" href="#"><img src="{{URL::asset('/img/Logo-Motionn2 klein.png')}}" class="rounded" alt="profile Pic" height="100" width="200"></a>
    <div class="collapse navbar-collapse" id="navbarsExample03">
    </div>
</nav> --}}
  
   
@endsection
@section('header')
<!--Carousel Wrapper-->
<div class="bd-example mt-4 mb-3 slider-area">
    <div id="carouselExampleCaptions" class="carousel slide custom-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('/img/motor.jpg')}}" class="rounded" alt="profile Pic" height="300" width="500">
                        <div class="carousel-caption own-caption">
                            <h5>First slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('/img/schadeherstel.jpg')}}" class="rounded" alt="profile Pic" height="300" width="500">
                        <div class="carousel-caption own-caption">
                            <h5>Second slide label</h5>
                            <h6> Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('/img/Turbo.jpg')}}" class="rounded" alt="profile Pic" height="300" width="500">
                        <div class="carousel-caption own-caption">
                            <h5>Third slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!--/.Carousel Wrapper-->
@endsection
@section('gridboven')
    
    <div class="row text-center">
        <div class="col-lg shadow rounded client inner p-0">
            <img src="{{URL::asset('/img/motor.jpg')}}" class="p-0" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption client-align"><h2 class="my-auto">Inspectie en Reparatie Motor</h2></div>
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <img src="{{URL::asset('/img/Turbo.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption"><h2>Turbo Revisie en Reparatie</h2></div>
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <img src="{{URL::asset('/img/computer diagnostic.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption"><h2> Uitlezen van Foutcodes</h2></div>
        </div>
        <div class="col shadow rounded client ml-2 inner p-0">
            <img src="{{URL::asset('/img/schadeherstel.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption"><h2>Schadeherstel en Spuitwerk</h2></div>
        </div>
    </div>
    
@endsection

@section('content')
     <div class="row text-center">
        <div class="col-3 shadow rounded client mr-2 inner p-0">
            <img src="{{URL::asset('/img/ophanging.png')}}" class="rounded" alt="profile Pic" height="400" width="300">
            <div class="carousel-caption"><h2 class="client-align">Inspectie en Reparatie Ophanging</h2></div>
        </div>
        <div class="col ml-1 mr-1 shadow rounded client inner p-0 ">
            <img src="{{URL::asset('/img/bigpic.jpg')}}" alt="profile Pic" height="400" width="720">
        </div>
        <div class="col-3 shadow rounded client ml-2 inner p-0">
            <img src="{{URL::asset('/img/airco.jpg')}}" class="rounded" alt="profile Pic" height="400" width="300">
            <div class="carousel-caption"><h2>Airco service</h2></div>
        </div>
    </div>
        <!--/row-->
  
@endsection
@section('gridonder')
    <div class="row text-center">
        <div class="col-lg shadow rounded client inner p-0">
            <img src="{{URL::asset('/img/treshina-lobovogo-stekla.jpg')}}" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption"><h2>Ruitreparatie</h2></div>
        </div>
               
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <img src="{{URL::asset('/img/onderhoud.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption"><h2>Onderhoud</h2></div>
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
                <img src="{{URL::asset('/img/Injectiesysteem Reinigen.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption"><h2>Brandstofsysteem Reinigen</h2></div>
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <img src="{{URL::asset('/img/Koplampen polijsten 3.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
            <div class="carousel-caption"><h2>Koplampen Polijsten</h2></div>
        </div>
    </div>
    {{-- <div class="row justify-content-center"> --}}
        {{-- <div class="col-md-3 shadow rounded client inner p-0">Inbouw</div> --}}
        {{-- <div class="col shadow rounded client ml-2 inner p-0"><a href="#about">Aankoopkeuring Auto</a></div> --}}
        {{-- <div class="col-md-3 shadow rounded client inner p-0 ml-2">Airco reinigen</div> --}}
        {{-- <div class="col-md-3 shadow rounded client ml-2 inner p-0">Grote Inspectie</div> --}}
    {{-- </div> --}}
@endsection
@section('car')
    <div class="row car-container">
        <div class="car-top1">
            <div class="window1"></div>
            <div class="window2"></div>

        </div>
        <div class="car-top2">
            <div class="door">
                <div class="door-knob"></div>
            </div>
        </div>
        <div class="car-bottom">
            <div class="wheel1-top"></div>
            <div class="wheel1">
                <div class="wheel-dot1"></div>
                <div class="wheel-dot2"></div>
                <div class="wheel-dot3"></div>
                <div class="wheel-dot4"></div>

            </div>

            <div class="wheel2-top"></div>
            <div class="wheel2">
                <div class="wheel-dot1"></div>
                <div class="wheel-dot2"></div>
                <div class="wheel-dot3"></div>
                <div class="wheel-dot4"></div>
            </div>
        </div>
    </div>
@endsection
@section('funny-logo')
<div class="row funny-animo">
    <div class="col a-container">
        <span class="text1">Jij blij!</span><br>
        <span class="text2">Wij blij!</span>
    </div>
</div>
@endsection




   

    