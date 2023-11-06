const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
<<<<<<< HEAD
        "./node_modules/flowbite/**/*.js",
    ],
=======
    ],
    darkMode: "class",
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
<<<<<<< HEAD
    plugins: [require("flowbite/plugin")],
=======
>>>>>>> 2b1f10c0a8118b0199632b44cac03f14bfc15c03
};
