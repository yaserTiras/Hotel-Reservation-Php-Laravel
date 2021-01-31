@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','My Hotels')

@section('content')


    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">Rezervation</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-2">

                    @include('home.user_menu')

                    </div>
                    <div class="col-lg-10">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Rooms</th>
                                <th>Hotel</th>
                                <th>Rezerved Rooms</th>
                                <th>Price</th>
                                <th>Total Price</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                             $total=0;
                             $totalrooms=0;
                            @endphp
                            @foreach($datalist as $rs)

                                <tr>

                                    <td>
                                        @if ($rs->room->image)
                                            <img src="{{ Storage::url($rs->room->image)}}" height="30" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('user_rooms',['id' => $rs->hotel_id])}}">
                                        {{ $rs->room->title }}</a>
                                    </td>
                                    <td>{{ $rs->quantity }}</td>
                                    <td>{{ $rs->room->price }}</td>
                                    <td>{{ $rs->room->price * $rs->quantity }}</td>

                                    <td><a href="{{route('user_shopcart_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="20"></a></td>
                                </tr>
                                @php
                                    $total += $rs->room->price * $rs->quantity;
                                    $totalrooms+=$rs->quantity;
                                @endphp
                            @endforeach

                            </tbody>


                            <tr>
                                <th colspan="2">Total</th>
                                <th colspan="2">{{$totalrooms}} </th>
                                <th colspan="2">{{$total}} $</th>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>




            </div>
        </div>
    </div>


        </div>
    </div>
</div>





@endsection

