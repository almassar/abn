const mix = require('laravel-mix');

let pathBuild = 'public/build/developer';

mix.extract(['vue', 'axios', '@fortawesome/fontawesome-free/js/all']);

if (mix.inProduction()) {
    pathBuild = 'public/build';
}

mix.js('resources/js/site.js',   pathBuild);
mix.js('resources/js/admin.js', pathBuild);

mix.sass('resources/sass/vendor.scss', pathBuild).options({processCssUrls: false});
mix.sass('resources/sass/site.scss',    pathBuild).options({processCssUrls: false});
mix.sass('resources/sass/admin.scss',  pathBuild).options({processCssUrls: false});

