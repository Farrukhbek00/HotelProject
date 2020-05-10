@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users</div>
                
                {{-- Taken from https://getbootstrap.com/docs/4.4/content/tables/ --}}
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">UserName</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">BirthDate</th>
                          <th scope="col">PostalCode</th>
                          <th scope="col">City</th>
                          <th scope="col">PassportNumber</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                          <th scope="row"></th>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->phone }}</td>
                          <td>{{ $user->birthDate }}</td>
                          <td>{{ $user->postalCode }}</td>
                          <td>{{ $user->city }}</td>
                          <td>{{ $user->passportNumber}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
