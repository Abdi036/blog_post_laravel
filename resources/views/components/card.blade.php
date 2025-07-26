@props(['highlight' => false])

<div @class([
    'rounded-lg p-6 shadow-sm transition-all border',
    'bg-blue-50 border-blue-400' => $highlight,
    'bg-white border-gray-200 hover:shadow-md' => !$highlight,
    'card'
])>
  <div class="mb-4">
    {{ $slot }}
  </div>

  <a {{ $attributes->merge(['class' => 'block w-full text-center text-sm font-semibold text-gray-700 border border-gray-200 rounded-md py-2 hover:bg-gray-100 transition']) }}>
    Read More
  </a>
</div>
