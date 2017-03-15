<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 	<meta name="keywords" content="laravel-project">
	<meta name="description" content="Laravel Development">
	<meta name="author" content="Jeffrey">
	<meta http-equiv="refresh" content="10"> -->

	<title>Merchandise</title>
	<link rel="stylesheet" href="{{ asset('system/public/css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('system/public/css/main.css') }}" />
</head>

<body>
	<header>
		@yield('header')
	</header>

		@yield('main')

	<footer>
		@yield('footer')
	</footer>
	<script src="{{ asset('system/public/js/vendor.js') }}"></script>

</body>
	
</html>