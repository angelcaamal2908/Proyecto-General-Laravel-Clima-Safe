const mix = require('laravel-mix');

// Compilación del archivo CSS con Tailwind CSS
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

// Compilación de JavaScript (si es necesario)
mix.js('resources/js/app.js', 'public/js');

