module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "utb-blue": "#0772ba",
                "utb-green": "#00a651",
            },
        },
        fontFamily: {
            spartan: ["Spartan", "sans-serif"],
            lato: ["Lato", "sans-serif"],
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
};