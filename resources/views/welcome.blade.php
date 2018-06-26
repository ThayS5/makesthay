<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('assets/css/semantic.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/semantic.min.js')}}"></script>
</head>
<body>
	@yield('content')
</body>
</html>
