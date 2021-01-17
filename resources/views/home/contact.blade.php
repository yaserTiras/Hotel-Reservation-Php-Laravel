@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.home')
@section('content')

    <div class="col2 pad">
        <h2><img src="{{ asset('assets')}}/images/title_marker1.jpg" alt=""><cufon class="cufon cufon-canvas" alt="Contact " style="width: 77px; height: 21px;"><canvas width="100" height="29" style="width: 100px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Contact </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Form" style="width: 51px; height: 21px;"><canvas width="59" height="29" style="width: 59px; height: 29px; top: -6px; left: -2px;"></canvas><cufontext>Form</cufontext></cufon></h2>
        <form id="ContactForm" action="#">
            <div>
                <div class="wrapper">
                    <input type="text" class="input">
                    Name: </div>
                <div class="wrapper">
                    <input type="text" class="input">
                    Address: </div>
                <div class="wrapper">
                    <input type="text" class="input">
                    Email: </div>
                <div class="textarea_box">
                    <textarea name="textarea" cols="1" rows="1"></textarea>
                    Contacts: </div>
                <a href="#" class="button2">Send</a> <a href="#" class="button2">Clear</a> </div>
        </form>
    </div>


@endsection
