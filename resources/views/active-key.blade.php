@extends('layouts.app')
@section('title')
    License Key Page
@endsection

@section('content')
    @if (session()->has('level'))
        <div class="alert-msg">
            <div class="alert alert-{{ session('level') }} alert-dismissible fade show" role="alert">
                {{ session('msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    @endif
    <div class="py-4">
        
        @if ($data->license_key == '')
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <a type="button" class="mt-5 font-italic  btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="badge badge-light">NB: </span><strong> Login Admin Dashboard & Create License Key</strong> 
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row justify-content-center align-items-center d-flex mt-5">
                    <div class="col-md-6 mx-auto">
                        <div class="d-flex justify-content-center py-3 user_info">
                            @if ($data->active_key == 0)
                                <div class="w-100 text-center mb-4">
                                    <h5 class="font-weight-bold mt-3">Active Your License</h5>
                                    @if ($data->license_key != '')
                                        <small class="text-warning">
                                            <i class="feather-unlock"></i>
                                            {{ $license_key }}
                                        </small>
                                    @endif
                                </div>
                                <div class="mr-4 w-100">
                                    <form action="{{ route('author.activeKey') }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="mb-1">License Key</label>
                                                    <div class="position-relative icon-form-control">
                                                        <i class="feather-lock position-absolute"></i>
                                                        <input
                                                            class="form-control{{ $errors->has('license_key') ? ' is-invalid' : '' }}"
                                                            autocomplete="off" type="text" name="license_key"
                                                            value="{{ old('license_key') }}" required min="16" autofocus
                                                            placeholder="0000-0000-0000-0000">
                                                        @if ($errors->has('license_key'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('license_key') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-block text-uppercase text-white"
                                                type="submit">Active</button>
                                    </form>
                                </div>
                            @else
                                <h5 class="font-weight-bold text-center mt-3">Already Activated Your License</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>


@endsection
