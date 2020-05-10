@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bookings</div>
                
                {{-- Taken from https://getbootstrap.com/docs/4.4/content/tables/ --}}
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Arrival</th>
                          <th scope="col">Book Time</th>
                          <th scope="col">Checkout</th>
                          <th scope="col">Breakfast</th>
                          <th scope="col">Number of nights</th>
                          <th scope="col">Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                          <th scope="row"></th>
                          <td>{{ date('d-m-Y', strtotime($booking->arrival)) }}</td>
                          <td>{{ date('d-m-Y', strtotime($booking->book_time)) }}</td>
                          <td>{{ date('d-m-Y', strtotime($booking->checkout)) }}</td>
                          <td>{{ $booking->breakfast }}</td>
                          <td>{{ $booking->night }}</td>
                          <td>{{ $booking->comment }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
