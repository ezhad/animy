

<x-layout>
    <x-slot:heading>
        {{$title}}
    </x-slot:heading>
    <div class="flex flex-col justify-between mt-15 space-y-15">
        <div class=" flex flex-col ">
            <h3 class="mx-5">{{$genres[0]}}</h3>
            <div class="flex flex-row space-x-10 ">
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
            </div>
        </div>
        <div class=" flex flex-col ">
            <h3 class="mx-5">{{$genres[1]}}</h3>
            <div class="flex flex-row space-x-10 ">
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
            </div>
        </div>
        <div class=" flex flex-col ">
            <h3 class="mx-5">{{$genres[2]}}</h3>
            <div class="flex flex-row space-x-10 ">
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
            </div>
        </div>
        <div class=" flex flex-col ">
            <h3 class="mx-5">{{$genres[3]}}</h3>
            <div class="flex flex-row space-x-10 ">
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
                <div class=" rounded-md m-2 py-5 px-10 bg-gray-700 text-gray-300">
                    <a>image</a>
                    <p>Boboiboy Galaxy</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <h3 class="mx-5">{{$genres[4]}}</h3>
        </div>
        <div class="flex flex-col">
            <h3 class="mx-5">{{$genres[5]}}</h3>
        </div>
        <div class="flex flex-col">
            <h3 class="mx-5">{{$genres[6]}}</h3>
        </div>

{{--        @if(count($genres) > 0)--}}
{{--            <ul class="">--}}
{{--                @foreach($genres as $genre)--}}
{{--                    <li class="list-group-item">{{$genre}}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        @endif--}}
    </div>
</x-layout>
