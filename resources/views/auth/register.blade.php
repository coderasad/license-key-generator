@extends('layouts.app')
@section('title')
	Sign Up
@endsection

@section('content')

<div class="bg-white">
    <div class="container-login100" style="background-image: url('{{asset('public/frontend/img/img-01.jpg')}}');">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-md-6 mx-auto">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">                            
                            <h5 class="font-weight-bold mt-3">Registration Form</h5>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf 
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">First Name</label>
                                        <div class="position-relative icon-form-control">
                                            <i class="feather-user position-absolute"></i>
                                            <input class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" type="text" name="firstName" value="{{ old('firstName') }}" required autofocus placeholder="First Name">
                                            @if ($errors->has('firstName'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('firstName') }}</strong>
                                                </span>
                                            @endif   
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Last Name</label>
                                        <div class="position-relative icon-form-control">
                                            <i class="feather-user position-absolute"></i>
                                            <input class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" type="text" name="lastName" value="{{ old('lastName') }}" required autofocus placeholder="Last Name">
                                            @if ($errors->has('lastName'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('lastName') }}</strong>
                                                </span>
                                            @endif   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Email</label>
                                        <div class="position-relative icon-form-control">
                                            <i class="feather-at-sign position-absolute"></i>
                                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif   
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Moblie Number</label>
                                        <div class="position-relative icon-form-control">
                                            <i class="feather-phone position-absolute"></i>
                                            <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="text" name="mobile" value="{{ old('mobile') }}" required autofocus placeholder="Moblie Number">
                                            @if ($errors->has('mobile'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('mobile') }}</strong>
                                                </span>
                                            @endif   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Password</label>
                                        <div class="position-relative icon-form-control">
                                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                                            <i class="feather-unlock position-absolute"></i>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Confirm Password</label>
                                        <div class="position-relative icon-form-control">
                                            <input class="input100 form-control" type="password" name="password_confirmation" placeholder="Confirm Password">    
                                            <i class="feather-unlock position-absolute"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">organization Name</label>
                                        <div class="position-relative icon-form-control">
                                            <input class="form-control{{ $errors->has('org') ? ' is-invalid' : '' }}" type="text" name="org" value="{{ old('org') }}"placeholder="organization Name">
                                            <i class="feather-home position-absolute"></i>
                                            @if ($errors->has('org'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('org') }}</strong>
                                                </span>
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Street</label>
                                        <div class="position-relative icon-form-control">
                                            <input class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" type="text" name="street" value="{{ old('street') }}" placeholder="Street...">
                                            <i class="feather-compass position-absolute"></i>
                                            @if ($errors->has('street'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('street') }}</strong>
                                                </span>
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">City</label>
                                        <div class="position-relative icon-form-control">
                                            <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" value="{{ old('city') }}" placeholder="City Name">
                                            <i class="feather-home position-absolute"></i>
                                            @if ($errors->has('city'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="mb-1">You agree to the CodeFun <a href="#" class="text-warning" > User Agreement</a>, <a  class="text-warning"href="#">Privacy Policy</a></label>
                            </div>
                            <button class="btn btn-primary btn-block text-uppercase text-white" type="submit">Agree & Submit</button>
                            <div class="text-center mt-3 pb-3">
                                
                                <div class="row">
                                    <a href="{{ route('login') }}" class="btn btn-sm btn-danger btn-block text-uppercase ">
                                        Sign in
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
