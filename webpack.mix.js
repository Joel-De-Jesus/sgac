const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/sgac/js/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/sgac/js/bootstrap.js')
    .css('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/sgac/css/bootstrap.css');
