import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'h1': ['Palanquin', 'sans-serif'],
                'h2':['Quicksand', 'sans-serif'],
                'p':['Roboto', 'sans-serif']
            },
            
            colors: {
                'carribean' : '#115E59',
                'mint' : '#62A87C',
                'smocky-black' : '#1B1714',
                'peach' : '#FFE6A7',
                'seasalt' : '#FAFAFA'

            },
        },
    },

    plugins: [forms, typography],
};
