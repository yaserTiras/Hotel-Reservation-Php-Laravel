

@extends('layouts.home')

@section('title', $data->title ."Hotels Detail")

@section('description') {{ $data->description}} @endsection

@section('keywords', $data->keywords)

@section('content')

                    <div id="all">
                        <div id="content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- breadcrumb-->
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                                <li class="breadcrumb-item">{{$data->title}}</li>
                                                <li aria-current="page" class="breadcrumb-item active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}} </li>

                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="col-lg-3 order-2 order-lg-1">
                                        <!--
                                        *** MENUS AND FILTERS ***
                                        _________________________________________________________
                                        -->
                                      <!--  <div class="card sidebar-menu mb-4">
                                            <div class="card-header">
                                                <h3 class="h4 card-title">Categories</h3>
                                            </div>
                                            <div class="card-body">
                                                <ul class="nav nav-pills flex-column category-menu">
                                                    <li><a href="category.html" class="nav-link">Men <span class="badge badge-secondary">42</span></a>
                                                        <ul class="list-unstyled">
                                                            <li><a href="category.html" class="nav-link">T-shirts</a></li>
                                                            <li><a href="category.html" class="nav-link">Shirts</a></li>
                                                            <li><a href="category.html" class="nav-link">Pants</a></li>
                                                            <li><a href="category.html" class="nav-link">Accessories</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="category.html" class="nav-link active">Ladies  <span class="badge badge-light">123</span></a>
                                                        <ul class="list-unstyled">
                                                            <li><a href="category.html" class="nav-link">T-shirts</a></li>
                                                            <li><a href="category.html" class="nav-link">Skirts</a></li>
                                                            <li><a href="category.html" class="nav-link">Pants</a></li>
                                                            <li><a href="category.html" class="nav-link">Accessories</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="category.html" class="nav-link">Kids  <span class="badge badge-secondary">11</span></a>
                                                        <ul class="list-unstyled">
                                                            <li><a href="category.html" class="nav-link">T-shirts</a></li>
                                                            <li><a href="category.html" class="nav-link">Skirts</a></li>
                                                            <li><a href="category.html" class="nav-link">Pants</a></li>
                                                            <li><a href="category.html" class="nav-link">Accessories</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card sidebar-menu mb-4">
                                            <div class="card-header">
                                                <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Armani  (10)
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Versace  (12)
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Carlo Bruni  (15)
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Jack Honey  (14)
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card sidebar-menu mb-4">
                                            <div class="card-header">
                                                <h3 class="h4 card-title">Colours <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"><span class="colour white"></span> White (14)
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"><span class="colour blue"></span> Blue (10)
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"><span class="colour green"></span>  Green (20)
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"><span class="colour yellow"></span>  Yellow (13)
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"><span class="colour red"></span>  Red (10)
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                                                </form>
                                            </div>
                                        </div>   -->
                                        <!-- *** MENUS AND FILTERS END ***-->

                                    </div>



                                    <div class="col-lg-9 order-1 order-lg-2">
                                    <div id="productMain" class="row">
                                        <div class="col-md-6">

                                            <div data-slider-id="1" class="owl-carousel shop-detail-carousel">

                                                @foreach($datalist as $rs)
                                                <div class="item"> <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></div>
                                                @endforeach

                                            </div>
                                            <div class="ribbon new">
                                                <div class="theribbon">{{$data->star}}</div>
                                                <div class="ribbon-background"></div>
                                            </div>
                                            <!-- /.ribbon-->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box">
                                                <h1 class="text-center">{{$data->title}}</h1>
                                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to hotel details, </a></p>

                                                <p class="price">starting from {{$data->price}}</p>
                                                <p class="text-center buttons"><a href="{{ route('user_rooms',$data->id)}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Book A Room</a>

                                            </div>

                                            <div data-slider-id="1" class="owl-thumbs">
                                                @foreach($datalist as $rs)
                                                <button class="owl-thumb-item"><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></button>
                                                @endforeach
                                                <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="img-fluid"></button>
                                                <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="img-fluid"></button>
                                            </div>

                                        </div>
                                    </div>


                                        <div id="details" class="box">

                                            <h4>{{$data->title}}</h4>
                                            <ul>
                                                <li>{{$data->description}}</li>
                                            </ul>
                                            <h4>Detail</h4>
                                            <p>
                                                {!! $data->detail !!}
                                            </p>


                                            <hr>

                                        </div>




                                    </div>
                                    </div>
                                    <!-- /.col-md-9-->
                                </div>
                            </div>
                        </div>
                    </div>

@endsection
