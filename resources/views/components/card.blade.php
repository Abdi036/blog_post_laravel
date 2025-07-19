@props(['highlight' => false])

<div @class([
    'border-2 rounded-lg p-4 mb-4 shadow transition-all',
    'border-blue-400 bg-blue-50' => $highlight,
    'border-gray-200 bg-gray-50' => !$highlight,
    'card'
  ])>
  <div class="mb-2">
    {{ $slot }}
  </div>
  <a {{ $attributes->merge(['class' => 'inline-block mt-2 text-blue-600 hover:text-blue-800 font-semibold transition']) }} >Read More...</a>
</div>