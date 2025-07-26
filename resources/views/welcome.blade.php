@vite('resources/css/app.css')
<x-layout>
     <div class="flex flex-col items-center justify-center min-h-[75vh]">
            <h1 class="text-4xl font-extrabold text-blue-700 mb-4 tracking-tight">Welcome to <span class="text-green-600">BlogSpace</span></h1>
            <p class="text-lg text-gray-600 mb-8 font-bold">
               Discover amazing stories, insights, and news from our community of writers.
            </p>
            <a href="/blogs"
                class="inline-block px-8 py-3 bg-gradient-to-r from-blue-600 to-green-500 text-white text-lg font-semibold rounded-lg shadow-lg hover:from-blue-700 hover:to-green-600 transition-all duration-200">
                Go to Blogs
            </a>
            <div class="mt-8 flex items-center justify-center gap-4">
                <span class="text-gray-400">|</span>
                <span class="text-sm text-gray-500">Start sharing your stories today!</span>
                <span class="text-gray-400">|</span>
            </div>
    </div>
</x-layout>

