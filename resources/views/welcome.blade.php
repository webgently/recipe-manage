<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Mulish:wght@500&display=swap"
            rel="stylesheet"
        />

        <title>Recipe manage</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-50 dark:bg-gray-900 min-h-100vh scrollbar-thin scrollbar-thumb-stone-800 scrollbar-track-slate-600">
        <div id="app"></div>
        @vite('resources/js/app.js')
    </body>
</html>
