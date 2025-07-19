<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Blog_Post</title>
</head>
<body class="bg-gray-100 min-h-screen">
   <div class="bg-white shadow-md py-6 px-4 mb-8 flex flex-col md:flex-row items-center justify-between">
    <a href="/">
     <h1 class="text-3xl font-bold text-blue-700 mb-2 md:mb-0">Welcome to Blog_Post</h1>
    </a>
     <div class="space-x-4">
       <a href="/blogs" class="text-blue-600 hover:underline font-semibold">All Blogs</a>
       <a href="/blogs/create" class="text-green-600 hover:underline font-semibold">Create Blog</a>
     </div>
   </div>
    <main class="max-w-3xl mx-auto p-4 bg-white rounded shadow">
        {{ $slot }}
    </main>
</body>
</html>
