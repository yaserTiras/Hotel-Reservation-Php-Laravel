
@extends('layouts.Admin')

@section('title','User List')




@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active"> Hotels        </li>
        </ul>

    </div>

    <div class="col-lg-12">
        <div class="block margin-bottom-sm">
            <div class="title"><strong>Hotel Table</strong></div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Roles</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                        <tr>
                            <th>{{ $rs->id }}</th>
                            <td>
                                @if ($rs->profile_photo_path)
                                    <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                @endif
                            </td>
                            <td>{{ $rs->name }}</td>
                            <td>{{ $rs->email }}</td>
                            <td>{{ $rs->phone }}</td>
                            <td>{{ $rs->address }}</td>
                            <td> @foreach($rs->roles as $row)
                                     {{  $row->name }} ,
                                @endforeach
                                <a href="{{route('admin_user_roles',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <i class="fa fa-plus-circle"></i>
                                </a>
                            </td>

                            <td><a href="{{route('admin_user_edit',['id' => $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="20"></a></td>
                            <td><a href="{{route('admin_user_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="20"></a></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection

