<x-layout>
    <ul>
        @foreach($data as $blog)
        <li>
            <h2>{{ $blog['title'] }}</h2>
            <p>{{ $blog['content'] }}</p>
            <a href="/blogs/{{ $blog['id'] }}">Read more</a>
        </li>
        @endforeach
    </x-layout>
   