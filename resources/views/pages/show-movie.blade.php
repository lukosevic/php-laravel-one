@extends('main')
@section('content')
<div class="card mt-5">
    <h1 class="mt-4">{{$movie->title}}</h1>
    <p>{{$movie->description}}</p>
    <img src="{{asset('/storage/'.$movie->poster)}}" alt="">
    <h3>Informacija apie filmą:</h3>
    <ul>
        <li>Režisierius: {{$movie->director}}</li>
        <li>IMDB rating: {{$movie->imdb}}</li>
        <li>Išleidimo data: {{$movie->created}}</li>
    </ul>
    <h4>Veiksmai:</h4>
    <ul>
        <li><a href="/movie/edit/{{$movie->id}}">Redaguoti</a></li>
        <li><a href="/movie/delete/{{$movie->id}}">Šalinti</a></li>
    </ul>
</div>

    @endsection