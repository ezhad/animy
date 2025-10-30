<x-layout>
    <x-slot:heading>
        {{$title}}
    </x-slot:heading>
    <p>Top 10 Movies This Month</p>

    @foreach ($shows as $show)
        <li>
            <a href="/series/{{$show['id']}}" class="text-lg">
                <strong>{{$show['name']}}</strong>
            </a>
        </li>
    @endforeach
</x-layout>


