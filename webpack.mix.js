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
    .combine([
        "resources/js/lib/jquery.min.js",
        "resources/js/lib/bootstrap.bundle.min.js",
        "resources/js/lib/all.js",
        "resources/js/lib/isotope.pkgd.min.js",
        "resources/js/lib/jquery.magnific-popup.min.js",
        "resources/js/lib/jquery.waypoints.min.js",
        "resources/js/lib/parsley.min.js",
        "resources/js/lib/retina.min.js",
        "resources/js/lib/sticky.min.js",
        "resources/js/lib/swiper.min.js",
    ], "public/js/script.js", "public/js")
    .combine("resources/js/theme/*", "public/js/theme.js", "public/js")
    .styles("resources/css/lib/*", "public/css/lib.css")
    .styles("resources/css/theme/*", "public/css/theme.css")
    .styles("resources/css/main.css", "public/css/style.css")
    .copyDirectory("resources/img", "public/img")
    .copyDirectory("resources/fonts", "public/fonts");