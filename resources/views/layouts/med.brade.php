
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from themes.semicolonweb.com/html/canvas/demo-medical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 20:03:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:400,700|Crete+Round:400i&amp;display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />

	<!-- Medical Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/medical/medical.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="demos/medical/css/medical-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="demos/medical/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/colors0ee8.css?color=DE6262" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Medical Demo | Canvas</title>

</head>

<body class="stretched page-transition" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='https://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='https://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">
			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto d-none d-md-flex">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#"><i class="icon-time"></i> Timings</a></li>
								<li class="top-links-item"><a href="#"><i class="icon-phone3"></i> +1-800-9876-221</a></li>
								<li class="top-links-item"><a href="#" class="nott"><i class="icon-envelope2"></i> medical@canvas.com</a></li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="#">EN</a>
									<ul class="top-links-sub-menu">
										<li class="top-links-item"><a href="#"><img src="images/icons/flags/french.png" alt="French"> FR</a></li>
										<li class="top-links-item"><a href="#"><img src="images/icons/flags/italian.png" alt="Italian"> IT</a></li>
										<li class="top-links-item"><a href="#"><img src="images/icons/flags/german.png" alt="German"> DE</a></li>
									</ul>
								</li>
								<li class="top-links-item"><a href="demo-medical.html#booking-appointment-form" class="bg-color text-white">Book an Appointment</a></li>
							</ul>
						</div><!-- .top-links end -->

					</div>
				</div>

			</div>
		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" data-menu-padding="28" data-sticky-menu-padding="8">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo"><img src="demos/medical/images/logo-medical.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="demos/medical/images/logo-medical%402x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu style-3 menu-spacing-margin">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="demo-medical.html"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-medical-about-us.html"><div>About Us</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-medical-departments.html"><div>Departments</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-medical-appointment.html"><div>Appointment</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-medical-doctors.html"><div>Doctors</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="demo-medical-doctors-lists.html"><div>2 columns - List style</div></a></li>
										<li class="menu-item"><a class="menu-link" href="demo-medical-doctors-3.html"><div>3 columns</div></a></li>
										<li class="menu-item"><a class="menu-link" href="demo-medical-doctors.html"><div>4 columns</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="demo-medical-blog.html"><div>Blog</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-medical-contact.html"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-50 min-vh-md-100" data-loop="true" data-autoplay="5000">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="container">
								<div class="slider-caption slider-caption-right" style="max-width: 700px;">
									<div>
										<h2 data-animate="flipInX">Team of Experts<span>.</span></h2>
										<p class="d-none d-sm-block" data-animate="flipInX" data-delay="500">Our Team of Doctors are specialized in Various Disciplines to make sure you get the Best Treatment.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('demos/medical/images/slider/1.jpg');"></div>
						</div>
						<div class="swiper-slide">
							<div class="container">
								<div class="slider-caption">
									<div>
										<h2 data-animate="zoomIn">Heart<span>Beat</span>.</h2>
										<p class="d-none d-sm-block" data-animate="zoomIn" data-delay="500">Care for your Loved Ones from the Experts in the Medical &amp; Hospitality Industry.</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('demos/medical/images/slider/2.jpg');"></div>
						</div>
					</div>

				</div>

			</div>
		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row col-mb-50 mb-0">
						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn">
									<a href="#"><i class="icon-medical-i-cardiology"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Intensive Care</h3>
									<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
									<a href="#"><i class="icon-medical-i-social-services"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Family Planning</h3>
									<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
									<a href="#"><i class="icon-medical-i-neurology"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Expert Consultation</h3>
									<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn">
									<a href="#"><i class="icon-medical-i-dental"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Dental Sciences</h3>
									<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
									<a href="#"><i class="icon-medical-i-imaging-root-category"></i></a>
								</div>
								<div class="fbox-content">
									<h3>X-Ray Services</h3>
									<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="feature-box fbox-plain">
								<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
									<a href="#"><i class="icon-medical-i-ambulance"></i></a>
								</div>
								<div class="fbox-content">
									<h3>24x7 Emergency</h3>
									<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="section row p-0 align-items-stretch dark topmargin-sm">
					<div class="col-lg-5" style="background: url('demos/medical/images/section-bg.jpg') center center no-repeat; background-size: cover; min-height: 250px;">
						<div>&nbsp;</div>
					</div>
					<div id="booking-appointment-form" class="col-lg-7 p-0">
						<div class="bg-color form-widget col-padding" data-loader="button">
							<h2>Book an Appointment.</h2>
							<div class="form-result"></div>
							<form class="row mb-0" id="template-medical-form" name="template-medical-form" action="http://themes.semicolonweb.com/html/canvas/include/form.php" method="post">
								<div class="form-process">
									<div class="css3-spinner">
										<div class="css3-spinner-scaler"></div>
									</div>
								</div>
								<div class="col-md-8 form-group">
									<label for="template-medical-name">Name:</label>
									<input type="text" id="template-medical-name" name="template-medical-name" class="form-control not-dark required" value="">
								</div>
								<div class="col-md-4 form-group">
									<label for="template-medical-phone">Phone:</label>
									<input type="text" id="template-medical-phone" name="template-medical-phone" class="form-control not-dark required" value="">
								</div>
								<div class="w-100"></div>
								<div class="col-md-8 form-group">
									<label for="template-medical-email">Email Address:</label>
									<input type="email" id="template-medical-email" name="template-medical-email" class="form-control not-dark required" value="">
								</div>
								<div class="col-md-4 form-group">
									<label for="template-medical-dob">Date of Birth:</label>
									<input type="text" id="template-medical-dob" name="template-medical-dob" class="form-control not-dark required" value="" placeholder="DD/MM/YYYY">
								</div>
								<div class="w-100"></div>
								<div class="col-md-5">
									<div class="row">
										<div class="col-12 form-group">
											<label for="template-medical-appoint-date">Appointment Date:</label>
											<input type="text" id="template-medical-appoint-date" name="template-medical-appoint-date" class="form-control not-dark required" value="" placeholder="DD/MM/YYYY">
										</div>
										<div class="col-12 form-group">
											<label for="template-medical-second-booking">Booked with us Before?</label><br>
											<label class="rightmargin-sm">
												<input type="radio" id="template-medical-second-booking" name="template-medical-second-booking" value="yes">
												Yes
											</label>
											<label>
												<input type="radio" name="template-medical-second-booking" value="no" checked>
												No
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-7 form-group">
									<label for="template-medical-message">Message:</label>
									<textarea id="template-medical-message" name="template-medical-message" class="form-control not-dark required" cols="30" rows="5"></textarea>
								</div>
								<div class="w-100"></div>
								<div class="col-12 form-group d-none">
									<input type="text" name="template-medical-botcheck" value="" />
								</div>
								<div class="col-12 form-group text-right">
									<button class="button button-white button-light button-rounded m-0" type="submit" value="submit">Confirm Booking</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="container clearfix">

					<div class="row col-mb-50 mb-0">
						<div class="col-md-7">
							<div class="accordion accordion-lg clearfix">

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-ok-circle"></i>
										<i class="accordion-open icon-remove-circle"></i>
									</div>
									<div class="accordion-title">
										Kidney Transplant
									</div>
								</div>
								<div class="accordion-content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-ok-circle"></i>
										<i class="accordion-open icon-remove-circle"></i>
									</div>
									<div class="accordion-title">
										Pulmonary Treament
									</div>
								</div>
								<div class="accordion-content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-ok-circle"></i>
										<i class="accordion-open icon-remove-circle"></i>
									</div>
									<div class="accordion-title">
										Eye Care &amp; Lasik Surgery
									</div>
								</div>
								<div class="accordion-content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-ok-circle"></i>
										<i class="accordion-open icon-remove-circle"></i>
									</div>
									<div class="accordion-title">
										Ear, Nose &amp; Throat
									</div>
								</div>
								<div class="accordion-content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

								<div class="accordion-header">
									<div class="accordion-icon">
										<i class="accordion-closed icon-ok-circle"></i>
										<i class="accordion-open icon-remove-circle"></i>
									</div>
									<div class="accordion-title">
										Cardiology Department
									</div>
								</div>
								<div class="accordion-content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

							</div>
						</div>

						<div class="col-md-5">
							<h4>Patient Testimonials<span>.</span></h4>
							<ul class="testimonials-grid grid-1">
								<li class="grid-item pt-0">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
											<div class="testi-meta">
												John Doe
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
								</li>
								<li class="grid-item pb-0">
									<div class="testimonial">
										<div class="testi-image">
											<a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
											<div class="testi-meta">
												Collis Ta'eed
												<span>Envato Inc.</span>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<div class="w-100 text-right">
								<a href="#" class="button button-mini button-rounded mr-0">More Patient Feedbacks...</a>
							</div>
						</div>
					</div>

				</div>

				<div class="section mt-0">
					<div class="container clearfix">

						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-stack i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="100" data-to="23331" data-refresh-interval="200" data-speed="2500"></span>+</div>
										<h5 class="m-0 color">Clients Served</h5>
										<div class="d-block d-md-block d-lg-none bottommargin"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-tint i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="100" data-to="56841" data-refresh-interval="250" data-speed="2000"></span>+</div>
										<h5 class="m-0 color">X-Rays Done</h5>
										<div class="d-block d-md-block d-lg-none bottommargin"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-tint i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="100" data-to="332" data-refresh-interval="50" data-speed="3000"></span>+</div>
										<h5 class="m-0 color">Worldwide Staff</h5>
										<div class="d-block d-md-none bottommargin"></div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6">
								<div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
									<div class="fbox-icon">
										<a href="#"><i class="icon-text-width i-alt"></i></a>
									</div>
									<div class="fbox-content">
										<div class="counter counter-small"><span data-from="100" data-to="2213" data-refresh-interval="110" data-speed="3500"></span>+</div>
										<h5 class="m-0 color">Lives Saved</h5>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container clearfix">
					<div class="heading-block center border-bottom-0">
						<h3>Meet our Team of Specialists<span>.</span></h3>
						<span>We make sure that your Life are in Good Hands.</span>
					</div>

					<div id="oc-team" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-lg="3" data-items-xl="4">

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/1.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. John Doe</h4><span>Cardiologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/2.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Bryan Mcguire</h4><span>Orthopedist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/3.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Mary Jane</h4><span>Neurologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/4.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Silvia Bush</h4><span>Dentist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/6.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Hugh Baldwin</h4><span>Cardiologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/7.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Erika Todd</h4><span>Neurologist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/8.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Randy Adams</h4><span>Dentist</span></div>
							</div>
						</div>

						<div class="team">
							<div class="team-image">
								<img src="demos/medical/images/doctors/9.jpg" alt="Dr. John Doe">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>Dr. Alan Freeman</h4><span>Eye Specialist</span></div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" style="background-color: #F5F5F5; border-top: 2px solid rgba(0,0,0,0.06);">
			<div class="container" style="border-bottom: 1px solid rgba(0,0,0,0.06);">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row gutter-50 col-mb-50">
						<div class="col-md-8">

							<div class="widget clearfix">

								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="http://themes.semicolonweb.com/html/canvas/include/subscribe.php" method="post" class="mb-0 row clearfix">
									<div class="col-lg-9">
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="sm-form-control required email" placeholder="Enter your Email to Subscribe to our Newsletter">
									</div>
									<div class="col-lg-3">
										<button class="button button-rounded m-0 center btn-block" type="submit">Subscribe</button>
									</div>
								</form>

								<div class="line line-sm"></div>

								<div class="row col-mb-30">
									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">About</a></li>
											<li><a href="#">FAQs</a></li>
											<li><a href="#">Support</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Shop</a></li>
											<li><a href="#">Portfolio</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Forums</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Corporate</a></li>
											<li><a href="#">Agency</a></li>
											<li><a href="#">eCommerce</a></li>
											<li><a href="#">Personal</a></li>
											<li><a href="#">One Page</a></li>
										</ul>
									</div>

									<div class="col-lg-3 col-6 widget_links">
										<ul>
											<li><a href="#">Restaurant</a></li>
											<li><a href="#">Wedding</a></li>
											<li><a href="#">App Showcase</a></li>
											<li><a href="#">Magazine</a></li>
											<li><a href="#">Landing Page</a></li>
										</ul>
									</div>
								</div>

							</div>

						</div>

						<div class="col-md-4">

							<div class="widget">

								<div class="row col-mb-30">
									<div class="col-lg-12">
										<div class="footer-big-contacts">
											<span>Call Us:</span>
											(1) 22 55412474
										</div>
									</div>

									<div class="col-lg-12">
										<div class="footer-big-contacts">
											<span>Send an Email:</span>
											info@canvas.com
										</div>
									</div>
								</div>

							</div>

							<div class="widget subscribe-widget clearfix">

								<div class="row col-mb-30">
									<div class="col-sm-6 col-md-12 col-lg-6 clearfix">
										<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
									</div>
									<div class="col-sm-6 col-md-12 col-lg-6 clearfix">
										<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent">
				<div class="container clearfix">

					<div class="row col-mb-30">
						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-right">
							<div class="copyrights-menu copyright-links clearfix">
								<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/demo-medical.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 20:04:51 GMT -->
</html>