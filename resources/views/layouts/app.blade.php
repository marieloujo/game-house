<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Game House') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{ $styles ?? "" }}

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="dark font-sans antialiased">

        @include('users.navigation-menu')

        {{ $slot }}

        {{ $scripts ?? "" }}

        @livewireScripts
    </body>
</html>
