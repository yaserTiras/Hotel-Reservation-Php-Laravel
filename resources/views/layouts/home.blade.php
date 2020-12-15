<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title') </title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">

    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets')}}/css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="{{ asset('assets')}}/js/jquery-1.6.js" ></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/cufon-yui.js"></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/cufon-replace.js"></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/Adamina_400.font.js"></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/jquery.jqtransform.js" ></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/script.js" ></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/kwicks-1.5.1.pack.js" ></script>
    <script type="text/javascript" src="{{ asset('assets')}}/js/atooltip.jquery.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('assets')}}/js/html5.js"></script>
    <link rel="stylesheet" href="{{ asset('assets')}}/css/ie.css" type="text/css" media="all">
    <![endif]-->
    @yield('css')
    @yield('headerjs')
</head>
<body id="page1">
<div class="bg1">
    <div class="bg2">
        <div class="main">
            @include('home._header')
            @include('home._category')

            yy

        </div>
    </div>
</div>

@section('content')
    içerik alanı
@show

@include('home._footer')
@yield('footerjs')

y

</body>
</html>
