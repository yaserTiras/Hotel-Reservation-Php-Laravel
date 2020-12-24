<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    @yield('css')
    @yield('javascript')
</head>
<body>

@include('admin._header')

<div class="d-flex align-items-stretch">
    @include('admin._sidebar')
    <div class="page-content">
        @yield('content')

     @include('admin._footer')
    </div>
</div>
<!-- JavaScript files-->
<script src="{{ asset('assets') }}/admin/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/popper.js/umd/popper.min.js"> </script>
<script src="{{ asset('assets') }}/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="{{ asset('assets') }}/admin/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('assets') }}/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('assets') }}/admin/js/charts-home.js"></script>
<script src="{{ asset('assets') }}/admin/js/front.js"></script>
</body>
</html>
