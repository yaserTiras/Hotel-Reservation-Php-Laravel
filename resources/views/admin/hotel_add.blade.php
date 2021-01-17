
@extends('layouts.admin')

@section('title','Add Hotel')

      <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>

@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Add Hotels        </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong class="d-block">Add Hotel</strong><span class="d-block"></span></div>
            <div class="block-body">
                <form action="{{route('admin_hotel_store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label">Hotel</label>
                            <div class="col-sm-12">
                                <select name="category_id" class="form-control mb-3 mb-3">

                                    @foreach( $datalist as $rs)
                                        <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    <div class="form-group">
                        <label class="form-control-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Keywords</label>
                        <input type="text" name="keywords" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Description</label>
                        <input type="text" name="description" class="form-control">
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
                        <input type="text" name="star" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Phone</label>
                        <input type="phone" name="phone" value="0" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Fax</label>
                        <input type="text" name="fax" value="0" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Country</label>
                        <input type="text" name="country" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Status</label>
                        <div class="col-sm-12">
                            <select name="status" class="form-control mb-3 mb-3">
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Add hotel" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection
