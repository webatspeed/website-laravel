var elixir = require('laravel-elixir');
var env = elixir.config.production ? 'prod' : 'dev';
var paths = {
    css: {
        animate: './vendor/components/animate.css/animate.css',
        public: './public/css/app.css'
    },
    fonts: {
        fa: './node_modules/font-awesome/fonts',
        public: './public/fonts/vendor'
    },
    js: {
        angular: './node_modules/angular/angular.js',
        env: elixir.config.get('assets.js.folder') + '/env/',
        jquery: './vendor/components/jquery/jquery.js',
        bootstrap: './node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
        scroll: './node_modules/jquery-smooth-scroll/jquery.smooth-scroll.js',
        vendor: elixir.config.get('assets.js.folder') + '/vendor/'
    },
    sass: {
        bootstrap: './node_modules/bootstrap-sass/assets/stylesheets',
        env: elixir.config.get('assets.css.sass.folder') + '/env/',
        fa: './node_modules/font-awesome/scss/*.scss',
        vendor: elixir.config.get('assets.css.sass.folder') + '/vendor/'
    }
};

elixir(function (mix) {
    mix
        .copy(paths.fonts.fa, paths.fonts.public)
        .copy(paths.sass.env + '_variables-' + env + '.scss', paths.sass.vendor + '_variables.scss')
        .copy(paths.sass.bootstrap, paths.sass.vendor)
        .copy(paths.sass.fa, paths.sass.vendor + 'font-awesome')
        .copy(paths.js.env + 'variables-' + env + '.js', paths.js.vendor + 'variables.js')
        .sass(['app.scss'])
        .styles([paths.css.animate, paths.css.public])
        .scripts([
            paths.js.jquery, paths.js.angular, paths.js.bootstrap, paths.js.scroll,
            'vendor/variables.js', 'jquery/app.js', 'angular/app.js']
        )
        .version([
            elixir.config.get('public.css.outputFolder') + '/all.css',
            elixir.config.get('public.js.outputFolder') + '/all.js'
        ]);
});
