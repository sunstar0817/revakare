<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1>編集画面</h1>
        <div class="content">
         <form action="/posts/{{ $post->id}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="content_title">
                <h2>title</h2>
                <input type="text" name="post[title]" value="{{ $post->title }}"/>
            </div>
            <div class="content_body">
                <h2>body</h2>
                <input type="text" name="post[body]" value="{{ $post->body }}"/>
            </div>
                <input type="submit" value="store"/>
         </form>
        </div>
    </body>
</html>
