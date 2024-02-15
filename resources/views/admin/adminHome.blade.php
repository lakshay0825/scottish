@extends('layouts.app')
  
@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Players</p>
                <h4 class="mb-0">{{$players_count}}</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0">Players added in the past week: <span class="text-success text-sm font-weight-bolder">{{$previousSevenDaysPlayersCount}} </span></p>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection