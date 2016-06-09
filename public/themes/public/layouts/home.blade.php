<!DOCTYPE html>
<html class="lockscreen">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Theme::getTitle() }}</title>
        <meta name="description" content="The Lavalite Content Management System">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
        <link href="{{ asset(elixir('css/vendor_public.css')) }}" rel="stylesheet">

        {!! Theme::asset()->styles() !!}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {!! Theme::asset()->scripts() !!}
        <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
    </head>

<body class="home">


    {!! Theme::content() !!}
    {!! Theme::partial('footer') !!}
    <script src="{{ asset(elixir('js/vendor_public.js')) }}"></script>
    <script src="{{ asset('js/public.js') }}"></script>
    <script src="{{ asset('js/responsive-calendar.js') }}"></script>
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>
</html>