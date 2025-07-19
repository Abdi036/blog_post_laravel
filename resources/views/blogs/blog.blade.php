<x-layout>
  <div class="mb-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-2">Blog id - {{ $id }}</h2>
    @if(isset($data) && count($data) > 0)
      @php $blog = $data[0]; @endphp
      <div class="bg-gray-50 p-4 rounded shadow">
        <h3 class="text-xl font-semibold text-blue-700 mb-2">{{ $blog['title'] }}</h3>
        <p class="text-gray-600 mb-1">By {{ $blog['author'] }}</p>
        <p class="text-gray-700">{{ $blog['content'] }}</p>
      </div>
    @else
      <p class="text-red-500">Blog not found.</p>
    @endif
  </div>
</x-layout>