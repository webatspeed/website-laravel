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
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url("img/favicon/android-icon-192x192.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url("img/favicon/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url("img/favicon/favicon-96x96.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url("img/favicon/favicon-16x16.png") }}">
    <link rel="manifest" href="{{ url("img/favicon/manifest.json") }}">
    <link rel="stylesheet" type="text/css" href="{{ elixir("css/all.css") }}">
    <script src="{{ elixir("js/all.js") }}"></script>
</head>
<body>

<svg class="hidden" xmlns="http://www.w3.org/2000/svg">
    <symbol id="shape-arrow-down" viewBox="288.1 406.4 19 29">
        <g>
            <polygon class="st0" points="297.6,433.9 291.1,427.4 292.6,426 297.6,431 302.6,426 304,427.4"></polygon>
            <rect x="296.6" y="401" class="st0" width="2" height="30"></rect>
        </g>
    </symbol>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150" height="115"
     viewBox="0 0 150 115" preserveAspectRatio="xMidYMid meet" class="hidden">
    <g id="shape-arrow-up">
        <rect id="svgEditorBackground" x="0" y="0" width="150" height="115"></rect>
        <path d="M7.754236221313477,10.100153923034668a140.25564575195312,140.25564575195312,0,0,1,137.50384521484375,101.00154113769531"
              stroke="#CFF09E" id="e5_circleArc"></path>
        <line id="e6_line" x1="7.75423" y1="9.9229" x2="25.1194" y2="22.8582" stroke="#CFF09E"></line>
        <line id="e7_line" x1="7.754236347686344" y1="10.100154083204933" x2="28.66332725677725"
              y2="1.5947611710323581" stroke="#CFF09E"></line>
    </g>
</svg>

<nav class="wrap navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                {!! Html::image("img/logo_transparent.png", 'Web at Speed') !!}
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dev <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Start-Up</a></li>
                <li><a href="#">Devices</a></li>
                <li><a href="#">Usability</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Headhunters</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="dropdown pull-right">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                    Login
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li>
                        <a href="#">with Facebook</a>
                    </li>
                    <li>
                        <a href="#">with Google</a>
                    </li>
                    <li>
                        <a href="#">with Twitter</a>
                    </li>
                    <li>
                        <a href="#">with Xing</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="#">with Email</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="wrap" id="splash">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 animated bounceInDown" id="logo">
                {!! Html::image("img/logo_transparent.png") !!}
            </div>
            <div class="col-md-4 text-left arrow-up animated fadeIn">
                <svg>
                    <use xlink:href="#shape-arrow-up"></use>
                </svg>
                <br/>
                <span class="scribbled-note rotate">
                    A Faster Way for Your<br/>
                    Web and Mobile Applications
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 animated fadeIn delay-3">
                <div class="arrow-down bounce">
                    <span class="scribbled-note">
                        scroll down
                    </span>
                    <br/>
                    <a href="#">
                        <svg>
                            <use xlink:href="#shape-arrow-down"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<main>
    @yield('content')
</main>
<footer class="wrap footer">
    <div class="container text-center">
        The current UNIX timestamp is {{ time() }}.
    </div>
</footer>
</body>
</html>