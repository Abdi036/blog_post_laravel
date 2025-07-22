<x-layout>
  <h2 class="text-2xl font-bold text-gray-800 mb-6">Currently Available Blogs</h2>
  <ul>
    @foreach($blogs as $blog)
      <li class="list-none">
        <x-card :highlight="$blog->author == 'John Doe'" href="/blogs/{{$blog->id}}">
          <h3 class="text-xl font-semibold text-gray-700 mb-1">{{ $blog->title }}</h3>
          <p class="text-gray-600 text-sm">By {{ $blog->author }}</p>
        </x-card>
      </li>
    @endforeach
  </ul>
  {{ $blogs->links() }}
</x-layout>