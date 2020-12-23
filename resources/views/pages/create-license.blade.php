@extends('layouts.app')
@section('title')
    Create License Page
@endsection

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex mt-5">
                
                <div class="user_info"></div>
                <div class="col-md-5 mx-auto">
                    <div class="bg-primary osahan-login py-3 px-5">
                        <div class="text-center mb-4">
                            <h5 class="font-weight-bold mt-3">Create License</h5>
                        </div>
                        <form id='action' method="POST" action="{{ route('admin.createLicense') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">Client ID 
                                            <span class="badge badge-warning">Hints
                                                @foreach ($user as $data)
                                                    {{ $data->id }}@if (!$loop->last),@endif
                                                @endforeach
                                            </span>
                                        </label>
                                        <div class="position-relative icon-form-control">
                                            <i class="feather-user position-absolute"></i>
                                            <input class="form-control uId" type="number" name="id" required autofocus min='0' placeholder="Client ID">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">License Key</label>
                                        <div class="position-relative icon-form-control">
                                            <i class="feather-key position-absolute"></i>
                                            <input class="form-control license_key" type="text" name="license_key" readonly value="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="homePage btn btn-primary btn-block text-uppercase text-white" action="{{route('admin.dashboard')}}">Save</div>
                            <div id='licenseKey' action="{{ route('admin.licenseKey') }}"></div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="mb-1">License For</label>
                                        <div>
                                            <select class="form-control expire_date" name="expire_date" id="">
                                                <option value="0">-- select --</option>
                                                <option value="3">3 Month</option>
                                                <option value="6">6 Month</option>
                                                <option value="12">12 Month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="createKey" class="btn w-50 btn-danger d-block ml-auto text-uppercase text-white">Create Key</div>
                            <div class="py-3 d-flex align-item-center">
                                <span class="ml-auto"> Return to <a class="font-weight-bold text-warning" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  Log in
                              </a> Page </span>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
