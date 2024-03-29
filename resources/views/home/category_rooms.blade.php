

@extends('layouts.home')
@section('title', $hotel->title ."Rooms List")

@section('description') {{ $hotel->description}} @endsection

@section('content')
    @include('home.message')
    <div id="all">
        <div id="content">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item">Room List</li>
                                <li aria-current="page" class="breadcrumb-item active">parent path </li>
                            </ol>
                        </nav>
                    </div>





                    <div class="row products">
                        @foreach ($data as $rs)

                            <div class="col-lg-4 col-md-5">

                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front"><a href=""><img src="{{Storage::url($rs->image)}}"  alt=""  class="img-fluid"></a></div>
                                            <div class="back"><a href=""><img src="{{Storage::url($rs->image)}}" alt=""  class="img-fluid"></a></div>
                                        </div>
                                    </div><a href="" class="invisible"><img src="{{Storage::url($rs->image)}}" alt=""  class="img-fluid"></a>
                                    <div class="text">
                                        <h3>{{$rs->title}}</h3>
                                        <p class="price">
                                            <del></del>
                                            <strong>Description : </strong>{{$rs->description}}
                                        </p>
                                        <p class="price">
                                            <del></del>
                                            <strong>Price : </strong>{{$rs->price}}
                                        </p>


                                        <form action="{{route('user_shopcart_add',['id'=>$rs->id,'hotel_id'=>$rs->hotel_id,'hotel_title'=>$hotel->title])}}" method="post">
                                            @csrf
                                            <div class="col-lg-5">
                                                <strong>Days:</strong><input name="adet" type="number" min="1"  value="1" class="form-control">

                                                        <div class="form-group">
                                                            <span class="form-label">Check IN</span>
                                                            <input class="form-control" id="checkin" name="checkin" type="date" required="">
                                                        </div>

                                            <p class="buttons">
                                                <button href="#" type="submit" class="btn btn-primary navbar-btn">ADD</button>
                                            <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="{{route('user_shopcart')}}" class="btn btn-primary navbar-btn"><span>{{\App\Http\Controllers\ShopcartController::countshopcart()}} Complete Rezervation</span></a></div>

                                            </p>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.text-->
                                </div>

                                <!-- /.product            -->
                            </div>
                        @endforeach
                    </div>
                </div>




        </div>







@endsection


