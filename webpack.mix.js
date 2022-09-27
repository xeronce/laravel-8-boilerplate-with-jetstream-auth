const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
// import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
// import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";

mix.setResourceRoot('/public');

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css')
    .sass('resources/css/stylesheet.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });
if (mix.inProduction()) {
    mix.version();
} else {
    mix.browserSync('127.0.0.1:8000');
    mix.disableNotifications();
}
