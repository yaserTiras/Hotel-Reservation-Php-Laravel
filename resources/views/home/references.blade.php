@php

    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','Refernces '.$setting->title)
@section('description') {{ $setting->description}} @endsection
@section('keywords',$setting->keywords)
@section('content')

    <div id="all">
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- breadcrumb-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li aria-current="page" class="breadcrumb-item active">References</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12">
                        <!--
                        *** PAGES MENU ***
                        _________________________________________________________
                        -->

                        <!-- *** PAGES MENU END ***-->

                    </div>
                    <div class="col-lg-12">
                        <div id="text-page" class="box">
                            <h1>{{$setting->company}}</h1>

                            <p>"{!!$setting->references !!}"</p>




                        </div>
                    </div>
                    <!-- /.col-lg-9-->
                </div>
            </div>
        </div>
    </div>










@endsection
