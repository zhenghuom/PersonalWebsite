const { mix } = require('laravel-mix');

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
    .js('resources/assets/js/admin/Chart.js', 'public/js/admin')
    .js('resources/assets/js/admin/clndr.js', 'public/js/admin')
    .js('resources/assets/js/admin/custom.js', 'public/js/admin')
    .js('resources/assets/js/admin/d3.v3.js', 'public/js/admin')

    // .js('resources/assets/js/admin/jquery.vmap.js', 'public/js/admin')
    // .js('resources/assets/js/admin/jquery.vmap.world.js', 'public/js/admin')
    .js('resources/assets/js/admin/jquery.vmap.sampledata.js', 'public/js/admin')

    .js('resources/assets/js/admin/metisMenu.js', 'public/js/admin')
    .copy('resources/assets/js/admin/rickshaw.js', 'public/js/admin')
    .js('resources/assets/js/admin/site.js', 'public/js/admin')
    //.version()
    .less('resources/assets/css/admin/style.less', 'public/css/admin')
    .less('resources/assets/css/admin/font-awesome.less', 'public/css/admin')
    .less('resources/assets/css/admin/clndr.less', 'public/css/admin')
    .less('resources/assets/css/admin/custom.less', 'public/css/admin')
    .less('resources/assets/css/admin/jqvmap.less', 'public/css/admin')
    .less('resources/assets/css/admin/lines.less', 'public/css/admin')
    .copy('resources/assets/img/*', 'public/img')
    .copy('resources/assets/img/admin/*', 'public/img/admin')
    .copy('resources/assets/fonts/*', 'public/fonts')
    //.disableNotifications()
   .sass('resources/assets/sass/app.scss', 'public/css');
