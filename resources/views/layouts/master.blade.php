<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
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
        <link rel="stylesheet" type="text/css" href="{{ elixir("css/app.css") }}">
        <script src="{{ elixir("js/all.js") }}"></script>
    </head>
    <body>
        <div class="wrap">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Web at Speed</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Dev <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Start-Up</a></li>
                            <li><a href="#">Devices</a></li>
                            <li><a href="#">Usability</a></li>
                            <li><a href="#">Customers</a></li>
                            <li><a href="#">Headhunters</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
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