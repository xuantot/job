<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    <!-- css -->
    <base href="{{ asset('backend') }}/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">



	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	<!-- header -->
    @include('backend.master.header')
	<!-- header -->
	<!-- sidebar left-->
    @include('backend.master.sidebar')
	<!--/. end sidebar left-->

	<!--main-->
	@yield('content')
	<!--end main-->

    <!-- javascript -->
    <!-- jQuery -->
	<script src="/backend/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/backend/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/backend/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/backend/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="/backend/js/jquery.flexslider-min.js"></script>

	<script src="/backend/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/backend/js/jquery.magnific-popup.min.js"></script>
	<script src="/backend/js/magnific-popup-options.js"></script>

<!-- Stellar Parallax -->
	<script src="/backend/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="/backend/js/main.js"></script>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/chart-data.js"></script>
<<<<<<< HEAD
	@yield('script')
=======
    @yield('scrip')
    @stack('js')
>>>>>>> admin/category

</body>

</html>
