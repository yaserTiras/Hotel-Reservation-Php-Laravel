@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','My Reservation')

@section('content')


    <div id="all">
        <div id="content">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">User Reservation</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-2">

                    @include('home.user_menu')

                    </div>
                    <div class="col-lg-9">
                    <div class="card-header">

                        <a  href="{{route('home')}}" type="submit" class="btn btn-primary">Add Rezervastion</a>
                        @include('home.message')
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Room_id</th>
                                <th>Name</th>
                                <th>SurName</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Total</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Days</th>
                                <th>Note</th>
                                <th>Admin Message</th>
                                <th>Status</th>

                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)

                                <tr>
                                    <th scope="row">{{ $rs->room_id }}</th>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->surname }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->total }}</td>
                                    <td>{{ $rs->checkin }}</td>
                                    <td>{{ $rs->checkout }}</td>
                                    <td>{{ $rs->days }}</td>
                                    <td>{{ $rs->note }}</td>
                                    <td>{{ $rs->message }}</td>
                                    <td>{{ $rs->status }}</td>


                                    <td><a href="{{route('user_reservation_delete',['reservation_id' => $rs->id])}}" onclick="return confirm('Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="20"></a></td>
                                </tr>

                            @endforeach
                            </tbody>
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

