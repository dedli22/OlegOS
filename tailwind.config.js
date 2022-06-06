const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            
            backgroundImage: {
                'Forest=Fog': "url('/css/images/header/forest-fog6.jpg')"
            },

            colors: {
                'Black-opticaly-08': 'rgba(5, 4, 4, 0.8)',
              },         
        },
    },

    plugins: [
        require("@tailwindcss/forms"),

    ],
};
