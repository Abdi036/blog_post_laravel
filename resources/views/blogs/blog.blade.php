<!-- Add Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

<x-layout>
  <div
    x-data="{
      editing: false,
      title: '{{ addslashes($blog->title) }}',
      content: `{{ addslashes($blog->content) }}`
    }"
    class="max-w-full mx-auto bg-white border border-gray-200 rounded-lg p-6 shadow"
  >

    <!-- Title + Action Buttons -->
    <div class="flex justify-between items-start mb-4">
      <div>
        <h1 class="text-2xl font-bold text-gray-900" x-text="title"></h1>
        <div class="flex items-center text-sm text-gray-500 mt-1 space-x-3">
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
            <span>{{ $blog->created_at->format('F j, Y') }}</span>
          </span>
        </div>
      </div>

      @if(auth()->check() && auth()->id() === $blog->user_id)
        <div class="flex gap-2">
          <button
            @click="editing = true"
            class="flex items-center gap-1 bg-gray-100 text-gray-700 px-3 py-1.5 rounded-md text-sm font-semibold hover:bg-gray-200 transition cursor-pointer"
          >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 11l3.536-3.536 6.364 6.364L15.364 17.5H9v-6.5z"/>
            </svg>
            Edit
          </button>
          <form
            action="{{ route('blogs.destroy', $blog->id) }}"
            method="POST"
            onsubmit="return confirm('Are you sure?')"
          >
            @csrf
            @method('DELETE')
            <button
              type="submit"
              class="bg-red-500 text-white px-3 py-1.5 rounded-md text-sm font-semibold hover:bg-red-600 transition cursor-pointer"
            >
              Delete
            </button>
          </form>
        </div>
      @endif
    </div>

    <!-- Content -->
    <template x-if="!editing">
      <div class="text-gray-700 leading-relaxed space-y-4">
        <p x-text="content" class="whitespace-pre-line"></p>
      </div>
    </template>

    <!-- Edit Form -->
    <template x-if="editing">
      <form
        method="POST"
        action="{{ route('blogs.update', $blog->id) }}"
        class="space-y-4"
      >
        @csrf
        @method('PATCH')

        <div>
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input type="text" name="title" id="title" x-model="title"
            class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
        </div>

        <div>
          <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
          <textarea name="content" id="content" rows="8" x-model="content"
            class="mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" required></textarea>
        </div>

        <div class="flex justify-end gap-3">
          <button type="button" @click="editing = false"
            class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md font-semibold hover:bg-gray-300 transition cursor-pointer">
            Cancel
          </button>
          <button type="submit"
            class="bg-green-500 text-white px-4 py-2 rounded-md font-semibold hover:bg-green-600 transition cursor-pointer">
            Save
          </button>
        </div>
      </form>
    </template>

    <!-- Back Button -->
    <div class="mt-6">
      <a href="{{ route('blogs.index') }}"
        class="inline-block text-sm text-gray-700 border border-gray-300 px-4 py-2 rounded-md hover:bg-gray-100 transition">
        ← Back to All Blogs
      </a>
    </div>
  </div>
</x-layout>
