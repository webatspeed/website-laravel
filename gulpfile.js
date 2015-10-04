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
    "jquery": '../../../vendor/components/jquery/',
    "bootstrap": '../../../node_modules/bootstrap-sass/assets/',
    "animate": '../../../vendor/components/animate.css/',
    "css": '../../../public/css/'
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
            paths.bootstrap + "javascripts/bootstrap.min.js",
            'app.js'
        ])
        .version([
            'css/all.css',
            'js/all.js'
        ]);
});