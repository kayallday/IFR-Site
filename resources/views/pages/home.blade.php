@extends('layouts.default')

@section('content')
<div class="col-md-12 jumbotron">
  <div class="container">
    <h1 class="jumbo-head">Children need Fathers. </br>Not visitors.</h1>
    <p>Find the support you need. Support a great cause. Join the Indiana Father's Rights movement.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Sign Up &raquo;</a></p>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
    <div class="cards">
      <img class="card-img-top" src="" alt="">
      <div class="card-body">
        <p class="card-text">It's always comforting to know you're not alone during difficult times, and when it comes to Family Court you can feel very isolated. Find support you need locally, or online today.</p>
        <a href="#" class="btn btn-primary">SUPPORT</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="cards">
      <img class="card-img-top" src="" alt="">
      <div class="card-body">
        <p class="card-text">
          Find legal resources shouldn't require tons of effort. We pulled all the resources we could together and put them in one convenient place. Find the resources you need here.
        </p>
        <a href="#" class="btn btn-primary">LEGAL</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="cards">
      <img class="card-img-top" src="" alt="">
      <div class="card-body">
        <p class="card-text">Time is our most precious commodity, we can never get it back. So why not spend it doing something that matters. Find out how you can help today.</p>
        <a href="#" class="btn btn-primary">VOLUNTEER</a>
      </div>
    </div>
  </div>
</div>
<div class="social-icons">
  @include('includes.social')
</div>

<div class="row">
  <div class="col-md-12">
    <h2>OUR MISSION</h2>
    <p>Indiana Father's Rights is a source of info and support for Father's struggling with the Family Court System. We are working towards non-profit status.</p>
  </div>
</div>
@endsection
