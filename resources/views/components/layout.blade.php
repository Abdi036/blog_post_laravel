<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Blog_Post</title>
</head>
<body class="bg-gray-100 min-h-screen">
  @if(session('success'))
    <div 
      id="success-message" 
      class="bg-green-400 text-center text-white font-bold p-4 shadow max-w-[100%] mx-auto"
    >
        {{ session('success') }}
    </div>
    <script>
      setTimeout(function() {
        var msg = document.getElementById('success-message');
        if (msg) msg.style.display = 'none';
      }, 3500);
    </script>
  @endif
   <div class="bg-white shadow-md py-6 px-4 mb-8 flex flex-col md:flex-row items-center justify-between">
    <a href="/">
       <h1 class="text-3xl font-bold text-black mb-2 md:mb-0">Welcome</h1>
     </a>
    </a>
     <div class="space-x-4">
       <a href="/blogs" class="text-blue-500 hover:underline font-semibold">All Blogs</a>
       <a href="/blogs/create" class="text-blue-500 hover:underline font-semibold">Create Blog</a>
       <a href="/signup" 
              class="bg-black text-white font-bold py-2 px-6 rounded shadow transition duration-200 cursor-pointer hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400">
              SignUp
        </a>
       <a href="/signin" 
              class="bg-black text-white font-bold py-2 px-6 rounded shadow transition duration-200 cursor-pointer hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400">
              SignIn
        </a>
     </div>
   </div>
    <main class="max-w-[90%] mx-auto p-4 bg-white rounded shadow">
        {{ $slot }}
    </main>
</body>
</html>
