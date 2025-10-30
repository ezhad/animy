@props(['active'=>false])

<a  class="{{$active ? "rounded-md px-3 py-2 text-sm font-medium bg-gray-800 text-white": "text-gray-800 hover:bg-white/5 hover:text-white text-sm font-medium"}}"
    aria-current="{{$active ?'page':'false'}}"
    {{$attributes}}
>{{$slot}}</a>
