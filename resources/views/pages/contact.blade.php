@extends('layouts.default')

@section('content')
<div class="col-md-12">
  <h1 class="contact-heading">Contact Us</h1>
  <form class="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_name">Firstname *</label>
            <input id="form_name" type="text" name="name" class="form-control" placeholder="Joe" required="required" data-error="Firstname is required.">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_lastname">Lastname *</label>
            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Snuffy" required="required" data-error="Lastname is required.">
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_email">Email *</label>
            <input id="form_email" type="email" name="email" class="form-control" placeholder="joesnuffy@fakemail.com" required="required" data-error="Valid email is required.">
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="form_phone">Phone</label>
            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="000-000-0000">
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="form_message">Message *</label>
            <textarea id="form_message" name="message" class="form-control" placeholder="Tell us your story, and how we can help you today." rows="4" required="required" data-error="Though we are confident people, we are not mind readers. Give us a hint as to what your objective is in contacting the organization."></textarea>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12">
          <input type="submit" class="btn btn-success btn-send button" value="Send message">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-muted"><strong>*</strong> These fields are required.</p>
        </div>
      </div>
    </div>

  </form>
</div>
@stop
