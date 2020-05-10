@extends('layouts.main')

@section('title', 'De Luna')
@section('title2', 'De Luna')
@section('title3', 'De Luna')

@section('paragraph', 'About Us')
@section('paragraph2', 'About Us')
@section('paragraph3', 'About Us')


@section('content')

{{-- Hotel About Page --}}
@include('home.about_base')


<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto text-center mb-5 section-heading">
        <h2 class="mb-5">Hotel Staffs</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
          <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4">
            <h3 class="heading mb-3"><a href="#">Angella Lopez</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
            <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
          <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4">
          <h3 class="heading mb-3"><a href="#">Marina Stalks</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
          <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
          <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_3.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4">
          <h3 class="heading mb-3"><a href="#">Ethan Hoover</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
          <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
          <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_4.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4">
          <h3 class="heading mb-3"><a href="#">Megan Pearson</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
          <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
          <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4">
          <h3 class="heading mb-3"><a href="#">Cristine Smith</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
          <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5">
        <div class="hotel-room text-center">
          <a href="#" class="d-block mb-4 thumbnail"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4">
          <h3 class="heading mb-3"><a href="#">Marina Stalks</a></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta labore recusandae soluta quis.</p>
          <p><a href="#" class="text-primary">Read More <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Hotel Gallery section --}}
@include('home.gallery')

@endsection