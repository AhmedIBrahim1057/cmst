<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>CMST</title>	

		<meta name="keywords" content="HTML5 Template" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700%7CSintony:400,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('frontendFiles/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('frontendFiles/vendor/rs-plugin/css/navigation.css')}}">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('frontendFiles/css/demos/demo-church.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('frontendFiles/css/skins/skin-church.css')}}"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('frontendFiles/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('frontendFiles/vendor/modernizr/modernizr.min.js')}}"></script>

        @yield('head')

	</head>
	<body>

		<div class="body">
            <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 0}">
				<div class="header-body border-top-0">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{route('home')}}">
											<img alt="Porto" width="250" height="auto" src="{{asset('frontendFiles/img/cmst-logo.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link " href="{{route('home')}}">
															Home
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{route('about')}}">
															About Us
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															E-EXPERIMENTS
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															COMMUNITY RENEWABLES
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															REPAIR CAFES
														</a>
													</li>
                                                    <li>
														<a class="nav-link" href="#">
															INTERNSHIPS
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ route('contact') }}">
															CONTACT US
														</a>
													</li>
													{{-- <li>
														<a class="nav-link" href="#">
															SIGN IN
														</a>
													</li> --}}
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

            @yield('content')

            <footer id="footer" class="bg-color-secondary custom-footer m-0" style="background: url('img/demos/church/footer.jpg'); background-size: cover;">
				<div class="container pt-5">
					<div class="row text-center">
						<div class="col">
							<a href="demo-church.html" class="text-decoration-none">
								<img src="{{asset('frontendFiles/img/cmst-logo.png')}}" width="150" height="41" alt class="img-fluid custom-img-fluid-center" />
							</a>
						</div>
					</div>
					<hr class="solid tall custom-hr-color-1">
					<div class="row text-center">
						<div class="col-lg-4 custom-sm-margin-bottom-1">
							<i class="fas fa-map-marker-alt text-color-primary custom-icon-size-1"></i>
							<p class="custom-text-color-2">
								<strong class="text-color-light">DSDC</strong></br> 
								1 Al Sarayat, St, El Weili, <br> Cairo Governorate 11517, Egypt
							</p>
						</div>
						<div class="col-lg-4 custom-sm-margin-bottom-1">
							<i class="far fa-clock text-color-primary custom-icon-size-1"></i>
							<p class="custom-text-color-2">
								<strong class="text-color-light">Join us on </br>Sunday for worship</strong></br> 
								8.00pm - 9.00pm
							</p>
						</div>
						<div class="col-lg-4">
							<i class="fas fa-phone-volume text-color-primary custom-icon-size-1"></i>
							<p>
								<strong class="text-color-light">Contact us now</strong></br>
								<a href="tel:+201001354446" class="text-decoration-none custom-text-color-2">Phone : (+2) 01001354446</a></br>
								<a href="mail:CMST@eng.asu.edu.eg" class="text-decoration-none custom-text-color-2">Email : CMST@eng.asu.edu.eg</a>
							</p>
						</div>
					</div>
					<hr class="solid tall custom-hr-color-1">
					<div class="row text-center pb-5">
						<div class="col">
							<ul class="social-icons social-icons-clean custom-social-icons mb-3">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
								<li class="social-icons-googleplus"><a href="http://www.google.com/" target="_blank" title="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
								<li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
							</ul>
							<p class="text-1 text-color-light opacity-7">© Copyright 2020. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</footer>

        </div>

		<!-- Vendor -->
		<script src="{{asset('frontendFiles/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/common/common.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/vide/jquery.vide.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/vivus/vivus.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('frontendFiles/js/theme.js')}}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{asset('frontendFiles/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('frontendFiles/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('frontendFiles/js/views/view.contact.js')}}"></script>

		<!-- Demo -->
		<script src="{{asset('frontendFiles/js/demos/demo-church.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('frontendFiles/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('frontendFiles/js/theme.init.js')}}"></script>


		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>Porto Church</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/demos/church/others/pin.png",
					iconsize: [28, 35],
					iconanchor: [28, 35]
				}
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 14
			};

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Custom Init Map
			var initMapAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').animate({
					height: 350
				}, 300, function(){
					setTimeout(function(){
						$('.custom-view-our-location').animate({
							bottom: '-160px'
						}, 300);
					}, 1000);
					
					var map = $('#googlemaps').gMap(mapSettings),
						mapRef = $('#googlemaps').data('gMap.reference');

					// Styles from https://snazzymaps.com/
					var styles = [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#e94f3f"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"gamma":"0.50"},{"hue":"#ff4a00"},{"lightness":"-79"},{"saturation":"-86"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#ff1700"}]},{"featureType":"landscape.natural.landcover","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"poi","elementType":"all","stylers":[{"color":"#e74231"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#4d6447"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"color":"#f0ce41"},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"color":"#363f42"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#231f20"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#6c5e53"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#313639"},{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"hue":"#ff0000"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#0e171d"}]}];

					var styledMap = new google.maps.StyledMapType(styles, {
						name: 'Styled Map'
					});

					mapRef.mapTypes.set('map_style', styledMap);
					mapRef.setMapTypeId('map_style');
				});
			}

			

		</script>

        @yield('js')
	</body>
</html>