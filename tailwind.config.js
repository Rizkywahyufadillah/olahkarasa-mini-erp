/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#e6f8ff',
                    100: '#ccf0ff',
                    200: '#99e1ff',
                    300: '#66d2ff',
                    400: '#33c3ff',
                    500: '#00A3FF',  // Base primary
                    600: '#0085cc',
                    700: '#006699',
                    800: '#004766',
                    900: '#002933',
                }
            },
            borderColor: theme => ({
                ...theme('colors'),
                primary: theme('colors.primary.500'),
            }),
            ringColor: theme => ({
                ...theme('colors'),
                primary: theme('colors.primary.500'),
            }),
            outline: {
                primary: ['2px solid #00A3FF', '1px'],
            },
            accentColor: theme => ({
                ...theme('colors'),
                primary: theme('colors.primary.500'),
            }),
            spacing: {
                '72': '18rem',
            },
        },
    },
    plugins: [],
}