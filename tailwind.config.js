/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {},
    },
    plugins: [],
    safelist: [
        {
            pattern: /from-(purple|fuchsia|blue)-(400|500)/,
        },
        {
            pattern: /via-(blue|cyan|indigo|pink)-(400|500)/,
        },
        {
            pattern: /to-(blue|cyan|indigo|pink)-(400|500)/,
        },
    ],
};
