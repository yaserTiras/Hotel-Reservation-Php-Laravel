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
                            <li class="list-inline-item"><strong>{{Auth::user()->name}}</strong></li>

                            <li class="list-inline-item"><a href="{{route('logout')}}" >Logout</a></li>

                        @endauth
                        @guest()
                        <li class="list-inline-item"><a href="{{route('home_login')}}" >Login</a></li>
                        <li class="list-inline-item"><a href="/register">Register</a></li>
                        @endauth
                        <li class="list-inline-item"><a href="{{route('home_contact')}}">Contact</a></li>
                        <li class="list-inline-item"><a href="">References</a></li>
                        <li class="list-inline-item"><a href="{{route('home_faq')}}">Faq</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Customer login</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input id="email-modal" type="text" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="password-modal" type="password" placeholder="password" class="form-control">
                            </div>
                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="/register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- *** TOP BAR END ***-->


    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="{{route('home')}}" class="navbar-brand home"><img src="{{ asset('assets')}}/img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="{{ asset('assets')}}/img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
            <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link active">Home</a></li>

                    @include('home._category')

                    <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Pictures<b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu">
                            <li>
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Clothing</h5>

                                    </div>


                                    <div class="col-md-3 col-lg-4">
                                        <div class="banner"><a href="#"><img src="{{ asset('assets')}}/img/banner.jpg" alt="" class="img img-fluid"></a></div>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>

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
                                            <li class="nav-item"><a href="category-full.html" class="nav-link">Category - full width</a></li>
                                            <li class="nav-item"><a href="detail.html" class="nav-link">Product detail</a></li>
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
                                            <li class="nav-item"><a href="basket.html" class="nav-link">Shopping cart</a></li>
                                            <li class="nav-item"><a href="checkout1.html" class="nav-link">Checkout - step 1</a></li>
                                            <li class="nav-item"><a href="checkout2.html" class="nav-link">Checkout - step 2</a></li>
                                            <li class="nav-item"><a href="checkout3.html" class="nav-link">Checkout - step 3</a></li>
                                            <li class="nav-item"><a href="checkout4.html" class="nav-link">Checkout - step 4</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <h5>Pages and blog</h5>
                                        <ul class="list-unstyled mb-3">
                                            <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing</a></li>
                                            <li class="nav-item"><a href="post.html" class="nav-link">Blog Post</a></li>
                                            <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                            <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                                            <li class="nav-item"><a href="text-right.html" class="nav-link">Text page - right sidebar</a></li>
                                            <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
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
                    <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>

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
