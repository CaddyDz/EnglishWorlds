<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Styles -->
    @yield('styles')
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">

		<!-- Scripts -->
		<script>
				window.Laravel = {!! json_encode([
						'csrfToken' => csrf_token(),
				]) !!};
		</script>
</head>
<body>
		<div id="app">
			@include('layouts.nav')
			<div class="container">
				@yield('content')
			</div>
		</div>
		@include('layouts.footer')
		<!-- Scripts -->
    @yield('scripts')
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery.ns-autogrow.min.js') }}"></script>
</body>
</html>
