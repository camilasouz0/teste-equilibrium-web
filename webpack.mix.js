const mix = require('laravel-mix');

mix

    // js
    .js("resources/js/site.js", "public/js")

    // Sass
    .sass("resources/sass/global.scss", "public/css/app.css")
    .sass("public/scss/extras.scss", "public/css/extras.css")

    .styles(
        ["public/css/app.css", "public/css/extras.css"],
        "public/css/all.css"
    )
    .options({
        autoprefixer: {
            options: {
                browsers: ["last 40 versions"],
                grid: true,
            },
        },
    })

    .webpackConfig({
        stats: {
            children: true,
        },
    })

    // Fast Refresh
    .browserSync("http://localhost:8000");
