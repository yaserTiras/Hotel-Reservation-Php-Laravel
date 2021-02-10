
@extends('layouts.Admin')

@section('title','Reservations List')




@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active"> Reservations        </li>
        </ul>


    </div>

    <div class="col-lg-12">
        <div class="block margin-bottom-sm">

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>UserId</th>
                        <th>HotelId</th>
                        <th>Room</th>
                        <th>Name & Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Total</th>
                        <th>CheckIn</th>
                        <th>CheckOut</th>
                        <th>Days</th>
                        <th>Message</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Edit</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                        <tr>
                            <th scope="row">{{ $rs->user->id }}</th>

                            <td>{{ $rs->user_id }}</td>
                            <td>{{ $rs->hotel_id }}</td>
                            <td>{{ $rs->room_id }}</td>
                            <td>{{ $rs->name }}</td>
                            <td>{{ $rs->email }}</td>
                            <td>{{ $rs->phone }}</td>
                            <td>{{ $rs->total }}</td>
                            <td>{{ $rs->checkin }}</td>
                            <td>{{ $rs->checkout }}</td>
                            <td>{{ $rs->days }}</td>
                            <td>{{ $rs->message }}</td>
                            <td>{{ $rs->note }}</td>
                            <td>{{ $rs->status }}</td>


                            <td><a href="{{route('admin_reservation_show',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"> <img src="{{asset('assets/admin/images')}}/edit.png" height="20"></a></td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection

