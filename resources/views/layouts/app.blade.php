<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.css" />
    <script type="text/javascript" src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body_main">
    <div>
        @include('components.nav')
        <main style="margin-top: 30px;">
            @yield('content')
        </main>
    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
