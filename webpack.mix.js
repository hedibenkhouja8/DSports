const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
    mix.styles([
        'public/css/app.css',
        'resources/css/c.css',
        'resources/css/card.css',
        'resources/css/main.css',
        'resources/css/main1.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/responsive.css',
        'resources/css/style.css',
        'resources/css/util.css',
        'resources/css/bootstrap.min.css',
        'resources/css/bootstrap.min.css.map',
        
    ], 'public/css/all.css');
    mix.scripts([
        'resources/js/bootstrap.bundle.js',
        'resources/js/bootstrap.bundle.js.map',
        'resources/js/bootstrap.bundle.min.js.map',
        'resources/js/bootstrap.js',
        'resources/js/bootstrap.js.map',
        'resources/js/bootstrap.min.js',
        'resources/js/bootstrap.min.js.map',
        'resources/js/custom.js',
        'resources/js/jquery.mCustomScrollbar.concat.min.js',
        'resources/js/jquery.min.js',
        'resources/js/main.js',
        'resources/js/main2.js',
        'resources/js/map-custom.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/popper.min.js',
        'resources/js/modal.js',
        'resources/js/jquery-3.0.0.min.js',
        'resources/js/jquery-3.5.1.min.js',

    ], 'public/js/all.js');
