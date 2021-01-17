
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
            <li class="breadcrumb-item active">Edit Hotels        </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">

            <div class="block-body">
                <form action="{{route('admin_hotel_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label">Hotel</label>
                            <div class="col-sm-12">
                                <select name="category_id" class="form-control mb-3 mb-3">

                                    @foreach( $datalist as $rs)
                                        <option value="{{ $rs->id }}"  @if ($rs->id == $data->category_id) selected="selected" @endif >
                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
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
                        <div id="detail"> </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( detail => {
                                    console.log( detail );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
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
                    <div class="form-group">
                        <label class="form-control-label">Image</label>
                        <input type="file" name="image"  class="form-control">
                        @if ($data->image)
                            <img src="{{ Storage::url($data->image) }}" height="100" alt=" ">
                        @endif
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
