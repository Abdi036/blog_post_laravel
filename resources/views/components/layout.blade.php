<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  <title>Blog_Post</title>
</head>
<body class="bg-white min-h-screen">
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
      <h1 class="text-3xl font-bold text-black mb-2 md:mb-0">Blogs</h1>
    </a>

    @guest
      <div class="space-x-4">
        <a 
        href="{{ route('show.login') }}"
        class="bg-black text-white font-bold py-2 px-6 rounded shadow transition duration-200 cursor-pointer hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
        >
        Sign In
      </a>
      <a 
        href="{{ route('show.signup') }}"
        class="bg-black text-white font-bold py-2 px-6 rounded shadow transition duration-200 cursor-pointer hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
      >
        Sign Up
      </a>
      </div>
    @endguest

    @auth
      <div class="space-x-4">
        <span>Hello, {{ auth()->user()->name }}</span> | &nbsp; 
        <a href="{{ route('blogs.index') }}" class="text-blue-500 hover:underline font-semibold">All Blogs</a>
        <a href="{{ route('blogs.create') }}" class="text-blue-500 hover:underline font-semibold">Create Blog</a>
        <form action="{{ route('signout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
            Sign Out
          </button>
        </form>
      </div>
    @endauth
  </div>

  <main class="max-w-[90%] mx-auto p-4 bg-white">
    {{ $slot }}
  </main>
</body>
</html>
