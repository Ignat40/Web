@extends('layouts.app')

@section('content')

<h1>Ti si kupi {{3}} kg. maruli za {{5}} lea. </h1>

<h3>Twa sa tupanite deto qko majat marulite</h3>

@if (count($NPC))

<ul>
    @foreach ($NPC as $person)

    <li>{{$person}}</li>

    @endforeach
</ul>                   
@endif          

@endsection