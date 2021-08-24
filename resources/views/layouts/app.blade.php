<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

</head>

<body>
    <div class="body-inner">
        <div id="app">
            @include('view.header')
            
    
            <main class="py-4">
                @yield('content')
            </main>

            @include('view.footer')
    
        </div>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!--Template functions-->
        <script src="{{ asset('js/functions.js') }}"></script>
    </div>
</body>

</html>
