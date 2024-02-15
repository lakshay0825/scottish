@extends('layouts.frontend')
@section('content')
<div class="full-slider">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ Vite::asset('resources/images/bg1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ Vite::asset('resources/images/bg2.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<section class="matchs-info">
<div class="container-fluid">
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12 pl-0">
    <div class="row">
        <div class="full p-0">
            <div class="matchs-vs">
                <div class="vs-team">
                <div class="team-btw-match">
                    <ul>
                        <li>
                            <img src="{{ Vite::asset('resources/images/mi-emirates.png') }}" alt="">
                            <span>Footbal Team</span>
                        </li>
                        <li class="vs"><span>vs</span></li>
                        <li>
                            <img src="{{ Vite::asset('resources/images/dubai-capitals.png') }}" alt="">
                            <span>Super Team Club</span>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 pr-0">
    <div class="row">
        <div class="full p-0">
            <div class="right-match-time">
                <h2>Next Match</h2>
                <ul id="countdown-1" class="countdown">
                <li><span class="days">10 </span>Day </li>
                <li><span class="hours">5 </span>Hours </li>
                <li><span class="minutes">25 </span>Minutes </li>
                <li><span class="seconds">10 </span>Seconds </li>
                </ul>
                <span>12/02/2017 /19:00pm</span>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</section>
@endsection