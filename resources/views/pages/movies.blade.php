<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>
    <p>Top 10 Movies This Month</p>

    @foreach ($movies as $movie)
        <li>
            <a href="/movies/{{$movie['id']}}" class="text-lg">
                <strong>{{$movie['title']}}</strong>
            </a>
        </li>
    @endforeach
</x-layout>


