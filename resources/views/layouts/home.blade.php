<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Obaju : e-commerce template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets')}}/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('assets')}}/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets')}}/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    @yield('css')
    @yield('headerjs')
</head>
<body >

           @include('home._header')
           <div id="all">
               <div id="content">
                   @include('home._slider')


               @section('content')
               </div>
           </div>



           @show

@include('home._footer')

           <!-- JavaScript files-->
           <script src="{{ asset('assets')}}/vendor/jquery/jquery.min.js"></script>
           <script src="{{ asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
           <script src="{{ asset('assets')}}/vendor/jquery.cookie/jquery.cookie.js"> </script>
           <script src="{{ asset('assets')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
           <script src="{{ asset('assets')}}/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
           <script src="{{ asset('assets')}}/js/front.js"></script>

           @yield('footerjs')

</body>
</html>
