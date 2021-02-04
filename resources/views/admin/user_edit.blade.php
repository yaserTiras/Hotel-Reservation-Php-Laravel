
@extends('layouts.admin')

@section('title','Edit Hotel')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit User        </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">

            <div class="block-body">
                <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label class="col-sm-12 form-control-label">User</label>

                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Name</label>
                        <input type="text" id="name" name="name" value="{{$data->name}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" id="email" name="email" value="{{$data->email}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{$data->phone}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Address</label>
                        <input type="text" id="address" name="address" value="{{$data->address}}" class="form-control">
                    </div>



                    <div class="form-group">
                        <label class="form-control-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        @if ($data->profile_photo_path)
                            <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                        @endif
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Update " class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection

