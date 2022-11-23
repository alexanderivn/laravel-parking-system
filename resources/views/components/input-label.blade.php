@props([
    'for',

    'label'
])

<label {{ $attributes->merge(['class'=>'block']) }} for="{{$for}}">{{$label}}</label>
