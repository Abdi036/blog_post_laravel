<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blog Posts</h1>
    <ul>
        @foreach($data as $blog)
            <li>
                <h2>{{ $blog['title'] }}</h2>
                <p>{{ $blog['content'] }}</p>
                <a href="/blogs/{{ $blog['id'] }}">Read more</a>
            </li>
        @endforeach
</body>
</html>