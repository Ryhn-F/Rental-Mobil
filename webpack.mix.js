const mix = require("laravel-mix");

// Compile both CSS files
mix.postCss("resources/css/app.css", "public/css").postCss(
    "resources/css/LoginForm.css",
    "public/css"
);
