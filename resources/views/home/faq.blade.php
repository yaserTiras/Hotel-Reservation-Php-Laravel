@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')
@section('title','Frequently asked question')

@section('content')
<div id="all">
    <div id="content">

            <div class="row">
                <div class="col-lg-12">
                    <!-- breadcrumb-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Frequently asked question</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <!--
                    *** PAGES MENU ***
                    _________________________________________________________
                    -->
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
                    <!-- *** PAGES MENU END ***-->
                </div>
                <div class="col-lg-10">
                    <div id="contact" class="box">
                        <h1>Frequently asked questions</h1>
                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                        <hr>
                        @foreach($datalist as $rs)
                        <div id="accordion">
                            <div class="card border-primary mb-3">
                                <div id="headingTwo" class="card-header p-0 border-0">
                                    <h4 class="mb-0"><a href="#" data-toggle="collapse" data-target="#xx{{$rs->id}}" aria-expanded="false" aria-controls="xx{{$rs->id}}" class="btn btn-primary d-block text-left rounded-0">{{$rs->question}}</a></h4>
                                </div>
                                <div id="xx{{$rs->id}}" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                                    <div class="card-body"> {!! $rs->answer !!} </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- /.accordion-->
                    </div>
                </div>
                <!-- /.col-lg-9-->
            </div>

    </div>
</div>
@endsection
