@extends('templates.default')

@section('content')
    <h2 style="text-align: center">{{$recette->name}} - {{$recette->type}}</h2>
    <p> <strong>Temps de préparation : </strong>{{$recette->time}}</p>
    @php
    $newrecipe = explode('.', $recette->recipe);
    @endphp
    <ol>
        @foreach ($newrecipe as $item)
        @if ($item === "")
            <li>Dégustez !</li>
        @else
            <li>{{$item}}.</li>
        @endif
    @endforeach
    </ol>
@endsection