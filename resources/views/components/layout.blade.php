<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  <title>BlogSpace</title>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-white min-h-screen">
  @if(session('success'))
    <div 
      id="success-message" 
      class="bg-green-400 text-center text-white font-bold p-4 shadow max-w-[100%] mx-auto"
    >
      <i class="fa-solid fa-circle-check mr-2"></i>
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
      <h1 class="text-3xl font-bold text-black mb-2 md:mb-0">
        <i class="fa-solid fa-blog mr-2"></i>BlogSpace
      </h1>
    </a>

    @guest
      <div class="space-x-4">
        <a 
        href="{{ route('show.login') }}"
        class="bg-black text-white font-bold py-2 px-6 rounded shadow transition duration-200 cursor-pointer hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
        >
        <i class="fa-solid fa-right-to-bracket mr-2"></i>Sign In
      </a>
      <a 
        href="{{ route('show.signup') }}"
        class="bg-black text-white font-bold py-2 px-6 rounded shadow transition duration-200 cursor-pointer hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400"
      >
        <i class="fa-solid fa-user-plus mr-2"></i>Sign Up
      </a>
      </div>
    @endguest

    @auth
      <div class="space-x-4">
        <span>
          <i class="fa-solid fa-user mr-1"></i>
          Hello, {{ explode(' ', auth()->user()->name)[0] }}
        </span>| &nbsp; 
        <a href="{{ route('blogs.create') }}" class="text-blue-500 hover:underline font-semibold">
          <i class="fa-solid fa-plus mr-1"></i>Create Blog
        </a>
        <form action="{{ route('signout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 cursor-pointer">
            <i class="fa-solid fa-right-from-bracket mr-2"></i>Sign Out
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