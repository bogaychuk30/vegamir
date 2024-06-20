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

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);

mix.styles([
    'resources/assets/verwaltung/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/verwaltung/plugins/select2/css/select2.css',
    'resources/assets/verwaltung/plugins/select2-bootstrap4-theme/select2-bootstrap4.css',
    'resources/assets/verwaltung/css/adminlte.min.css'
], 'public/assets/verwaltung/css/admin.css');

mix.scripts([
    'resources/assets/verwaltung/plugins/jquery/jquery.min.js',
    'resources/assets/verwaltung/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/verwaltung/plugins/select2/js/select2.full.js',
    'resources/assets/verwaltung/js/adminlte.min.js',
    'resources/assets/verwaltung/js/post.js'
], 'public/assets/verwaltung/js/admin.js');

mix.copyDirectory('resources/assets/verwaltung/img', 'public/assets/verwaltung/img');
mix.copyDirectory('resources/assets/verwaltung/plugins/fontawesome-free/webfonts', 'public/assets/verwaltung/webfonts');

mix.copy('resources/assets/verwaltung/css/adminlte.min.css.map', 'public/assets/verwaltung/css/adminlte.min.css.map');

mix.styles([
    'resources/assets/front/css/bootstrap.css',
    'resources/assets/front/css/font-awesome.min.css',
    'resources/assets/front/style.css',
    'resources/assets/front/css/animate.css',
    'resources/assets/front/css/responsive.css',
    'resources/assets/front/css/colors.css',
    'resources/assets/front/css/version/marketing.css'
], 'public/assets/front/css/front.css');

mix.scripts([
    'resources/assets/front/js/jquery.min.js',
    'resources/assets/front/js/tether.min.js',
    'resources/assets/front/js/bootstrap.min.js',
    'resources/assets/front/js/animate.js',
    'resources/assets/front/js/custom.js',
], 'public/assets/front/js/front.js');

mix.copyDirectory('resources/assets/front/fonts', 'public/assets/front/fonts');
mix.copyDirectory('resources/assets/front/images', 'public/assets/front/images');
mix.copyDirectory('resources/assets/front/upload', 'public/assets/front/upload');