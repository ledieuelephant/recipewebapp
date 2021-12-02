@extends('templates.default')

@section('content')
    <div class="row">
        @foreach ($recettes as $recette)
            <div class="col-3" style="margin-top: 15px">
                <div class="card">
                    <p style="padding-left: 3px">{{$recette->type}}</p>
                    <h2 style="text-align: center"><a href="{{url('recettes/'.$recette->id)}}">{{$recette->name}}</a></h2>
                </div>
            </div>
        @endforeach
    </div>
@endsection
