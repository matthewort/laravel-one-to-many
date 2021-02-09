const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .browserSync({
        //questo browserSync fa in modo che quando lancio i terminali, l'npm run watch eseguirà dei procedimenti aggiuntivi, una volta fatto lo rilanciamo di nuovo. Fatto questo scriviamo localhost:3000 invece di 8000 nell'URL, e questo farà in modo che quando salviamo si aggiorni automaticamente l'output del front-end su browser senza che riaggiorniamo la pagina
        proxy: "127.0.0.1:8000",
        notify: false,
        open: false
    });
