

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
                                    <div class="col-lg-1 ">
                                    </div>
                                    <div class="col-lg-11">
                                    <div id="productMain" class="row">
                                        <div class="col-md-8">
                                            <div data-slider-id="1" class="owl-carousel shop-detail-carousel">

                                                @foreach($datalist as $rs)
                                                <div class="item"> <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid"></div>
                                                @endforeach
                                            </div>
                                            <div class="ribbon new">
                                                <div class="theribbon">{{$data->star}}</div>
                                                <div class="ribbon-background"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="box">
                                                <h1 class="text-center">{{$data->title}}</h1>
                                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to hotel details, </a></p>

                                                <p class="price"> <h3>starting from</h3> {{$data->price}}</p>
                                                <p class="price"><h3>Address:</h3> {{$data->address}}</p>
                                                <p class="price"><h3>Email:</h3>  {{$data->email}}</p>
                                                <p class="price"><h3>Phone:</h3> {{$data->phone}}</p>
                                                <p class="price"><h3>Fax:</h3> {{$data->fax}}</p>
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
                                               <h3>Services</h3> {!! $data->detail !!}
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
