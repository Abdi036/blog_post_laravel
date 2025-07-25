<!-- Add Alpine.js for inline editing -->
<script src="//unpkg.com/alpinejs" defer></script>
<x-layout>
  <div x-data="{ editing: false, title: '{{ addslashes($blog->title) }}', author: '{{ addslashes($blog->author) }}', content: `{{ addslashes($blog->content) }}` }" class="mb-6">
    <template x-if="!editing">
      <div>
        <h3 class="text-xl font-bold text-black mb-2" x-text="title"></h3>
        <div class="bg-gray-50 p-4 rounded shadow">
          <p class="text-gray-600 mb-1"><span class="font-semibold text-black">By: </span>{{ $blog->user->name }}</p>
          <p class="text-gray-700 whitespace-pre-line" x-text="content"></p>
        </div>

        @if(auth()->check() && auth()->id() === $blog->user_id)
        <div class="flex gap-3 mt-4">
          <button @click="editing = true"
            class="bg-blue-400 px-4 py-2 rounded-2xl text-white cursor-pointer font-semibold hover:bg-blue-500 transition">Edit</button>
          <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
            <button type="submit"
              class="bg-red-400 px-4 py-2 rounded-2xl text-white cursor-pointer font-semibold hover:bg-red-600 transition">Delete Blog</button>
          </form>
        </div>
        @endif
        
      </div>
    </template>
    <template x-if="editing">
      <form method="POST" action="{{ route('blogs.update', $blog->id) }}" class="bg-gray-50 p-4 rounded shadow space-y-4 mt-2">
        @csrf
        @method('PATCH')
        <div>
          <label class="block text-gray-700 font-semibold mb-1" for="title">Title</label>
          <input type="text" name="title" id="title" x-model="title"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div>
          <label class="block text-gray-700 font-semibold mb-1" for="author">Author</label>
          <input type="text" name="author" id="author" x-model="author"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div>
          <label class="block text-gray-700 font-semibold mb-1" for="content">Content</label>
          <textarea name="content" id="content" rows="6" x-model="content"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
        </div>
        <div class="flex gap-3 justify-end">
          <button type="button" @click="editing = false"
            class="bg-gray-300 px-4 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-400 transition">Cancel</button>
          <button type="submit"
            class="bg-green-500 px-4 py-2 rounded-lg text-white font-semibold hover:bg-green-600 transition">Save</button>
        </div>
      </form>
    </template>
  </div>
</x-layout>