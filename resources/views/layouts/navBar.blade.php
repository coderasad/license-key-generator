{{-- Nav side bar --}}
@if (Auth::user())
    <nav class="navbar-fixed-top navbar navbar-expand navbar-dark bg-dark osahan-nav-top p-0">
        <div class="container">
            <a class="navbar-brand mr-2" href="#">
                <img src="{{ asset('public/frontend/img/logo.png') }}')}}" alt="" />
            </a>
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="feather-home mr-2"></i><span
                            class="d-none d-lg-inline">Home</span></a>
                </li>
                @if (Auth::user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.createLicense') }}"><i
                                class="feather-cpu mr-2"></i><span class="badge badge-primary d-lg-inline d-none p-2">Create License</span></a>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1 osahan-list-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="feather-bell"></i>

                            <span class="badge badge-info badge-counter">{{ \App\Models\User::where('active_key', '1')->get()->count() }} </span>
                        </a>

                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-sm">
                            <h6 class="bg-danger dropdown-header">
                                Activeted License Key 
                                <span class="badge-info badge">
                                    {{ \App\Models\User::where('active_key', '1')->get()->count() }}
                                </span> out of
                                <span class="badge-warning badge ml-1">
                                    {{ \App\Models\User::all()->count() -1 }}
                                </span>
                            </h6>
                        </div>
                    </li>
                @endif

                @if (Auth::user()->role_id == 2)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('author.activeKey') }}">
                            <i class="feather-lock mr-2"></i>
                            <span class="badge badge-danger">Active Now</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item dropdown no-arrow ml-1 osahan-profile-dropdown">
                    <a class="nav-link dropdown-toggle pr-0" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="{{ asset('public/frontend/img/logo.png') }}" />
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow-sm">
                        <div class="p-3 d-flex align-items-center">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{ asset('public/frontend/img/logo.png') }}" alt="" />
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">{{ Auth::user()->firstName }}</div>
                                <div class="small text-gray-500">{{ Auth::user()->occupation }}</div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endif
