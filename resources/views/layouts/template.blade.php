<!DOCTYPE html>


<html>

<head>
	<meta charset="utf-8">
	<title> @yield('title') </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="INVORA" />
	<meta name="MobileOptimized" content="320" />
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    @yield('styles')
</head>

<body class="dark">

<a href="javascript:;" id="back-to-top"><i class="fas fa-arrow-up"></i></a>

@include('top-bar')
@include('hearder')

@yield('content')


@include('footer')

@yield('scripts')

</body>

</html>
