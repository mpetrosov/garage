@extends('master')
<div class="circle one"></div>
<div class="circle two"></div>
<div class="circle three"></div>
@section('head')
<div class="row own-color">
  <div class="col-2 d-flex align-items-center">
    <a class="" href="#"><img src="{{URL::asset('/img/Logo-Motionn2 klein.png')}}" class="rounded" alt="profile Pic" height="150" width="250"></a>
  </div>
  <div class="col-7 d-flex align-items-end">
      {{-- <h3 class="motion">Motionn Garagebedrijf B.V.</h3> --}}
  </div>
  <div class="col-3 align-self-center contact">
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
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
        </ol>
        <div class="row justify-content-center">
            <div class="col">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('/img/Airbags_vervangen_resetten.jpg')}}" class="rounded d-block w-100 align-self-center" alt="profile Pic">
                        {{-- <div class="carousel-caption own-caption">
                            <h5>First slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div> --}}
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('/img/Inbouw_van_auto_electronica.jpg')}}" class="rounded d-block w-100" alt="profile Pic">
                        {{-- <div class="carousel-caption own-caption">
                            <h5>Second slide label</h5>
                            <h6> Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div> --}}
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('/img/Koplampen_polijsten.jpg')}}" class="rounded d-block w-100" alt="profile Pic">
                        {{-- <div class="carousel-caption own-caption">
                            <h5>Third slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div> --}}
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('/img/Reparatie_van_de_motor.jpg')}}" class="rounded d-block w-100" alt="profile Pic">
                        {{-- <div class="carousel-caption own-caption">
                            <h5>Third slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div> --}}
                    </div>
                     <div class="carousel-item">
                        <img src="{{URL::asset('/img/Reparatie_van_onderstel.jpg')}}" class="rounded d-block w-100" alt="profile Pic">
                        {{-- <div class="carousel-caption own-caption">
                            <h5>Third slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div> --}}
                    </div>
                     <div class="carousel-item">
                        <img src="{{URL::asset('/img/Schadeherstel_carusel.jpg')}}" class="rounded d-block w-100" alt="profile Pic">
                        {{-- <div class="carousel-caption own-caption">
                            <h5>Third slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div> --}}
                    </div>
                     <div class="carousel-item">
                        <img src="{{URL::asset('/img/Uitlaat_lassen_vervangen.jpg')}}" class="rounded d-block w-100" alt="profile Pic">
                        {{-- <div class="carousel-caption own-caption">
                            <h5>Third slide label</h5>
                            <h6>Nulla vitae elit libero, a pharetra augue mollis interdum.</h6>
                        </div> --}}
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

<!--Carousel Wrapper-->
@endsection
@section('gridboven')
    
    <div class="row text-center">
        <div class="col-lg shadow rounded client inner p-0">
            <div class="hovereffect">
                <img src="{{URL::asset('/img/motor.jpg')}}" class="img-responsive" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Inspectie en Reparatie Motor</h2>
                    <a class="info" href="http://motionn.nl/service/inspectie-en-reparatie-motor">Meer...</a>
                </div>
            </div>
            {{-- <div class="btnD"><button class="btn btn-outline-danger">More..</button></div> --}}
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/Turbo.jpg')}}" class="img-responsive" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                   <h2 class="mt-4">Turbo Revisie en Reparatie</h2>
                    <a class="info" href="http://motionn.nl/service/turbo-revisie-en-reparatie">Meer...</a>
                </div>
            </div>
             {{-- <div class="btnD"><button class="btn btn-outline-danger">More..</button></div> --}}
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/computer diagnostic.jpg')}}" class="img-responsive" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Uitlezen van Foutcodes</h2>
                    <a class="info" href="http://motionn.nl/service/uitlezen-van-foutcodes">Meer...</a>
                </div>
            </div>
             {{-- <div class="btnD"><button class="btn btn-outline-danger">More..</button></div> --}}
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/schadeherstel.jpg')}}" class="img-responsive" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Schadeherstel en Spuitwerk</h2>
                    <a class="info" href="http://motionn.nl/service/schadeherstel-en-spuitwerk">Meer...</a>
                </div>
            </div>
             {{-- <div class="btnD"><button class="btn btn-outline-danger">More..</button></div> --}}
        </div>
    </div>
    
@endsection

@section('content')
     <div class="row text-center">
        <div class="col-3 shadow rounded client mr-2 inner p-0">
            <div class="hovereffect">
                <img src="{{URL::asset('/img/ophanging.png')}}" class="rounded img-responsive" alt="profile Pic" height="400" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Inspectie en Reparatie Ophanging</h2>
                    <a class="info" href="http://motionn.nl/service/inspectie-en-reparatie-ophanging">Meer...</a>
                </div>      
            </div>
        </div>
        <div class="col ml-1 mr-1 shadow rounded client inner p-0 ">
            <div class="b-hovereffect">
                <img src="{{URL::asset('/img/bigpic.jpg')}}" class="img-responsive" alt="profile Pic" height="400" width="720">
                <div class="b-overley">
                    <h2>Motionn</h2>
                    <p class="set1">
                        <a href="https://www.youtube.com/channel/UCE1_BeQoNZUEJ1xTyk3TuSQ">
                            <i class="fab fa-youtube-square fa-5x"></i>
                        </a>
                        <a href="https://plus.google.com/103206690461531542354">
                            <i class="fab fa-google-plus-square fa-5x"></i>
                        </a>
                    </p>
                    <hr>
                    <hr>
                    <p class="set2">
                        <a href="http://facebook.com/motionn">
                            <i class="fab fa-facebook-square fa-5x"></i>
                        </a>
                        <a href="http://www.marktplaats.nl/verkopers/2449644.html">
                            <i class="fas fa-share-alt-square fa-10x"></i>
                            {{-- <img src="{{URL::asset('/img/marktP.png')}}" class="img-responsive" alt="profile Pic" height="15" width="15"> --}}
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 shadow rounded client ml-2 inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/airco.jpg')}}" class="rounded img-responsive" alt="profile Pic" height="400" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Airco service</h2>
                    <a class="info" href="http://motionn.nl/service/airco">Meer...</a>
                </div>      
            </div>
        </div>
    </div>
        <!--/row-->
  
@endsection
@section('gridonder')
    <div class="row text-center">
        <div class="col-lg shadow rounded client inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/treshina-lobovogo-stekla.jpg')}}" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Ruitreparatie</h2>
                    <a class="info" href="http://motionn.nl/service/ruitreparatie">Meer...</a>
                </div>      
            </div>
        </div>
               
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/onderhoud.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Onderhoud</h2>
                    <a class="info" href="http://motionn.nl/service/onderhoud">Meer...</a>
                </div>      
            </div>
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/Injectiesysteem Reinigen.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Brandstofsysteem Reinigen</h2>
                    <a class="info" href="http://motionn.nl/service/brandstofsysteem-reinigen">Meer...</a>
                </div>      
            </div>
        </div>
        <div class="col-lg shadow rounded client ml-2 inner p-0">
            <div class="hovereffect">
                    <img src="{{URL::asset('/img/Koplampen polijsten 3.jpg')}}" class="rounded" alt="profile Pic" height="200" width="300">
                <div class="overlay">
                    <h2 class="mt-4">Koplampen Polijsten</h2>
                    <a class="info" href="http://motionn.nl/service/koplampen-polijsten">Meer...</a>
                </div>      
            </div>
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
@section('footer')
<div class="row mt-5 mb-5">
    <div class="col-12 text-center">
           <a href="http://motionn.nl/over-ons/contactgegevens"><h4 class="footer-contact">Motionn Garagebedrijf B.V. | Calandstraat 89, 3125 BA Schiedam |  010-7518506 | info@motionn.nl<h4></a>
    </div>
</div>
{{-- <div class="row funny-animo">
    <div class="col a-container">
        <span class="text1">Jij blij!</span><br>
        <span class="text2">Wij blij!</span>
    </div>
</div> --}}
@endsection




   

    