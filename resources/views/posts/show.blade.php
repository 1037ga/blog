<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blogs</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    
    <body class='antialiased'>
        <h1 class='title'>{{$post->title}}</h1>
        <p class='body'>{{ $post->body }}</p>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>