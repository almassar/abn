<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($pathBuildCssJs .'/'.'vendor.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($pathBuildCssJs .'/'.'site.css?v10') }}">
    <title>{{ $seo['title'] ?? 'Добро пожаловать в АБН Технологии' }}</title>

    @if(config('app.env') == 'server')
        <script src="//code-ya.jivosite.com/widget/8RTnPSbFty" async></script>
    @endif

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N2P856R');</script>
<!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2P856R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
