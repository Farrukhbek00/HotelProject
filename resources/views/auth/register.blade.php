@extends('layouts.main')

@section('title', 'De Luna')
@section('title2', 'De Luna')
@section('title3', 'De Luna')

@section('paragraph', 'Sign Up')
@section('paragraph2', 'Sign Up')
@section('paragraph3', 'Sign Up')

@section('content')
<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                              <label class="font-weight-bold">UserName</label>
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="username">
                              @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                              <div class="invalid-feedback">
                                UserName must be at least 5 alphanumeric characters
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="font-weight-bold">Email</label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                              <div class="invalid-feedback">
                                Enter a valid email
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="font-weight-bold">Password</label>
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">
                                    Password must be at least 5 alphanumeric and special characters
                                </div>
                                
                              </div>
                            

                            <div class="form-group">
                                <label class="font-weight-bold">Password Confirm</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirm">
                            </div>

                            <div class="form-group">
                              <label class="font-weight-bold">Phone Number</label>
                              <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone" autocomplete="phone">
                              <div class="invalid-feedback">
                               Enter a valid phone (e.g. +(988)91 777-77-77)
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="font-weight-bold">Date of Birth</label>
                              <input type="text" class="form-control" id="birth" placeholder="Date of birth" name="birthDate" autocomplete="birthDate">
                              <div class="invalid-feedback">
                               Enter a valid date of birth (e.g. 12-02-1919)
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="font-weight-bold">Postal Code</label>
                              <input type="number" class="form-control" id="postal" placeholder="Postal Code" name="postalCode" autocomplete="postalCode">
                              <div class="invalid-feedback">
                                Postal code which must contain exactly 7 digits (e.g. 100011)
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="font-weight-bold">City</label>
                              <input type="text" class="form-control" id="city" placeholder="City" name="city" autocomplete="city">
                              <div class="invalid-feedback">
                                City name should contain only words
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="font-weight-bold">Passport Number</label>
                              <input type="text" class="form-control" id="number" placeholder="Passport Number" name="passportNumber" autocomplete="passportNumber">
                              <div class="invalid-feedback">
                                Enter a valid phone (e.g. AA1234567)
                              </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
