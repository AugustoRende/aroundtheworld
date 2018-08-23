<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>{{ config('app.name', 'Laravel') }}</title>

	    <!-- Scripts -->
	    <script src="{{ asset('js/app.js') }}" defer></script>
	    <script src="{{ asset('js/script.js') }}" defer></script>
	    
	    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7a-pVRxc_cx00QNTiPWQZW50qxiqZGO0&libraries=places"></script>
	    <!-- ESTA TIENE MI API_TOKEN PERO FALLA -->
	    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuh7YtREXRXnOYpNWpyP0waOooxjVwzs4"></script> -->
	    
	    <!-- Fonts -->
	    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	    <!-- Styles -->
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
	</head>
	<body>

		@yield('content')

	</body>
</html>