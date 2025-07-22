<x-layout>
  <div class="mb-6">
    <h3 class="text-xl font-semibold text-blue-500 mb-2">{{ $blog->title }}</h3>
      <div class="bg-gray-50 p-4 rounded shadow">
        <p class="text-gray-600 mb-1"><span class="font-semibold text-black">By:  {{ $blog->author }}</span></p>
        <p class="text-gray-700">{{ $blog->content }}</p>
      </div>
  </div>
</x-layout>