<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ url('/images/favicon.png') }}" />
    <meta name="theme-color" content="#1EA24D">
    @yield('meta')
    @yield('head')
    @vite('resources/sass/main.scss')
</head>

<body>
    @if ($errors->any())
        <script>
            alert("{{ $errors->first() }}");
        </script>
    @endif

    @if (\Session::has('message'))
        <script>
            alert("{!! \Session::get('message') !!}");
        </script>
    @endif

    @include('layouts.header')

    <main class="main">
        @yield('content')
    </main>

    @include('layouts.footer')

    @vite('resources/js/global.js')
    @yield('scripts')
</body>

</html>
