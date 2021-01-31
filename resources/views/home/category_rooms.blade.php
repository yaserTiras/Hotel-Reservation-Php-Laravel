

@extends('layouts.home')
 @section('title', $hotel->title ."Rooms List")

@section('description') {{ $hotel->description}} @endsection

@section('content')
@include('home.message')
    <div id="all">
        <div id="content">
            <div class="container">
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

                            <div class="col-lg-3 col-md-4">

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


                                        <form action="{{route('user_shopcart_add',['id'=>$rs->id,'hotel_id'=>$rs->hotel_id])}}" method="post">
                                            @csrf
                                            <div class="col-lg-5">
                                                <strong>Rooms:</strong><input name="adet" type="number" min="1" max="{{$rs->adet}}" value="1" class="form-control">

                                            </div>
                                        <p class="buttons">
                                            <button href="#" type="submit" class="btn btn-outline-secondary">ADD</button>
                                        </p>
                                        </form>
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





        -


  @endsection


