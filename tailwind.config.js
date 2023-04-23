const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
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
