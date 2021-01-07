
@extends('layouts.Admin')

@section('title','Category List')




@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active"> Categories        </li>
        </ul>
        <div class="card-header">

            <a  href="{{route('admin_category_add')}}" type="submit" class="btn btn-primary">Add Category</a>
        </div>

    </div>

    <div class="col-lg-12">
        <div class="block margin-bottom-sm">
            <div class="title"><strong>Category Table</strong></div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Parent</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr>
                        <th scope="row">{{ $rs->id }}</th>
                        <td>{{ $rs->parent_id }}</td>
                        <td>{{ $rs->title }}</td>
                        <td>{{ $rs->status }}</td>
                        <td><a href="{{route('admin_category_edit',['id' => $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="20"></a></td>
                        <td><a href="{{route('admin_category_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="26"></a></td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection
