<x-layout>
  <h2>Currently Available Blogs</h2>

  <ul>
    @foreach($data as $blog)
      <li>
        <x-card :highlight="$blog['author'] == 'John Doe'" href="/blogs/{{$blog['id']}}">
          <h3>{{ $blog['title'] }}</h3>
        </x-card>
      </li>
    @endforeach
  </ul>
</x-layout>