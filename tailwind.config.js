/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php",  "./node_modules/flowbite/**/*.js","./vendor/awcodes/filament-tiptap-editor/resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#f3983a",
                },
                secondary: {
                    400: "#336647",
                },

                fontLight: "#ffffff",
                fontDark: "#222",
            },
            fontFamily: {
                heading: ["Montserrat", "sans-serif"],
                text: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography"),  require('flowbite/plugin')],
};
