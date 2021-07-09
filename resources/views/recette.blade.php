@include("header")

<div class="container">
    <h2 style="text-align: center">{{$recette->name}} - {{$recette->type}}</h2>
    <p>{{$recette->time}}</p>
    <p>{{$recette->recipe}}</p>
</div>
