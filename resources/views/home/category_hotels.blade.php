
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
                        <div class="col-lg-2 col-md-2">

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
                                        {{$rs->price}}
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
                    <div class="pages">
                        <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
                        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                            <ul class="pagination">
                                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                    </div>



        </div>
    </div>








@endsection
