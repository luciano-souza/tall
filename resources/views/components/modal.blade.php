@props(['trigger'])

<div @click.self="{{$trigger}} = false" @keydown.escape.window="{{$trigger}} = false" x-cloak
    class="flex fixed top-0 bg-gray-900 bg-opacity-60 items-center w-full h-full" x-show="{{$trigger}}">

    <div {{$attributes->merge(['class' => 'bg-gray-200 m-auto shadow-2xl rounded-xl p-8'])}}>
        {{$slot}}
    </div>

</div>
