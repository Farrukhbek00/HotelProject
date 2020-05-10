@extends('layouts.main')


@section('title', 'Chat With Us')
@section('title2', 'Chat With Us')
@section('title3', 'Chat With Us')

@section('paragraph', 'Get in Touch')
@section('paragraph2', 'Get in Touch')
@section('paragraph3', 'AGet in Touch')


@section('content')
<div class="site-section site-section-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 mb-9">
        <form action="{{ route('submitFeedback') }}" class="p-5 bg-white" method="post">
        @csrf
          <div>
              <h2 class="mb-5">Leave your feedback here...</h2>
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Full Name</label>
              <input name="name" type="text" class="form-control" placeholder="Full Name" required>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
              <input name="email" type="email" class="form-control" placeholder="Email Address" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="phone">Phone</label>
              <input name="phone" type="text" class="form-control" placeholder="Phone #" required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="message">Message</label> 
              <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us" required></textarea>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <button onclick="success()" type="submit" class="btn btn-primary pill px-4 py-2">Send Message</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
    
  
    