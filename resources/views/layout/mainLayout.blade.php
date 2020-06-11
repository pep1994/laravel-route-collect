<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/app.css') }}">
    </head>
    <body>
        @include('components.header')

        <main>
            @yield('content')
        </main>

        @include('components.footer')

        <script src="{{ url('js/app.js') }}"></script>
    </body>
</html>
