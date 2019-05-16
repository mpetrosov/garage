@extends('master')

@section('navbar')
<nav class="navbar navbar-expand-sm navbar-dark bg-dark own-color">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{URL::asset('/img/Logo-Motionn2 klein.png')}}" class="rounded" alt="profile Pic" height="100" width="200"></a>
        <div class="collapse navbar-collapse" id="navbarsExample03">
        </div>
    <div>
</nav>
  
    
@endsection
@section('header')
<!--Carousel Wrapper-->


<!--/.Carousel Wrapper-->
@endsection
@section('gridboven')
    
    <div class="row text-center">
        <div class="col-md-3 shadow rounded cliente inner p-0">
            <img src="{{URL::asset('/img/motor.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2>Inspectie en Reparatie Motor</h2></div>
        </div>
        <div class="col shadow rounded cliente ml-2 inner p-0">
            <img src="{{URL::asset('/img/Turbo.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2>Turbo Revisie en Reparatie</h2></div>
        </div>
        <div class="col shadow rounded cliente ml-2 inner p-0">
            <img src="{{URL::asset('/img/computer diagnostic.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2> Uitlezen van Foutcodes</h2></div>
        </div>
        <div class="col-md-3 shadow rounded cliente ml-2 inner p-0">
            <img src="{{URL::asset('/img/schadeherstel.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2>Schadeherstel en Spuitwerk</h2></div>
        </div>
    </div>
    
@endsection

@section('content')
     <div class="row text-center">
            <div class="col-3 shadow rounded md-3 cliente mr-2 inner p-0">
                <div class="sidebar-nav">
                   <img src="{{URL::asset('/img/ophanging.png')}}" class="rounded" alt="profile Pic" height="400" width="400">
                <div class="carousel-caption"><h2>Inspectie en Reparatie Ophanging</h2></div>
                </div>
                <!--/sidebar-nav -->
            </div>
            <!--/span-->
            <div class="col ml-1 mr-1 p-0 shadow rounded cliente inner p-0">
                    <img src="{{URL::asset('/img/bigpic.jpg')}}" alt="profile Pic" height="400" width="700">
            </div>
            <!--/span-->
            <div class="col-md-3 shadow rounded cliente ml-2 inner p-0">
                <div class="sidebar-nav-pull-right">
                    <img src="{{URL::asset('/img/airco.jpg')}}" class="rounded" alt="profile Pic" height="400" width="380">
                    <div class="carousel-caption"><h2>Airco service</h2></div>
                </div>
                <!--/sidebar-nav-->
            </div>
            <!--/span-->
    </div>
        <!--/row-->
  
@endsection

@section('gridonder')
    <div class="row text-center">
        <div class="col-md-3 shadow rounded cliente inner p-0">
            <img src="{{URL::asset('/img/treshina-lobovogo-stekla.jpg')}}" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2>Ruitreparatie</h2></div>
        </div>
               
        <div class="col shadow rounded cliente ml-2 inner p-0">
            <img src="{{URL::asset('/img/onderhoud.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2>Onderhoud</h2></div>
        </div>
        <div class="col shadow rounded cliente ml-2 inner p-0">
                <img src="{{URL::asset('/img/Injectiesysteem Reinigen.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2>Brandstofsysteem Reinigen</h2></div>
        </div>
        <div class="col-md-3 shadow rounded cliente ml-2 inner p-0">
            <img src="{{URL::asset('/img/Koplampen polijsten 3.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
            <div class="carousel-caption"><h2>Koplampen Polijsten</h2></div>
        </div>
    </div>
        <div class="row justify-content-center">
        <div class="col-md-3 shadow rounded cliente inner p-0">Inbouw</div>
        {{-- <div class="col shadow rounded cliente ml-2 inner p-0"><a href="#about">Aankoopkeuring Auto</a></div> --}}
        {{-- <div class="col-md-3 shadow rounded cliente inner p-0 ml-2">Airco reinigen</div> --}}
        {{-- <div class="col-md-3 shadow rounded cliente ml-2 inner p-0">Grote Inspectie</div> --}}
    </div>
@endsection
    

    