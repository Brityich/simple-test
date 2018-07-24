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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.sass('resources/assets/sass/admin/sb-admin.scss', 'public/css/admin/app.css');

/*mix.js([
    'resources/assets/js/admin/jquery.min.js',
    'resources/assets/js/admin/jquery.easing.min.js',
    'resources/assets/js/admin/jquery.dataTables.js',
    'resources/assets/js/admin/bootstrap.bundle.min.js',
    'resources/assets/js/admin/Chart.min.js',
    'resources/assets/js/admin/sb-admin.min.js',
    'resources/assets/js/admin/sb-admin-charts.min.js',
    'resources/assets/js/admin/sb-admin-datatables.min.js',
    'resources/assets/js/admin/dataTables.bootstrap4.js',
], 'public/js/admin/app.js');*/