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

mix.sass('resources/theme/scss/clean-blog.scss', 'public/css')
    .styles([
        'resources/theme/vendor/bootstrap/css/bootstrap.min.css',
        'public/css/clean-blog.css',
    ], 'public/css/app.css')
    .styles([
        'resources/theme/vendor/fontawesome-free/css/all.css'
    ], 'public/css/fontawesome.css')
    .js([
        'resources/theme/js/clean-blog.min.js',
        'resources/theme/js/contact_me.js',
    ], 'public/js/app.js')
    .copy('resources/theme/vendor/jquery/jquery.js', 'public/js/jquery.js')
    .js([
        'resources/theme/js/jqBootstrapValidation.js',
        'resources/theme/vendor/bootstrap/js/bootstrap.min.js',
    ], 'public/js/vendor.js')
    .copyDirectory('resources/theme/img/', 'public/theme/img/')
    .copyDirectory('resources/theme/vendor/fontawesome-free/webfonts', 'public/webfonts/')
    .browserSync({
        proxy: 'wink.test',
        open: false
    });
