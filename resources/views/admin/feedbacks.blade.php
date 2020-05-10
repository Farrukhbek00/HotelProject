@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Feedbacks</div>
                
                {{-- Taken from https://getbootstrap.com/docs/4.4/content/tables/ --}}
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Full Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Message</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                          <th scope="row"></th>
                          <td>{{ $contact->name }}</td>
                          <td>{{ $contact->email }}</td>
                          <td>{{ $contact->phone }}</td>
                          <td>{{ $contact->message }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
