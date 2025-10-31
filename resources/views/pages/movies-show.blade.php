<x-layout heading="Movies Details">
    <h1 class="text-xl font-bold">Series: {{ $movie['title'] }}</h1>
    <p>Seasons: {{ $movie['seasonCount'] }}</p>
    <p>Description: {{ $movie['description'] }}</p>
</x-layout>
