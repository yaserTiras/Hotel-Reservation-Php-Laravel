@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

<header class="header mb-5">
    <!--
    *** TOPBAR ***
    _________________________________________________________
    -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offer mb-3 mb-lg-0"></div>
                <div class="col-lg-6 text-center text-lg-right">
                    <ul class="menu list-inline mb-0">
                    @auth
                            <a href="{{route('myprofile')}}"><strong>{{Auth::user()->name}}</strong></a>
                        @endauth
                            <li class="list-inline-item"><a href="{{route('logout')}}" >Logout</a></li>


                        @guest()
                        <li class="list-inline-item"><a href="/login" >Login</a></li>
                        <li class="list-inline-item"><a href="/register">Register</a></li>
                        @endauth
                        <li class="list-inline-item"><a href="{{route('home_contact')}}">Contact</a></li>
                        <li class="list-inline-item"><a href="">References</a></li>
                        <li class="list-inline-item"><a href="{{route('home_faq')}}">Faq</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- *** TOP BAR END ***-->


    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="{{route('home')}}" class="navbar-brand home"><img src="{{ asset('assets')}}/img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="{{ asset('assets')}}/img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
            <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link active">Home</a></li>

                    @include('home._category')


                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">General<b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Company</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="{{route('home_contact')}}" class="nav-link">Contact Us</a></li>
                                            <li class="nav-item"><a href="{{route('home_aboutus')}}" class="nav-link">About Us</a></li>
                                            <li class="nav-item"><a href="{{route('home_references')}}" class="nav-link">References</a></li>
                                            <li class="nav-item"><a href="{{route('home_faq')}}" class="nav-link">FAQ</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>User</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="{{route('myprofile')}}" class="nav-link">My Account</a></li>


                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Order process</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="{{route('user_shopcart')}}" class="nav-link">Rezervation</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#" data-toggle="dropdown" data-hover="" data-delay="200" class="nav-link active" >Campains<b class=""></b></a>

                    </li>
                </ul>
                <div class="navbar-buttons d-flex justify-content-end">
                    <!-- /.nav-collapse-->

                    <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="{{route('user_shopcart')}}" class="btn btn-primary navbar-btn"><span>{{\App\Http\Controllers\ShopcartController::countshopcart()}} Complete Rezervation</span></a></div>

                </div>
            </div>
        </div>
    </nav>
    <div id="search" class="collapse">
        <div class="container">
            <form role="search" class="ml-auto">
                <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>
