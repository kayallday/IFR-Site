@extends('layouts.default')



@section('content')


<div class="section">
  @include('includes.jumbotron')
</div>

  <div class="container main-body">
    <div class="row">
      <div class="col-lg-4 cards">
        <div class="cards">
          <!-- <img class="card-img-top" src="" alt=""> -->
          <i class="fa fa-heart fa-5x card-icon" aria-hidden="true"></i>
          <div class="card-body">
            <p class="card-text">It's always comforting to know you're not alone during difficult times, and when it comes to Family Court you can feel very isolated. Find support you need locally, or online today.</p>
            <a href="#" class="card-button btn btn-primary">SUPPORT</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 cards">
        <div class="cards">
          <i class="fa fa-gavel fa-5x card-icon" aria-hidden="true"></i>
          <!-- <img class="card-img-top" src="" alt=""> -->
          <div class="card-body">
            <p class="card-text">
              Find legal resources shouldn't require tons of effort. We pulled all the resources we could together and put them in one convenient place. Find the resources you need here.
            </p>
            <a href="#" class="card-button btn btn-primary">LEGAL</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 cards">
        <div class="cards">
          <i class="fa fa-handshake-o fa-5x card-icon" aria-hidden="true"></i>
          <!-- <img class="card-img-top" src="" alt=""> -->
          <div class="card-body">
            <p class="card-text">Time is our most precious commodity, we can never get it back. So why not spend it doing something that matters and supporting your community. Find out how you can help.</p>
            <a href="#" class="card-button btn btn-primary">VOLUNTEER</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="row">
  <div class="col-lg-12 mission-statement">
    <h2 class="section-title">Our Mission</h2>
    <p class="content-p">Indiana Father's Rights is a source of info and support for Father's struggling with the Family Court System. We are working towards non-profit status.</p>
  </div>
</div>

@endsection
