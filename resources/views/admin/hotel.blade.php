
@extends('layouts.Admin')

@section('title','Hotel List')




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
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Star</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Fax</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Location</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr>
                        <th scope="row">{{ $rs->id }}</th>
                        <td>{{ $rs->category_id }}</td>
                        <td>{{ $rs->title }}</td>
                        <td>{{ $rs->image }}</td>
                        <td>{{ $rs->star }}</td>
                        <td>{{ $rs->address }}</td>
                        <td>{{ $rs->phone }}</td>
                        <td>{{ $rs->fax }}</td>
                        <td>{{ $rs->email }}</td>
                        <td>{{ $rs->city }}</td>
                        <td>{{ $rs->country }}</td>
                        <td>{{ $rs->location }}</td>
                        <td>{{ $rs->status }}</td>
                        <td><a href="{{route('admin_hotel_edit',['id' => $rs->id])}}">Edit</a></td>
                        <td><a href="{{route('admin_hotel_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection
