@extends('master')

<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide custom-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="{{URL::asset('/img/motor.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <h3>Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
                </div>
            <div>
            
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="{{URL::asset('/img/motor.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <h3>Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
                </div>
            <div>
        </div>
        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-4">
                    <img src="{{URL::asset('/img/motor.jpg')}}" class="rounded" alt="profile Pic" height="200" width="360">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h2>First slide label</h2>
                    <h3>Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
                </div>
            <div>
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