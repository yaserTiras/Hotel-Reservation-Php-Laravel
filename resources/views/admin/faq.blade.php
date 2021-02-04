
@extends('layouts.Admin')

@section('title','Frequently Asked Question List')




@section('content')


    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin_home')}}">Home</a></li>
            <li class="breadcrumb-item active"> Frequently Asked Question  </li>
        </ul>
        <div class="card-header">

            <a  href="{{route('admin_faq_add')}}" type="submit" class="btn btn-primary">Add FAQ</a>
            @include('home.message')
        </div>

    </div>

    <div class="col-lg-12">
        <div class="block margin-bottom-sm">
            <div class="title"><strong>Frequently Asked Question </strong></div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Position</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datalist as $rs)

                    <tr>
                        <td>{{ $rs->id }}</td>
                        <td>{{ $rs->position }}</td>
                        <td>{{ $rs->question }}</td>
                        <td>{!! $rs->answer !!}</td>
                        <td>{{ $rs->status }}</td>
                        <td><a href="{{route('admin_faq_edit',['id' => $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="20"></a></td>
                        <td><a href="{{route('admin_faq_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"> <img src="{{asset('assets/admin/images')}}/delete.png" height="20"></a></td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@endsection
