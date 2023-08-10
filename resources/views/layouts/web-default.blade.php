<!DOCTYPE html>
<html lang="en">

<head>
	@yield('seo')
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/assets-web/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/assets-web/css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/assets-web/css/magnific-popup.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/assets-web/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="/assets-web/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="/assets-web/css/themify-icons.css">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="/assets-web/css/niceselect.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="/assets-web/css/animate.css">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="/assets-web/css/flex-slider.min.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/assets-web/css/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="/assets-web/css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="/assets-web/css/reset.css">
	<link rel="stylesheet" href="/assets-web/style.css">
	<link rel="stylesheet" href="/assets-web/css/responsive.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body style="min-height: 100vh;">
	<main class="d-flex flex-column" style="height: 100%;">
		<header>
			@include('includes.common.header.header-web.index')
		</header>
		<div class="component flex-grow-1">
			@yield('content')
		</div>
		<footer class="footer">
			@include('includes.common.footer')
		</footer>
	</main>

	<!-- Jquery -->
	<script src="/assets-web/js/jquery.min.js"></script>
	<script src="/assets-web/js/jquery-migrate-3.0.0.js"></script>
	<script src="/assets-web/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="/assets-web/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="/assets-web/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="/assets-web/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="/assets-web/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="/assets-web/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="/assets-web/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="/assets-web/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="/assets-web/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="/assets-web/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="/assets-web/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="/assets-web/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="/assets-web/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="/assets-web/js/easing.js"></script>
	<!-- Active JS -->
	<script src="/assets-web/js/active.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>