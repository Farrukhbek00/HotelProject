@extends('layouts.main')

@section('title', 'Welcome To De Luna')
@section('title2', 'Unique Experience')
@section('title3', 'Discover the World')

@section('paragraph', 'Hotel Resort')
@section('paragraph2', 'Enjoy With Us')
@section('paragraph3', 'More Savings, More Perks')



@section('content')

    {{--  Hote Rooms --}}
    @include('home.room_base')

    {{-- Hotel About page --}}
    @include('home.about_base')

    {{-- Hotel Gallery section --}}
    @include('home.gallery')

    <div class="site-section block-14 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>What People Say</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">

          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Jhon Wick</h2>
                <blockquote>&ldquo;This note serves to acknowledge, compliment and thank you and your team for the translation work you have been doing for the AGA project so far!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Bruno Mars</h2>
                <blockquote>&ldquo;You’ve impressed me over and over with your knowledge, professionalism, courtesy and responsiveness!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Emily Clarke</h2>
                <blockquote>&ldquo;De Luna is a truly outstanding company and we can all agree that you have really made our work here a success!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Peter Pan</h2>
                <blockquote>&ldquo;Customer service is excellent, willingness to support our demands. Quality is very good and that is very, very important!&rdquo;</blockquote>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>

@endsection
