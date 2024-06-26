// webpack.mix.js

let mix = require('laravel-mix');

mix.disableSuccessNotifications();

// Compile
mix.js('src/js/main.js', 'js')
.js('src/js/cookies.js', 'js')
.sass('src/scss/main.scss', 'css')
.sass('src/scss/bootstrap.scss', 'css')
.sass('src/scss/views/landing.scss', 'css')
.sass('src/scss/views/privacy-policy.scss', 'css')
.setPublicPath('assets');

// Copy bootstrap-icons module
mix.copy('node_modules/bootstrap-icons/font/', 'assets/fonts/bootstrap-icons');