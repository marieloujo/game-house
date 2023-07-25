<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta name="description" content="fervor" />
        <meta name="keywords" content="fervor" />
        <meta name="author" content="" />
        <meta name="MobileOptimized" content="320" />

        <title>{{ config('app.name', 'Game House') }} {{ isset($title) ? $title : "" }} dd </title>

        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

        {{ $optional_css ?? "" }}

    </head>
    <body class="dark">

        {{ $slot }}

        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        {{ $optional_js ?? "" }}

        <script>
            $(window).on("load resize", function () {
                windowHeight = $(window).height();
                $(".main-singin-box").css({ "height": windowHeight });
            });
        </script>

    </body>
</html>
