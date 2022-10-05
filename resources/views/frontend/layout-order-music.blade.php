<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Order Music</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="Free from HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="csrf-token" content="{{ csrf_token() }}">
		
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
		
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			@include('frontend.partials.header')
			<!--/ header end -->
			
			<!-- banner area -->
			@include('frontend.partials.banner')
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- Hero block area -->
			@yield('content')
			<!--/ hero end -->
			
			{{-- messages --}}
			<!-- promo -->
			@include('frontend.partials.messages')
			<!--/ promo end -->
			
			<!-- featured abbum -->
			{{-- <div class="featured pad" id="featuredalbum">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Featured Album</h2>
					</div>
					<!-- featured album elements -->
					<div class="featured-element">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/1.jpg" alt="" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Power Pop</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/2.jpg" alt="" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Bad Brains</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/3.jpg" alt="" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>The Mars Volta</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/4.jpg" alt="" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Dirty Dancing</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/5.jpg" alt="" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Hotel California</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="img/featured/6.jpg" alt="" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Punk Compilation</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- features end -->
			
			<!-- call to action -->
			{{-- <div class="cta parallax-one pad">
				<div class="container">
					<!-- cta element -->
					<div class="cta-element ">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<!-- heading -->
								<h3>Melodi, A Fully Rock Album Pro</h3>
								<!-- paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim sectetur adipiscing elit, sed do eiusmod tempoad minim veniam consequat.</p>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="cta-btn text-center">
									<!-- purchase now button -->
									<a href="#" class="btn btn-default btn-lg">Download Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!--/ cta end -->
			
			<!-- work with us -->
			{{-- <div class="work-with-us pad" id="joinus">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Work With Us</h2>
					</div>
					<!-- why work with us content -->
					<div class="why-content">
						<!-- paragraph -->
						<p class="why-message">It would be a great pleasure to have you in our team, follow these steps to join us.</p>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-one">
									<span class="why-number">1</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-two">
									<span class="why-number">2</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accu santium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-three">
									<span class="why-number">3</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-four">
									<span class="why-number">4</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
						</div>
						<!-- apply button -->
						<div class="apply-btn">
							<!-- button line -->
							<a class="btn btn-lg btn-theme" href="#">Join Now</a>
						</div>
					</div>
				</div>
			</div> --}}
			<!--/ end work with us -->
			
			<!-- news letter -->
			{{-- <div class="news-letter">
				<div class="container">
					<!-- news letter inner content -->
					<div class="news-content ">
						<!-- heading -->
						<h3>Sign Up For Newsletter</h3>
						<!-- paragraph -->
						<p><strong>Contact Us</strong> and let us know if you have any questions, Don't forget to subscribe for more awesome stuff by typing mail bellow.</p>
						<!-- subscribe form -->
						<form>
							<div class="input-group">
								<input type="text" class="form-control input-lg" placeholder="Email">
								<span class="input-group-btn">
									<button class="btn btn-default btn-lg" type="button">Subscribe</button>
								</span>
							</div><!-- /input-group -->
						</form>
					</div>
				</div>
			</div> --}}
			<!-- news letter end -->
			
			{{-- list messages --}}
			@include('frontend.partials.list-messages')
			<!-- work with us end -->
			
			{{-- radio --}}
			<!-- events -->
			@include('frontend.partials.radio')
			<!-- events end -->
			
			<!-- about -->
			{{-- <div class="about" id="team">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Who We Are?</h2>
					</div>
					<!-- about what we are like content -->
					<div class="about-what-we">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-heartbeat"></i> What we do?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-hand-o-up"></i> Why choose us?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="what-we-item ">
									<!-- heading with icon -->
									<h3><i class="fa fa-map-marker"></i> Where we are?</h3>
									<!-- paragraph -->
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit occaecat cupidatat non id est laborum.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- our team -->
				<div class="team">
					<div class="container">	
						<!-- Team Member's Details -->
						<div class="team-content">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member  delay-one">
										<!-- Image Hover Block -->
										<div class="member-img">
											<!-- Image  -->
											<img class="img-responsive" src="img/user/1.jpg" alt="" />
											<!-- Hover block -->
											<div class="social text-center">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
										<!-- Member Details -->
										<h3>Stacey Kowalski</h3>
										<span class="designation">Guitarist</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member  delay-two">
										<!-- Image Hover Block -->
										<div class="member-img">
											<!-- Image  -->
											<img class="img-responsive" src="img/user/2.jpg" alt="" />
											<!-- Hover block -->
											<div class="social text-center">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
										<!-- Member Details -->
										<h3>Joanna Koo</h3>
										<span class="designation">Clarinetist</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member  delay-three">
										<!-- Image Hover Block -->
										<div class="member-img">
											<!-- Image  -->
											<img class="img-responsive" src="img/user/3.jpg" alt="" />
											<!-- Hover block -->
											<div class="social text-center">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
										<!-- Member Details -->
										<h3>Mark Laredo</h3>
										<span class="designation">Accordionist</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member  delay-four">
										<!-- Image Hover Block -->
										<div class="member-img">
											<!-- Image  -->
											<img class="img-responsive" src="img/user/4.jpg" alt="" />
											<!-- Hover block -->
											<div class="social text-center">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
												<a href="#"><i class="fa fa-linkedin"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
										<!-- Member Details -->
										<h3>Belie Costa</h3>
										<span class="designation">Keyboardist</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- about end -->
			
			<!-- meet -->
			{{-- <div class="meet parallax-four pad" id="meet">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading-shadow">
						<h2>Upcoming Meets</h2>
					</div>
					<!-- meet location image -->
					<div class="meet-map">
						<img class="img-responsive img-map" src="img/flat/map.png" alt="" />
						<!-- map marker for India  -->
						<a href="#" class="map-marker india " data-toggle="tooltip" data-placement="top" title="India"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for United States  -->
						<a href="#" class="map-marker usa " data-toggle="tooltip" data-placement="top" title="United States"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for South Africa  -->
						<a href="#" class="map-marker sa " data-toggle="tooltip" data-placement="top" title="South Africa"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for Russia  -->
						<a href="#" class="map-marker russia " data-toggle="tooltip" data-placement="top" title="Russia"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
						<!-- map marker for Brazil  -->
						<a href="#" class="map-marker brazil " data-toggle="tooltip" data-placement="top" title="Brazil"><img class="img-responsive" src="img/flat/map-marker.png" alt="" /></a>
					</div>
				</div>
			</div> --}}
			<!-- meet end -->
			
			<!-- contact -->
			{{-- <div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Contact Us</h2>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details">#30/67, 5th Street, Mega Market Circle, New Delhi - 625001</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">music.site@melodi.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">555 555 5555</span>
							</div>
						</div>
					</div>
					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Do you have any idea in your mind? Drop us a line.</p>
						<form role="form" id="contactForm" method="post">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"></textarea>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-theme">Send Message</button>
							</div>
						</form>
												
					</div>

				</div>
			</div> --}}
			<!-- contact end -->
			
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