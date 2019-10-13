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

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/jquery.min.js', 'public/js')
    .js('resources/js/popper.min.js', 'public/js')
    .js('resources/js/bootstrap.min.js', 'public/js')
    .js('resources/js/custom_app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/bootstrap.min.css', 'public/css')
    .css('resources/css/custom_app.css', 'public/css')
;
