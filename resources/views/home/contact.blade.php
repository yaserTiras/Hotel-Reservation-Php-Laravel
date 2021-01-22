@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title','Contact Us '.$setting->title)
@extends('layouts.home')
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
                                <li aria-current="page" class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-12">
                        <!--
                        *** PAGES MENU ***
                        _________________________________________________________
                        -->

                    <div class="col-lg-12">
                        <div id="contact" class="box">
                            <h1>Contact</h1>

                            <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">

                                    <p class="text-muted">"{!!$setting->contact!!}"</p>
                                    <ul>
                                        <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                                        <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                                    </ul>
                                </div>
                                <!-- /.col-sm-4-->
                            </div>
                            <!-- /.row-->


                            <hr>
                            <h2>Contact form</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input id="firstname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input id="lastname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input id="subject" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row-->
                            </form>
                        </div>
                    </div>
                    <!-- /.col-md-9-->

                </div>
            </div>
        </div>
    </div>

@endsection

