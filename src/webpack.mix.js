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
], 'public/build/js/app.js');

mix.styles([
    'node_modules/mdbootstrap/css/bootstrap.min.css',
    'node_modules/mdbootstrap/css/mdb.min.css',
    'resources/assets/css/app.css',
], 'public/build/css/app.css');

mix.copyDirectory('node_modules/mdbootstrap/font', 'public/build');
mix.copyDirectory('node_modules/mdbootstrap/img', 'public/build');
