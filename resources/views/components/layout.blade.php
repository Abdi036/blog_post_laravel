<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog_Post</title>
</head>
<body>
    <h1>Welcome to Blog_Post</h1>
    <a href="/blogs">All Blogs</a>
    <a href="/blogs/create">Create Blog</a>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
