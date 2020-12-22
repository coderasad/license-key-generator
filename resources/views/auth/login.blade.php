@extends('layouts.app')
@section('title')
	Log In
@endsection

@section('content')
<div class="bg-white">
    <div class="container-login100" style="background-image: url('{{asset('public/frontend/img/img-01.jpg')}}');">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-md-4 mx-auto">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">
                            <div class="welcome">
                                <a href="" class="showImg">
                                    <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
                                </a>
                                <h5 class="font-weight-bold mt-3">Log In</h5>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label class="mb-1">Phone <span class="badge badge-warning"> Default Admin</span></label>
                                <div class="position-relative icon-form-control">
                                    <input type="text" name="mobile" class="form-control {{ $errors->has('mobile') ? ' is-invalid' : '' }}" value="01717-971904" >
                                    <i class="feather-phone position-absolute"></i>
                                    @if ($errors->has('mobile'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @endif 
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="mb-1">Password</label>
                                <div class="position-relative icon-form-control">
                                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="12345678">
                                    <i class="feather-unlock position-absolute"></i>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                            <div class="text-center mt-3 pb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{route('register') }}" class="btn btn-sm btn-danger btn-block ">
                                            Registration Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user_info bg-light">
                        <table class="loginUser mb-0 table table-hover">
                            <tr>
                                <th class="loginUser" >User Id</th>
                                <th>Password</th>
                            </tr>
                           @foreach ($user as $data)
                            <tr>                                
                                <td class="loginUser">{{ $data->mobile }}</td>
                                <td>12345678</td>
                            </tr>
                           @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
