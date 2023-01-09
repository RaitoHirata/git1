const mix = require('laravel-mix');

mix.setResourceRoot('dist');

mix.js('src/js/app.js', 'dist/js');

mix
  .sass('src/scss/app.scss', 'dist/css/')
  .options({
    processCssUrls: false,
    autoprefixer: {
      options: {
        grid: true,
      }
    },
  });

mix.js( 'resources/js/app.js', 'public/js' ).js( 'resources/js/layout.js', 'public/js' ).postCss( 'resources/css/app.css', 'public/css', [
  require( 'postcss-import' ),
  require( 'tailwindcss' ),
  require( 'autoprefixer' ),
] );