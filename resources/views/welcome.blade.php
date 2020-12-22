@extends('layouts.app')
@section('title')
    Home Page
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
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex">
                <div class="col-md-6 mx-auto">
                    <div class="osahan-login py-3 px-5">                        
                      <div class="text-center mb-4">
                          <h5 class="font-weight-bold mt-3">{{ $data->firstName }} Info </h5>
                      </div>
                      <div class="user_info">
                          <table class="welcome mb-0 table table-hover">
                              <tr>
                                  <th>First Name</th>
                                  <td>:</td>
                                  <td>{{ $data->firstName }}</td>
                              </tr>
                              <tr>
                                  <th>Last Name</th>
                                  <td>:</td>
                                  <td>{{ $data->lastName }}</td>
                              </tr>
                              <tr>
                                  <th>Mobile</th>
                                  <td>:</td>
                                  <td>{{ $data->mobile }}</td>
                              </tr>
                              <tr>
                                  <th>Email</th>
                                  <td>:</td>
                                  <td>{{ $data->email }}</td>
                              </tr>
                              <tr>
                                  <th>Organization</th>
                                  <td>:</td>
                                  <td>{{ $data->org }}</td>
                              </tr>
                              <tr>
                                  <th>Street</th>
                                  <td>:</td>
                                  <td>{{ $data->street }}</td>
                              </tr>
                              <tr>
                                  <th>City</th>
                                  <td>:</td>
                                  <td>{{ $data->city }}</td>
                              </tr>
                              <tr>
                                  <th>License Key</th>
                                  <td>:</td>
                                  @if ($data->active_key == 1)
                                    <td>{{ $license_key }}</td>
                                  @else
                                    <td>
                                        <a class="nav-link" href="{{route('author.activeKey')}}"><i class="feather-lock mr-2"></i><span class="badge badge-danger">Active Now</span></a>
                                    </td>
                                  @endif
                              </tr>
                              <tr>
                                  <th>expire_date</th>
                                  <td>:</td>
                                  @if ($data->active_key == 1)
                                    <td>{{ $data->expire_date }}</td>
                                  @else
                                    <td></td>
                                  @endif
                              </tr>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
