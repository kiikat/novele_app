const mix = require('laravel-mix');

mix.js('js/app.js', 'dist')
   .css('css/home.css', 'dist')
   .setPublicPath('dist');
