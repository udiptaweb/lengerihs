<!doctype html>
<html lang="eng-us">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Remixicon CSS --> 
		<link rel="stylesheet" href="assets/css/remixicon.css">
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<!-- Odometer Min CSS --> 
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<!-- Magnific Popup Min CSS --> 
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
		<!-- Date Picker Min CSS --> 
		<link rel="stylesheet" href="assets/css/date-picker.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>@yield('title')</title>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<div class="pl-flip-1 pl-flip-2"></div>
			</div>
		</div>
		<!-- End Preloader Area -->
		
		<!-- Start Header Area -->
		<header class="header-area">
			<!-- Start Top Header -->
			<div class="top-header top-header-bg">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<ul class="header-left-content">
								<li>
									<a href="tel:+1-(514)-312-5678">
										<i class="ri-phone-fill"></i>
										+1 (514) 312-5678 
									</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-6 col-sm-6">
							<div class="header-right-content">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start Top Header -->
			
			<!-- Start Navbar Area --> 
			<div class="navbar-area navbar-area-bg">
                <div class="mobile-responsive-nav">
                    <div class="container">
                        <div class="mobile-responsive-menu">
                            <div class="logo">
                                <a href="{{route('welcome')}}">
									<img src="{{asset('assets/images/logo.jpeg')}}" width="40px" alt="logo">
								</a>
                            </div>

							
                        </div>
                    </div>
                </div>

                <div class="desktop-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a  href="{{route('welcome')}}">
                                <img src="{{asset('assets/images/logo.jpeg')}}" width="40px" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="{{route('welcome')}}" class="nav-link {{route('welcome') == url()->current() ? 'active' : ''}}">
											Home  
										</a>
									</li>

                                    <li class="nav-item">
										<a href="{{route('contact')}}" class="nav-link {{route('contact') == url()->current() ? 'active' : ''}}">Contact</a>
									</li>
                                    <li class="nav-item">
										<a href="{{route('about')}}" class="nav-link {{route('about') == url()->current() ? 'active' : ''}}">About</a>
									</li>
									<li class="nav-item">
										<a href="{{route('gallery')}}" class="nav-link {{route('gallery') == url()->current() ? 'active' : ''}}">Gallery</a>
									</li>
									<li class="nav-item">
										<a href="{{route('staff')}}" class="nav-link {{route('staff') == url()->current() ? 'active' : ''}}">Staff</a>
									</li>
                                </ul>

                                <div class="others-options">
									<ul>
										<!-- <li>
											<a href="application.html" class="default-btn">
												Application form
											</a>
										</li>
										<li>
											<button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#exampleModalsrc">
												<i class="ri-search-line"></i>
											</button>
										</li> -->
									</ul>
                                </div>
                            </div>
                        </nav>
                    </div>
				</div>
            </div>
			<!-- End Navbar Area -->
		</header>
		<!-- End Header Area -->

		<!-- Search Modal -->
		<div class="modal fade search-modal-area" id="exampleModalsrc">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<button type="button" data-bs-dismiss="modal" class="closer-btn">
						<i class="ri-close-line"></i>
					</button>

					<div class="modal-body">
						<form class="search-box">
							<div class="search-input">
								<input type="text" name="Search" placeholder="Search for..." class="form-control">

								<button type="submit" class="search-btn">
									<i class="ri-search-line"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Search Modal -->

		@yield('content')

		<!-- Start Footer Area -->
		<footer class="footer-area black-bg-color">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget bg-f9f5f1">
							<a href="index.html" class="logo">
								<img src="assets/{{asset('images/white-logo.jpeg')}}" alt="Image">
							</a>

							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptas animi, minima velit corrupti fugit! Tenetur animi suscipit, reiciendis ad consectetur fugit</p>

							<ul class="social-icon">
								<li>
									<span>Follow us:</span>
								</li>
								<li>
									<a href="https://www.facebook.com/" target="_blank">
										<i class="ri-facebook-fill"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/" target="_blank">
										<i class="ri-instagram-line"></i>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/" target="_blank">
										<i class="ri-linkedin-fill"></i>
									</a>
								</li>
								<li>
									<a href="https://twitter.com/" target="_blank">
										<i class="ri-twitter-fill"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h3>Useful link</h3>

							<ul class="import-link">
								<li>
									<a href="application.html">Application</a>
								</li>
								<li>
									<a href="faq.html">FAQ</a>
								</li>
								<li>
									<a href="alumni.html">Alumni</a>
								</li>
								<li>
									<a href="terms-conditions.html">Terms & conditions</a>
								</li>
								<li>
									<a href="privacy-policy.html">Privacy policy</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h3>Study</h3>

							<ul class="import-link">
								<li>
									<a href="courses.html">Find a course</a>
								</li>
								<li>
									<a href="application.html">Admissions</a>
								</li>
								<li>
									<a href="our-professors.html">Scholarships</a>
								</li>
								<li>
									<a href="campus-information.html">Study on campus</a>
								</li>
								<li>
									<a href="tuition-fees.html">Fees and costs</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h3>Inquiries</h3>

							<ul class="address">
								<li class="location">
									<i class="ri-map-pin-line"></i>
									<span>Address</span>
									1312 Greg Street, Sparks. NV 88441
								</li>
								<li>
									<i class="ri-mail-line"></i>
									<span>Email</span>
									<a href="/cdn-cgi/l/email-protection#aac3c4ccc5eadfc4c9c584c9c5c7"><span class="__cf_email__" data-cfemail="0b62656d644b7e65686425686466">[email&#160;protected]</span></a>
								</li>
								<li>
									<i class="ri-phone-line"></i>
									<span>Phone</span>
									<a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<p>
					Copyright <i class="ri-copyright-line"></i> 2021 Unco. Design & Developed By 
					<a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
				</p>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script> 
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="assets/js/meanmenu.min.js"></script>
		<!-- Owl Carousel Min JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
		<!-- Appear Min JS -->
        <script src="assets/js/appear.min.js"></script>
		<!-- Odometer Min JS -->
        <script src="assets/js/odometer.min.js"></script>
		<!-- Jarallax Min JS -->
        <script src="assets/js/jarallax.min.js"></script>
		<!-- Bootstrap Datepicker Min JS -->
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
		<!-- Magnific Popup Min JS -->
        <script src="assets/js/magnific-popup.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="assets/js/ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
    </body>
</html>