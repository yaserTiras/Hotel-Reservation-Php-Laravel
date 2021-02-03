
@extends('layouts.Admin')

@section('title','Messages')




@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active"> Hotels        </li>
        </ul>
        <div class="card-header">

            <a  href="{{route('admin_hotel_add')}}" type="submit" class="btn btn-primary">Add Hotel</a>
        </div>

    </div>

    <div class="col-lg-12">

        <div class="block margin-bottom-sm">
            <div class="title"><strong>Hotel Table</strong></div>

            <div class="table-responsive">
                @include('home.message')
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name & SureName</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Admin Note</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr>

                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->name }}</td>
                        <td>{{ $rs->email }}</td>
                        <td>{{ $rs->phone }}</td>
                        <td>{{ $rs->subject }}</td>
                        <td>{{ $rs->message }}</td>
                        <td>{{ $rs->note }}</td>
                        <td>{{ $rs->status }}</td>


                        <td><a href="{{route('admin_message_edit',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"> <img src="{{asset('assets/admin/images')}}/edit.png" height="20"></a></td>


                        <td><a href="{{route('admin_message_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="20"></a></td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection
