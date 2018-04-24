let mix = require('laravel-mix');

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

mix.scripts([
    'node_modules/mdbootstrap/js/jquery-3.2.1.min.js',
    'node_modules/mdbootstrap/js/popper.min.js',
    'node_modules/mdbootstrap/js/bootstrap.min.js',
    'node_modules/mdbootstrap/js/mdb.min.js',
    'node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js',
], 'public/build/js/app.js');

mix.styles([
    'node_modules/mdbootstrap/css/bootstrap.min.css',
    'node_modules/mdbootstrap/css/mdb.min.css',
    'node_modules/jquery-datetimepicker/build/jquery.datetimepicker.min.css',
    'resources/assets/css/app.css',
    'node_modules/font-awesome/css/font-awesome.min.css',
], 'public/build/css/app.css');

mix.copyDirectory('node_modules/mdbootstrap/font', 'public/build/font');
mix.copyDirectory('node_modules/mdbootstrap/img', 'public/build/img');
mix.copyDirectory('node_modules/font-awesome/fonts', 'public/build/fonts');
