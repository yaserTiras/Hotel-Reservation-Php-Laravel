
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title','About Us '.$setting->title)
@extends('layouts.home')
@section('title','About Us')

@section('content')

<div id="all">
    <div id="content">

            <div class="row">
                <div class="col-lg-12">
                    <!-- breadcrumb-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="card sidebar-menu mb-2">
                        <div class="card-header">
                            <h3 class="h4 card-title">Pages</h3>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                                <li><a href="{{route('home_aboutus')}}" class="nav-link">About Us</a></li>
                                <li><a href="{{route('home_contact')}}" class="nav-link">Contact Us</a></li>
                                <li><a href="{{route('home_faq')}}" class="nav-link">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div id="text-page" class="box">
                        <h1>{{$setting->company}}</h1>

                        <p>"{!!$setting->aboutus !!}"</p>




                    </div>
                </div>
                <!-- /.col-lg-9-->
            </div>
        </div>

</div>
@endsection
