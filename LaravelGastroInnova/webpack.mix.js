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

/* ------------------------------------------------------- */
/* --- Imports and Libraries ----------------------------- */
/* ------------------------------------------------------- */
let mix = require("laravel-mix");
let ImageminPlugin = require("imagemin-webpack-plugin").default;
/* ------------------------------------------------------- */

/* ------------------------------------------------------- */
/* --- Config & Settings --------------------------------- */
/* ------------------------------------------------------- */
mix.webpackConfig({
  plugins: [
    new ImageminPlugin({
      //            disable: process.env.NODE_ENV !== 'production', // Disable during development
      pngquant: {
        quality: "95-100"
      },
      test: /\.(jpe?g|png|gif|svg)$/i
    })
  ]
});
mix.disableSuccessNotifications();
/* ------------------------------------------------------- */

/* ------------------------------------------------------- */
/* --- Config & Settings --------------------------------- */
/* ------------------------------------------------------- */
mix.copy("resources/images", "public/images", false);
/* ------------------------------------------------------- */

/* ------------------------------------------------------- */
/* --- Bundling,Compiling and Minifying CSS -------------- */
/* ------------------------------------------------------- */
mix.less("resources/styles/config.less", "public/css", false);
mix.less("resources/styles/layout.less", "public/css", false);
mix.less("resources/styles/theme.less", "public/css", false);
mix.less("resources/styles/views.less", "public/css", false);
mix.less("resources/styles/animations.less", "public/css", false);
mix.less("resources/styles/components.less", "public/css", false);

mix.minify("public/css/config.css");
mix.minify("public/css/layout.css");
mix.minify("public/css/theme.css");
mix.minify("public/css/views.css");
mix.minify("public/css/animations.css");
mix.minify("public/css/components.css");

mix.js("resources/scripts/vApp.js", "public/js");

/* ------------------------------------------------------- */

/*
mix
  .less("resources/styles/main.less", "public/css")
  .sass("resources/assets/sass/app.scss", "public/css")
  .js("resources/scripts/main.js", "public/js")
  .js("resources/scripts/_preload.js", "public/js")
  .js("resources/scripts/_ui.js", "public/js");
*/
