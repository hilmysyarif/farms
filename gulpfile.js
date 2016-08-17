// require('laravel-elixir-vueify');

var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['front.scss', 'console.scss'], 'public/css/app.css');

    // mix.sass('front.scss');
    // mix.sass('console.scss');
    
    // mix.browserify('front.js');
    // mix.browserify('front-list.js');
    // mix.browserify('console-main.js');
});

// BrowserSync
elixir(function(mix) {
    mix.browserSync({
        proxy: 'demoblog.io'
    });
});