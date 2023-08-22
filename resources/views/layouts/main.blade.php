<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ url('/images/favicon.png') }}" />
    <meta name="theme-color" content="#1EA24D">

    @yield('head')
    @vite('resources/sass/main.scss')
</head>

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    @vite('resources/js/global.js')
    @yield('scripts')
</body>

</html>
