@extends("layouts.app")
@section("content")
<ul>
@foreach($servicio as $servicio)
    <li>
    {{$servicio->id_servicio_pk}}
    </li>
@endforeach
</ul>
@endsection