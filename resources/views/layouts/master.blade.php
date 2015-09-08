<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ elixir("css/app.css") }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ url("img/favicon/ms-icon-144x144.png") }}">
        <meta name="theme-color" content="#ffffff">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ url("img/favicon/apple-icon-57x57.png") }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ url("img/favicon/apple-icon-60x60.png") }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ url("img/favicon/apple-icon-72x72.png") }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ url("img/favicon/apple-icon-76x76.png") }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ url("img/favicon/apple-icon-114x114.png") }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ url("img/favicon/apple-icon-120x120.png") }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ url("img/faviconapple-icon-144x144.png") }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ url("img/favicon/apple-icon-152x152.png") }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url("img/favicon/apple-icon-180x180.png") }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ url("img/favicon/android-icon-192x192.png") }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url("img/favicon/favicon-32x32.png") }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ url("img/favicon/favicon-96x96.png") }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url("img/favicon/favicon-16x16.png") }}">
        <link rel="manifest" href="{{ url("img/favicon/manifest.json") }}">
    </head>
    <body>
        <div class="wrap">
            <div class="container-fluid text-center" id="splash">
                {!! Html::image("img/logo_transparent.png") !!}<br/>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center">
                The current UNIX timestamp is {{ time() }}.
            </div>
        </footer>
    </body>
</html>