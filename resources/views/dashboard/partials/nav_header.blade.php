    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    <b class="logo-abbr"><img src="{{ asset('quixmas/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('quixmas/images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('quixmas/images/logo-text.png')}}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('storage/photo/'.Auth::user()->profile_photo) }}"
                                        alt="User profile picture"
                                        height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="{{ route('data.data_petugas.show',Auth::User()->id) }}" class="nav-link"><i class="icon-user"></i> <span>Profile</span></a>
                                    </li>
                                    
                                        @php
                                        $role = Auth::user()->role;
                                    @endphp
                                    @foreach ($role as $i)
                                        @if ($i->id_akses == 1 || $i->id_akses == 2)
                                    <li>
                                        <a href="{{ route('logout') }}" class="nav-link"><i class="icon-key"></i> <span>Logout</span></a>
                                    </li>
                                        @endif 
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
