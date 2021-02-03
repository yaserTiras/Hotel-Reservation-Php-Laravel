@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','My Hotels')

@section('content')


    <div id="all">
        <div id="content">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">User Hotel</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-2">

                    @include('home.user_menu')

                    </div>
                    <div class="col-lg-10">
                    <div class="card-header">

                        <a  href="{{route('user_hotel_add')}}" type="submit" class="btn btn-primary">Add Hotel</a>
                        @include('home.message')
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Star</th>
                                <th>Price</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Location</th>
                                <th>Image</th>
                                <th>Image Gallery</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)

                                <tr>
                                    <th scope="row">{{ $rs->id }}</th>
                                    <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->star }}</td>
                                    <td>{{ $rs->price }}</td>
                                    <td>{{ $rs->address }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->fax }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->city }}</td>
                                    <td>{{ $rs->country }}</td>
                                    <td>{{ $rs->location }}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{ Storage::url($rs->image)}}" height="30" alt="">
                                        @endif
                                    </td>

                                    <td><a href="{{route('user_image_add',['hotel_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"> <img src="{{asset('assets/admin/images')}}/gallery.png" height="20"></a></td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a href="{{route('user_hotel_edit',['id' => $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="20"></a></td>
                                    <td><a href="{{route('user_hotel_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="20"></a></td>
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





@endsection

