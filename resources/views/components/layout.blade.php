<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='/css/app.css' />

        <title>Laravel</title>      
    </head>
    <body class="antialiased container mx-auto">
        <h1 class='uppercase blog-title'>Swayam's Blog<h1>
       
           {{ $slot }}
    </body>
</html>
