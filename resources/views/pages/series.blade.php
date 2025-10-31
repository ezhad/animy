<x-layout>
    <x-slot:heading>
        Series
    </x-slot:heading>
    <p>Top 10 Series This Month</p>

    @foreach ($series as $aSeries)
        <li>
            <a href="/series/{{$aSeries['id']}}" class="text-lg">
                <strong>{{$aSeries['title']}}</strong>
            </a>
        </li>
    @endforeach
</x-layout>

