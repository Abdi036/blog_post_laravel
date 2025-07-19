<x-layout>
    @foreach ($data as $item)
    <h1>About</h1>
    <p>Title : {{ $item['title'] }}</p>
    <p>Author: {{ $item['author'] }}</p>
    <p>Content: {{ $item['content'] }}</p>
    @endforeach
</x-layout>
