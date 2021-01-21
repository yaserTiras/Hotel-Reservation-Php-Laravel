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
                <div class="col-lg-3">
                    <!--
                    *** CUSTOMER MENU ***
                    _________________________________________________________
                    -->
                    <div class="card sidebar-menu">
                        <div class="card-header">
                            <h3 class="h4 card-title">Customer section</h3>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column">
                                <a href="customer-orders.html" class="nav-link active">
                                    <i class="fa fa-user"></i> My account</a><a href="index.html" class="nav-link">
                                    <i class="fa fa-list"></i> My Booking History</a><a href="customer-wishlist.html" class="nav-link">
                                    <i class="fa fa-heart"></i> My favorite</a><a href="customer-account.html" class="nav-link">

                                    </a>
                            </ul>
                        </div>
                    </div>
                    <!-- /.col-lg-3-->
                    <!-- *** CUSTOMER MENU END ***-->
                </div>
                <div class="col-lg-9">
                    <div class="box">
                        @include('profile.show')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
