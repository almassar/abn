<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($pathBuildCssJs .'/'.'vendor.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($pathBuildCssJs .'/'.'site.css?v1') }}">
    <title>{{ $seo['title'] ?? 'Добро пожаловать в АБН Технологии' }}</title>
</head>
<body>

    @include('metrica.yandex')

    <div id="vue-site">
        <header>
            @include('parts.header')
        </header>

        <nav>

        </nav>

        <main>
            @yield('content')
        </main>


        <footer>
            @include('parts.footer')
        </footer>
    </div>

    <script src="{{ asset($pathBuildCssJs .'/'.'manifest.js')}}"></script>
    <script src="{{ asset($pathBuildCssJs .'/'.'vendor.js')}}"></script>
    <script src="{{ asset($pathBuildCssJs .'/'.'site.js')}}"></script>
</body>
</html>
