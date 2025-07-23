<x-layout>
  <div class="mb-6">
    <h3 class="text-xl font-semibold text-blue-500 mb-2">{{ $blog->title }}</h3>
      <div class="bg-gray-50 p-4 rounded shadow">
        <p class="text-gray-600 mb-1"><span class="font-semibold text-black">By:  {{ $blog->author }}</span></p>
        <p class="text-gray-700">{{ $blog->content }}</p>
      </div>
  </div>

  <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-400 p-3 rounded-2xl text-white cursor-pointer hover:bg-red-600">Delete Blog</button>
  </form>
</x-layout>