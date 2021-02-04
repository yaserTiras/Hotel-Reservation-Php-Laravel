@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp


@extends('layouts.home')

@section('title','My Hotels')
@include('home.rezervasyon')

@section('content')


    <div id="all">
        <div id="content">

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
                    <div class="col-lg-9">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Rooms</th>
                                <th>Hotel</th>
                                <th>Rezerved Days</th>
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




                            <div >

                                <form action="{{route('user_reservation_add',['id'=>$rs->id,'hotel_id'=>$rs->hotel_id])}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label">Name</span>
                                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label">SurName</span>
                                                <input class="form-control" id="surname" name="surname" type="text" placeholder="Enter your surname">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label">Email</span>
                                                <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <span class="form-label" id="total" name="total">Total</span>
                                                <input class="form-control" type="text" id="total" name="total" value="{{$total}} $" readonly="readonly" >
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <span class="form-label">Phone</span>
                                        <input class="form-control" id="phone" name="phone" type="text" placeholder="Enter your phone number">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <span class="form-label">Check IN</span>
                                                <input class="form-control" id="checkin" name="checkin" type="date" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <span class="form-label">Check Out</span>
                                                <input class="form-control" id="checkout" name="checkout" type="date" required="">
                                            </div>
                                        </div>


                                        <div class="col-sm-7">
                                            <label class="form-label form-label-top" id="note" for="note"> Any Special request? </label>
                                            <div id="note" name="note" class="form-input-wide">
                                                <textarea id="note" class="form-textarea" name="note" cols="40" rows="6" data-component="textarea" aria-labelledby="label_20"></textarea>
                                            </div>
                                        </div>


                                    </div>
                                    <br>
                                    <div >
                                        <button href="#" type="submit" class="btn btn-outline-secondary">Book Now</button>
                                    </div>
                                </form>
                            </div>











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

