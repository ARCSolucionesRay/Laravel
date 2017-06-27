@extends("layouts.app")
@section("content")
<ul>
@foreach($hojaRuta as $hojaRuta)
    <li>
    {{$hojaRuta->nombreHojaRuta}}
    </li>
@endforeach
</ul>
@endsection