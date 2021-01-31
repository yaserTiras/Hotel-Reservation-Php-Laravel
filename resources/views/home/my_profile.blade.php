@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')

@section('title','My Account')

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
                            <li aria-current="page" class="breadcrumb-item active">My account</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <!--
                    *** CUSTOMER MENU ***
                    _________________________________________________________
                    -->
                   @include('home.user_menu')
                    <!-- /.col-lg-3-->
                    <!-- *** CUSTOMER MENU END ***-->
                </div>
                <div class="col-lg-10">
                    <div class="box">
                        @include('profile.show')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
