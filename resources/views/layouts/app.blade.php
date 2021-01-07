<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'DC | Welcome to DC')</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset("images/favicon.ico") }}">

        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        @include('partials.header')

        @yield('main-content')

        @include('partials.footer')

        <!-- js -->
        <script src="{{ asset("js/app.js") }}" charset="utf-8"></script>
    </body>
</html>
