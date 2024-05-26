import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'custom-gradient': 'linear-gradient(90deg, rgba(127, 189, 228, 0.6) 3.42%, #F6AD2B 51.37%, rgba(127, 189, 228, 0.82) 104.79%)',
              },
        },
    },

    plugins: [forms],
};
