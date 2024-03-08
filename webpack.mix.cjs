const mix = require("laravel-mix");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");

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

// Webpack plugins
mix.webpackConfig({
    plugins: [
        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: ["css/", "fonts/", "images/", "js/"],
            verbose: true,
        }),
    ],
    stats: {
        children: true,
    }
});

// Disable notification
mix.disableNotifications();

// Production mode
if (mix.inProduction()) {
    mix.version();
}

// Application
mix.js("resources/js/app.js", "public/js")
    .js("resources/js/bootstrap.js", "public/js")
    .js("resources/js/home_page.js", "public/js")
    .js("resources/js/studio_page.js", "public/js")
    .js("resources/js/admin_page.js", "public/js")
    .sass("resources/css/app.scss", "public/css")
    .copyDirectory("resources/assets", "public/assets");

