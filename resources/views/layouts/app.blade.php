<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('sgac/css/fonts_google_family_Kaushan.css') }}">
    <link rel="stylesheet" href="{{ asset('sgac/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('sgac/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('sgac/css/message.css') }}">
    <link rel="stylesheet" href="{{ asset('sgac/css/load.css') }}">
    @stack('styles')
</head>
<body>

<div class="container">
    @yield('content')
</div>

<script src="{{ asset('sgac/js/jquery.js') }}"></script>
<script src="{{ asset('sgac/js/popper.min.js') }}"></script>
<script src="{{ asset('sgac/js/bootstrap.js') }}"></script>
<script src="{{ asset('sgac/js/jquery.form.min.js') }}"></script>
<script src="{{ asset('sgac/js/jquery-ui.js') }}"></script>
<script src="{{ asset('sgac/fontawesome/js/all.js') }}"></script>
<script src="{{ asset('sgac/js/scripts.min.js') }}"></script>
@stack('scripts')
</body>
</html>
