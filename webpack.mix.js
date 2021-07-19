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

 mix.js('resources/js/app.js', 'public/js')
 .postCss('resources/css/app.css', 'public/css', [
     //
 ])
    mix.styles('resources/css/animate.css', 'public/css/animate.css')
    mix.styles('resources/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    mix.styles('resources/css/color.css', 'public/css/color.css')
    mix.styles('resources/css/customScrollbar.css', 'public/css/customScrollbar.css')
    mix.styles('resources/css/font-awesome.min.css', 'public/css/font-awesome.css')
    mix.styles('resources/css/icomoon.css', 'public/css/icomoon.css')
    mix.styles('resources/css/jquery-ui.css', 'public/css/jquery-ui.css')
    mix.styles('resources/css/main.css', 'public/css/main.css')
    mix.styles('resources/css/normalize.css', 'public/css/normalize.css')
    mix.styles('resources/css/owl.carousel.css', 'public/css/owl.carousel.css')
    mix.styles('resources/css/owl.theme.css', 'public/css/owl.theme.css')
    mix.styles('resources/css/prettyPhoto.css', 'public/css/prettyPhoto.css')
    mix.styles('resources/css/responsive.css', 'public/css/responsive.css')
    mix.styles('resources/css/swiper.min.css', 'public/css/swiper.min.css')
    mix.styles('resources/css/transitions.css', 'public/css/transitions.css')
