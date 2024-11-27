import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'custom-gray' : 'rgb(55, 55, 55)',
                'custom-bg' : 'rgb(32, 32, 32)',
                'custom-text' : 'rgb(48, 198, 65)',
            },

            fontFamily: {
                lalezar: ['Lalezar', 'system-ui'],
                poppins: ['Poppins', 'sans-serif'],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans]
            },
        },
    },
    plugins: [],
};
