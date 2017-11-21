@extends('layouts.default')

@section('content')
<div class="jumbotron jumbotron-fluid about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="display-4">Get Involved</h1>
        <blockquote class="lead">"The best way to find yourself is to lose yourself in the service of others." <br/> -Mahatma Gandhi</blockquote>
        <p>The best way to support The Indiana Father's Rights Organization and help local Father's reclaim their role in their children's lives is to get involved. Whether you can devote your time or funds, we are in desperate need of anything you have to offer.</p>
      </div>
    </div>
  </div>
</div>

<div class="container involved">
  <div class="row">
    <div class="col-lg-6 cards">
      <div class="card">
          <i class="fa fa-usd fa-5x card-icon" aria-hidden="true"></i>
        <div class="card-block">
          <div class="card-body">
            <h4 class="card-title">Donate</h4>
            <hr>
            <p class="card-text">Money donated will help local Father's find affordable legal assistance, and affordable parenting/co-parenting programs. Donations will also go towards raising awareness in the community through events, outreach programs, and volunteer groups.</p>
            <a href="https://www.gofundme.com/pmk5nt-indiana-fathers-rights-campaign" target="_blank" class="card-button btn btn-primary">Donate Now</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 cards">
      <div class="card">
          <i class="fa fa-handshake-o fa-5x card-icon" aria-hidden="true"></i>
        <div class="card-block">
          <div class="card-body">
            <h4 class="card-title">Volunteer</h4>
            <hr>
            <p class="card-text">While monetary donations are always a big help, the greatest help to the organization is donation of your time. We have many volunteer opportunities coming available soon. Check our Facebook for announcements, or send us an email with your interest.</p>
            <a href="https://www.facebook.com/pg/indianafathersrightsorg/events" target="_blank" class="card-button btn btn-primary">Volunteer</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
