@props([
    'for'=>'',
    'type'=>'text',
    'name' => '',
    'id'=>'',
    'error'=>'',
    'label'=>'',
])

<input type="{{$type}}" value="" name="{{$name}}" id="{{$id}}"
       class="w-full p-1 rounded-md">
@error($error)
<p>{{$message}}</p>
@enderror
