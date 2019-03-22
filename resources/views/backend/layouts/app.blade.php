<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
</head>
<body>
    <div id="backend">
        @include('backend.layouts.partials.sidebar')
        <div class="overlay"></div>
        @include('backend.layouts.partials.navbar')
        <main id="backend-content">
        	<div class="container-fluid">@yield('content')</div>
        </main>
        @include('backend.layouts.partials.footer')
    </div>
    <script src="{{ asset('js/backend.js') }}"></script>
</body>
</html>
