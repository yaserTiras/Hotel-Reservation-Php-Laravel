
@extends('layouts.home')

@section('title', $data->title ."Hotels List")

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
                                <li class="breadcrumb-item">Hotel List</li>
                                <li aria-current="page" class="breadcrumb-item active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}} </li>
                            </ol>
                        </nav>
                    </div>





                    <div class="row products">
                        @foreach ($datalist as $rs)
                        <div class="col-lg-6">

                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front"><a href="{{route('hotel',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}"  alt=""  class="img-fluid"></a></div>
                                        <div class="back"><a href="{{route('hotel',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt=""  class="img-fluid"></a></div>
                                    </div>
                                </div><a href="{{route('hotel',['id'=>$rs->id])}}" class="invisible"><img src="{{Storage::url($rs->image)}}" alt=""  class="img-fluid"></a>
                                <div class="text">
                                    <h3>{{$rs->title}}</h3>
                                    <p class="price">
                                        <del></del>
                                        City :{{$rs->city}}
                                    </p>
                                    <p class="price">
                                        <del></del>
                                        Country :{{$rs->country}}
                                    </p>
                                    <p class="price">
                                        <del></del>
                                        Starting from :{{$rs->price}}
                                    </p>
                                    <p class="buttons"><a href="{{route('hotel',['id'=>$rs->id])}}" class="btn btn-outline-secondary">Show Details</a></p>
                                </div>
                                <!-- /.text-->
                            </div>

                            <!-- /.product            -->
                        </div>
                        @endforeach
                    </div>
                </div>




        </div>
    </div>








@endsection
