@extends('layouts.app')
@section('title')
    Home Page
@endsection

@section('content')
    <div class="py-4">
        <div class="container">
            <div class="row">
                @if (Auth::user()->role_id == 1)
                    <div class="py-4">
                        <div class="container">
                            <div class="row justify-content-center align-items-center d-flex mt-5">
                                <div class="col-md-12 mx-auto">
                                    <div class="osahan-login py-3 px-5">
                                        <div class="text-center mb-4">
                                            <h5 class="font-weight-bold mt-3">User List</h5>
                                        </div>
                                        <div class="user_info">
                                            <table class="mb-0 table table-hover">
                                                <tr>
                                                    <th>User ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Organization</th>
                                                    <th>License Key</th>
                                                    <th>expire_date</th>
                                                    <th>Status</th>
                                                </tr>
                                                @foreach ($user as $data)
                                                    <tr>
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->firstName }}</td>
                                                        <td>{{ $data->lastName }}</td>
                                                        <td>{{ $data->mobile }}</td>
                                                        <td>{{ $data->email }}</td>
                                                        <td>{{ $data->org }}</td>
                                                        <td>
                                                            @if ($data->license_key != '')
                                                                {{Crypt::decryptString($data->license_key)}}
                                                            @else
                                                            <a class="" href="{{ route('admin.createLicense') }}">
                                                                <span class="badge badge-primary d-lg-inline d-none">Create License</span></a>
                                                            @endif
                                                        </td>
                                                        <td>{{ date('d/m/y', strtotime($data->expire_date)) }}</td>
                                                        <td>
                                                            @if ($data->active_key == 1)
                                                                <span class="badge badge-warning">Active</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>


@endsection
