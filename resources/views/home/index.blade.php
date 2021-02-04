
@extends('layouts.home')

@section('title',$setting->title)
@section('description')

    {{$setting->description}}
    @endsection
@section('keywords',$setting->keywords)
@section('content')

    @include('home._slider')


    <div id="hot">
        <div class="box py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-0">Suggested Hotels</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="product-slider owl-carousel owl-theme">
                @foreach ($suggested as $rs)
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="detail.html"><img src="{{Storage::url($rs->image)}}"  alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="detail.html"><img src="{{Storage::url($rs->image)}}"  alt="" class="img-fluid"></a></div>
                            </div>
                        </div><a href="detail.html" class="invisible"><img src="{{Storage::url($rs->image)}}"  alt="" class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="detail.html">{{$rs->title}}</a></h3>
                            <p class="price">
                                <del></del>  {{$rs->price}}
                            </p>
                            <p class="buttons"><a href="{{ route('user_rooms',$rs->id)}}" class="btn btn-outline-secondary">Show Rooms</a></p>
                        </div>
                        <!-- /.text-->
                        <div class="ribbon sale">
                            <div class="theribbon">{{$rs->star}}</div>
                            <div class="ribbon-background"></div>
                        </div>

                    </div>
                    <!-- /.product-->
                </div>
                @endforeach

            </div>
            <!-- /.container-->
        </div>
        <!-- /#hot-->
        <!-- *** HOT END ***-->
    </div>
    <!--
    *** GET INSPIRED ***
    _________________________________________________________
    -->
    <div id="hot">
        <div class="box py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-0">Luxury Hotels</h2>
                    </div>
                </div>
            </div>
        </div>


    <div class="container">

        <div class="product-slider owl-carousel owl-theme">
            @foreach ($luxury as $rs)
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front"><a href="detail.html"><img src="{{Storage::url($rs->image)}}"  alt="" class="img-fluid"></a></div>
                                <div class="back"><a href="detail.html"><img src="{{Storage::url($rs->image)}}"  alt="" class="img-fluid"></a></div>
                            </div>
                        </div><a href="detail.html" class="invisible"><img src="{{Storage::url($rs->image)}}"  alt="" class="img-fluid"></a>
                        <div class="text">
                            <h3><a href="detail.html">{{$rs->title}}</a></h3>
                            <p class="price">
                                <del></del>  {{$rs->price}}
                            </p>
                            <p class="buttons"><a href="{{route('hotel',['id'=>$rs->id])}}" class="btn btn-outline-secondary">Book a room</a></p>
                        </div>
                        <!-- /.text-->
                        <div class="ribbon sale">
                            <div class="theribbon">{{$rs->star}}</div>
                            <div class="ribbon-background"></div>
                        </div>

                    </div>
                    <!-- /.product-->
                </div>
            @endforeach

        </div>
    </div>



@endsection
