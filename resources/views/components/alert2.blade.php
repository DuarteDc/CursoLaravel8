<!--Se les conoce como componenetes anonimos porque no creamos ninguna clase-->
@props(['background'=>"green"])

<div role="alert" {{$attributes}}>
    <div class="bg-{{$background}}-500 text-white font-bold rounded-t px-4 py-2">
      {{$title}}
    </div>
    <div class="border border-t-0 border-{{$background}}-400 rounded-b bg-{{$background}}-100 px-4 py-3 text-{{$background}}-700">
      <p>{{$slot}}</p>
    </div>
</div>