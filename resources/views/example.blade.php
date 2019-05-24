@extends('master')
@section('head')
<div class="row">
  <div class="col-4"></div>
</div>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark own-color">
    {{-- <div class="container"> --}}
        
        <div class="collapse navbar-collapse" id="navbarsExample03">
        </div>
    {{-- <div> --}}
</nav>
  {{-- <link rel="stylesheet" href="{{ asset('css/anime.css') }}"> --}}
<div class="container">
    <div class="row">
      <div class="col-sm">
        <a class="navbar-brand" href="#"><img src="{{URL::asset('/img/Logo-Motionn2 klein.png')}}" class="rounded" alt="profile Pic" height="100" width="200"></a>
      </div>
      <div class="col-sm">
        <svg viewBox="0 0 960 300">
            <symbol id="s-text">
            <text text-anchor="middle" x="500%" y="20%">Ganesh </text>
            </symbol>
        
            <g class = "g-ants">
              <use xlink:href="#s-text" class="text-copy"></use>
              <use xlink:href="#s-text" class="text-copy"></use>
              <use xlink:href="#s-text" class="text-copy"></use>
              <use xlink:href="#s-text" class="text-copy"></use>
              <use xlink:href="#s-text" class="text-copy"></use>
            </g>
          </svg>
      </div>
      <div class="col-sm">
        One of three columns
      </div>
      
    </div>
</div>
   
@endsection
