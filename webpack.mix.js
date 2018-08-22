let mix = require("laravel-mix");

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

mix
  .less("resources/styles/main.less", "public/css")
  .sass("resources/assets/sass/app.scss", "public/css")
  .js("resources/scripts/main.js", "public/js")
  .js("resources/scripts/_preload.js", "public/js");
