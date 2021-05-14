<div class="mt-4">
    <div {{$attributes->merge(['class'=>"bg-$color-100  shadow-lg  border-l-4 border-$color-500 text-$color-500 p-4"])}} role="alert">
        <p class="font-bold">{{$title}}</p>
        <p>{{$slot}}</p>
        {{$prueba()}}
    </div>
</div>

<!--
<div class="mt-4">
    <div class="bg-{$color}-100 border-1-4 border-green-500 text-{$color}-500 p-4" role="alert">
        <p class="font-bold">{$title}</p>
        <p>{$slot}</p>
    </div>
</div>
-->