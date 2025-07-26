<x-layout>
  <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center pb-5">Latest Blog Insights</h1>

  <ul class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach($blogs as $blog)
      <li class="list-none">
        <x-card href="/blogs/{{ $blog->id }}">
          <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $blog->title }}</h3>
          
          <div class="flex items-center text-sm text-gray-500 mb-2 space-x-4">
            <span class="flex items-center space-x-1">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                <circle cx="12" cy="7" r="4" />
              </svg>
              <span>{{ $blog->user->name }}</span>
            </span>
            <span class="flex items-center space-x-1">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h8M8 11h8m-6 4h6"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19v-8" />
              </svg>
              <span>{{ $blog->created_at->format('n/j/Y') }}</span>
            </span>
          </div>

          <p class="text-gray-600 mb-4 line-clamp-2">
            {{ Str::limit($blog->content, 150) }}
          </p>
        </x-card>
      </li>
    @endforeach
  </ul>

  <div class="mt-6">
    {{ $blogs->links() }}
  </div>
</x-layout>
