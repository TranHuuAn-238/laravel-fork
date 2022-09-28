<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> @yield('title') </title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="Free from HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="{{ asset('frontend/css/animate.min.css') }}" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
		<!-- Font awesome CSS -->
		<link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('frontend/css/style-color.css') }}" rel="stylesheet">
		
		@stack('stylesheets')

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('frontend/img/logo/favicon.ico') }}">

	</head>
	
	<body>

		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
            
                <!-- primary menu -->
                <nav class="navbar navbar-fixed-top navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- logo area -->
                            <a class="navbar-brand" href="{{ route('frontend.home.index') }}">
                                <!-- logo image -->
                                <img class="img-responsive" src="{{ asset('frontend/img/logo/logo.png') }}" alt="" />
                            </a>
                        </div>
            
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ route('frontend.home.index') . '#listofsongs'}}">List of songs</a></li>
                                {{-- <li><a href="#featuredalbum">Featured Album</a></li> --}}
                                {{-- <li><a href="#joinus">Join Us</a></li> --}}
                                {{-- <li><a href="#listmessages">List messages</a></li> --}}
                                {{-- <li><a href="#radio">Radio</a></li> --}}
                                {{-- <li><a href="#team">Team</a></li> --}}
                                {{-- <li><a href="#contact">Contact</a></li> --}}
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
			<!--/ header end -->
			
			<!-- banner area -->
			{{-- @include('frontend.partials.banner') --}}
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- Hero block area -->
            <div id="" class="hero pad">
                @yield('content')
            </div>
            <!--/ hero end -->
			
			
			
			<!-- footer -->
			@include('frontend.partials.footer')
			<!-- footer end -->
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="{{ asset('frontend/js/jquery.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
		<!-- WayPoints JS -->
		<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
		<!-- Include js plugin -->
		<script src="{{ asset('frontend/js/owl.carousel.min.j') }}s"></script>
		<!-- One Page Nav -->
		<script src="{{ asset('frontend/js/jquery.nav.js') }}"></script>
		<!-- Respond JS for IE8 -->
		<script src="{{ asset('frontend/js/respond.min.js') }}"></script>
		<!-- HTML5 Support for IE -->
		<script src="{{ asset('frontend/js/html5shiv.js') }}"></script>
		<!-- Custom JS -->
		<script src="{{ asset('frontend/js/custom.js') }}"></script>
		@stack('scripts')
	</body>	
</html>