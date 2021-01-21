<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel-base-crud</title>
    </head>
    <body>
        @include('partials.header')
        @yield('content')
    </body>
</html>
