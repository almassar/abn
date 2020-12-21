<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($pathBuildCssJs .'/'.'vendor.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset($pathBuildCssJs .'/'.'admin.css?1') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $seo['title'] ?? 'Панель управления' }}</title>
</head>
<body>
    <div id="vue-admin">
        @include('components.debug-screen')

        <div class="wrapper">
            @if(auth()->check() && (auth()->user()->role_id  == \App\Modules\Users\User::ROLE_ADMIN))
                @if($showSidebar ?? true)
                    <nav class="sidebar">
                        @include('admin.parts.sidebar')
                    </nav>
                @endif

                <main>
                    @yield('content')
                </main>
            @endif

            @if(!auth()->check() || auth()->user()->role_id !== \App\Modules\Users\User::ROLE_ADMIN)
                 @yield('content')
            @endif
        </div>

    </div>

    <script src="{{ asset($pathBuildCssJs .'/'.'manifest.js')}}"></script>
    <script src="{{ asset($pathBuildCssJs .'/'.'vendor.js')}}"></script>
    <script src="{{ asset($pathBuildCssJs .'/'.'admin.js?1')}}"></script>
</body>
</html>
