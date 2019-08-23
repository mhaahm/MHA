<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
       @yield('title')
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/lib.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/frontend/tabbular.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/animate/animate.min.css")}}" />
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/frontend/jquery.circliful.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/owl.carousel/css/owl.carousel.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/vendors/owl.carousel/css/owl.theme.css")}}">
</head>

<body>
<!-- Header Start -->
@include("includes.header")

@yield('content')

@include("includes.footers")

<div class="copyright">
    <div class="container">
        <p>Copyright &copy; Josh Admin Template, 2017</p>
    </div>
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="material-icons">airplanemode_active</i>
</a>
<!--global js starts-->
<script type="text/javascript" src="assets/js/frontend/lib.js"></script>

<script type="text/javascript" src="assets/js/frontend/jquery.circliful.js"></script>
<script type="text/javascript" src="assets/vendors/wow/js/wow.min.js" ></script>
<script type="text/javascript" src="assets/vendors/owl.carousel/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/frontend/carousel.js"></script>
<script type="text/javascript" src="assets/js/frontend/index.js"></script>
</body>
</html>

