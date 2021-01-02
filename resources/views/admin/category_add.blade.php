
@extends('layouts.admin')

@section('title','Add Category')




@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Add Categories        </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong class="d-block">Add Category</strong><span class="d-block"></span></div>
            <div class="block-body">
                <form action="{{route('admin_category_create')}}" method="post">
                    @csrf

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Parent</label>
                            <div class="col-sm-12">
                                <select name="parent_id" class="form-control mb-3 mb-3">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach( $datalist as $rs)
                                        <option value="{{ $rs->id }}">{{ $rs->title }}</option>
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

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Status</label>
                        <div class="col-sm-12">
                            <select name="status" class="form-control mb-3 mb-3">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Add Category" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection
