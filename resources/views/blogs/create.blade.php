<x-layout>
    <div class="max-w-lg mx-auto p-8">
     <h1 class="text-2xl font-bold text-black mb-4">Create Blog Page</h1>
     <form action="{{ route('blogs.store') }}" method="POST" class="space-y-6">
         @csrf
         <div>
          <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
          <input type="text" name="title" id="title" value="{{ old('title') }}"
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400"
              required>
           
         </div>
        
         <div>
          <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
          <textarea name="content" id="content" rows="6"
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-400"
              required>{{ old('content') }}</textarea>
           
         </div>
         <div class="flex justify-end">
          <button type="submit"
              class="bg-black text-white font-bold py-2 px-6 rounded shadow transition duration-200 cursor-pointer hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400">
              Create Blog
          </button>
         </div>

        <!-- validation errors -->
        @if ($errors->any())
            <div class="mt-4 p-7 bg-red-300">
                <ul class="list-inside text-sm text-red-500">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
     </form>
    </div>
</x-layout>