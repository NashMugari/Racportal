
<!DOCTYPE html>
<html lang="en">
<head>
    <meta https-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <!-- Title and other stuffs -->
    <title>RAC Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link href="{{asset('style/bootstrap.css')}}" rel="stylesheet">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="{{asset('style/font-awesome.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('style/flexslider.css')}}">
    <!-- prettyPhoto -->
    <link rel="stylesheet" href="{{asset('style/prettyPhoto.css')}}">
    <!-- Main stylesheet -->
    <link href="{{asset('style/style.css')}}" rel="stylesheet">

    <!-- Bootstrap responsive -->
    <link href="{{asset('style/bootstrap-responsive.css')}}" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="{{asset("js/html5shim.js")}}"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Navbar starts -->

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="nav-collapse collapse">
                <ul class="nav pull-left">
                    <h3 style="color: white; pull-left"> WELCOME TO MWPF RAC PORTAL &nbsp;|&nbsp;<a href="{{url('/')}}" style="color: white" class="icon-home">&nbsp;&nbsp;</a><a href="{{url('/login')}}" style="color:yellow"> Login</a></h3>
                </ul>

                <ul class="nav pull-right">
                    <li><a href="#"><strong>Switchboard</strong> &nbsp; +27 10 100 3000</a></li>
{{--                    <li><a href="#"><i class="icon-user"></i>Login</a></li>--}}
{{--                    <li><a href="register.html"><i class="icon-user"></i>Register</a></li>--}}
                    <li class="dropdown">
                        <a href="{{url('contactus')}}"><i class="icon-phone"></i>Contact Us</a>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Navbar ends -->


<!-- Sliding box starts -->
<div class="slide-box">
    <div class="bor"></div>
    <div class="padd">
        <div class="slide-box-button">
            <i class="icon-chevron-left"></i>
        </div>
        <h5>Welcome to MWPF RACs</h5>
        <p align="justify">The Regional Advisory Committees, RACs, are support structures to the board. The Mineworkers Provident Fund has a committee in each region where there are members.</p>

        <hr />

        <div class="social">
            <a href="#"><i class="icon-facebook facebook"></i></a>
            <a href="#"><i class="icon-twitter twitter"></i></a>
            <a href="#"><i class="icon-linkedin linkedin"></i></a>
            <a href="#"><i class="icon-google-plus google-plus"></i></a>
            <a href="#"><i class="icon-pinterest pinterest"></i></a>
        </div>

    </div>
</div>

<!-- Sliding box ends -->

<!-- Main content starts -->

<div class="content">

    <div class="parallax">


        <div class="container" style="  float: left;
                width: 100%;
                text-align: center;
                padding: 90px 0px 100px 0px;
                background: url('../img/Underground_mine.jpg');
                background-attachment: fixed;
                background-origin: initial;
                background-clip: initial;
                background-size: cover;
                background-repeat:no-repeat;
                background-position:100% 0;
                background-position: center;
                margin-bottom: -100px;
                margin-top: -95px;
                        ">

          @yield('content')

        </div>

        <div class="clearfix"></div>

        <!-- Main content ends -->

        <!-- Footer -->
        <footer>
            <div class="bor"></div>
            <div class="copy" style="color: white" ><strong>Copyright 2020 &copy; - <a href="https://www.mwpf.co.za" style="color: white"><strong>Mineworkers Provident Fund</strong></a>&nbsp; - All Rights Reserved &nbsp;|<a href="https://www.ecowebplus.com" style="color: black" >&nbsp; Portal by Ecowebplus Digital</a> <a href="t&c.html" style="color: black">| &nbsp; Terms & Conditions &nbsp; |</strong></a></div>

        </footer>

        <!-- Scroll to top -->
        <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

        <!-- JS -->
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script> <!-- Bootstrap -->
        <script src="{{asset('js/imageloaded.js')}}"></script> <!-- Imageloaded -->
        <script src="{{asset('js/jquery.isotope.js')}}"></script> <!-- Isotope -->
        <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script> <!-- prettyPhoto -->
        <script src="{{asset('js/jquery.flexslider-min.js')}}"></script> <!-- Flexslider -->
        <script src="{{asset('js/custom.js')}}"></script> <!-- Main js file -->
</body>
</html>
