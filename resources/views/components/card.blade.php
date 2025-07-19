@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card']) >
  {{ $slot }}
  <a {{ $attributes }} >Read More...</a>
</div>