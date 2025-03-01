import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    // darkMode: "class",
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
        'node_modules/@preline/*.js',
        'node_modules/@popperjs/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                // 'best-blue': '#030712',
                // 'best-blue-sec': '#070C1A',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.ubuntu],
                ubuntu: ["Ubuntu", "sans-serif"], // Font tambahan
            },
        },
    },
    plugins: [
        require('preline/plugin'),
    ],
};
