<!DOCTYPE html>
<!--
Template Name: Educo
Version: 2.0.0
Author: Kamleshyadav
Website: http://himanshusofttech.com/
Purchase: http://themeforest.net/user/kamleshyadav
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Begin Head -->
<head>
    <meta charset="utf-8" />
    <title>SMKN 1 Sintang | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description"  content="Educo"/>
    <meta name="keywords" content="Educo, html template, Education template" />
    <meta name="author"  content="Kamleshyadav"/>
    <meta name="MobileOptimized" content="320" />

    <!--srart theme style -->
    <link href="{{ url('f/css/main.css') }}" rel="stylesheet" type="text/css"/>
    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{ url('f/images/header/favicon.png') }}" />
    @yield('css')
</head>
<body>
<!--Page main section start-->
<div id="educo_wrapper">
    @include('frontend.layouts.header')
        @yield('content')
    @include('frontend.layouts.footer')
</div>
<!--Page main section end-->
<!--main js file start-->
<script type="text/javascript" src="{{ url('f/js/jquery-1.12.2.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/jquery.stellar.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/smooth-scroll.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/plugins/revel/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/plugins/revel/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/plugins/revel/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/plugins/revel/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/plugins/revel/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/plugins/countto/jquery.countTo.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/plugins/countto/jquery.appear.js') }}"></script>
<script type="text/javascript" src="{{ url('f/js/custom.js') }}"></script>
@yield('js')
<!--main js file end-->
</body>
</html>
