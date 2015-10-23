var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    "jquery": './vendor/components/jquery/',
    "bootstrap": './node_modules/bootstrap-sass/assets/',
    "scroll": './node_modules/jquery-smooth-scroll/',
    "animate": './vendor/components/animate.css/',
    "css": './public/css/',
    "fonts": './public/fonts/'
    //http://bythebutterfly.com/shop.php
};

elixir(function (mix) {
    mix
        .sass([
            'app.scss'
        ])
        .styles([
            paths.animate + 'animate.css',
            paths.css + 'app.css'
        ])
        .scripts([
            paths.jquery + 'jquery.min.js',
            paths.bootstrap + 'javascripts/bootstrap.min.js',
            paths.scroll + 'jquery.smooth-scroll.min.js',
            'app.js'
        ])
        .copy(
            './resources/assets/fonts',
            paths.fonts
        )
        .version([
            'css/all.css',
            'js/all.js'
        ]);
});