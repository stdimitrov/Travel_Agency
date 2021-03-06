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
    .sass('resources/sass/app.scss', 'public/css')
    //.sass('resources/sass/parts.scss', 'public/css')
    .sass('resources/sass/usersPages.scss', 'public/css')
    .sass('resources/sass/adminsPages.scss', 'public/css')
    // .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();


/*
// Multiple sass files
mix.sass('resources/sass/style.scss', 'public/css');
   .sass('resources/sass/app.scss', 'public/css');
 */
