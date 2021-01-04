
@extends('layouts.admin')

@section('title','Edit Hotel')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection

@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Hotels        </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">

            <div class="block-body">
                <form action="{{route('admin_hotel_update',['id'=>$data->id])}}" method="post">
                    @csrf

                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label">Hotel</label>
                            <div class="col-sm-12">
                                <select name="category_id" class="form-control mb-3 mb-3">

                                    @foreach( $datalist as $rs)
                                        <option value="{{ $rs->id }}"  @if ($rs->id == $data->category_id) selected="selected" @endif >{{ $rs->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" name="title" value="{{$data->title}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Keywords</label>
                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Description</label>
                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Detail</label>
                        <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Star</label>
                        <input type="text" name="star" value="{{$data->star}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Address</label>
                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Phone</label>
                        <input type="phone" name="phone" value="{{$data->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Fax</label>
                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" name="email" value="{{$data->email}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">City</label>
                        <input type="text" name="city" value="{{$data->city}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Country</label>
                        <input type="text" name="country" value="{{$data->country}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Location</label>
                        <input type="text" name="location" value="{{$data->location}}" class="form-control">
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Status</label>
                        <div class="col-sm-12">
                            <select name="status" class="form-control mb-3 mb-3">
                                <option selected="selected">{{$data->status}}</option>
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Update hotel" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection
