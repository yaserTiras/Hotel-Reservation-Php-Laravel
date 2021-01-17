
@extends('layouts.admin')

@section('title','Edit Category')




@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Categories        </li>
        </ul>
    </div>

    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong class="d-block">Edit Category</strong><span class="d-block"></span></div>
            <div class="block-body">
                <form action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                    @csrf

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Parent</label>
                            <div class="col-sm-12">
                                <select name="parent_id" class="form-control mb-3 mb-3">

                                    <option value="0">Main Category</option>

                                    @foreach( $datalist as $rs)
                                        <option value="{{ $rs->id }}"  @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
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
                        <input type="submit" value="Update Category" class="btn btn-primary">
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection
