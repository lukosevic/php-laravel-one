@extends('main')
@section('content')

<div class="card mt-5">
    <h1>{{$category->title}}</h1>
    <div class="row">
        @foreach($category->movies as $movie)
        <div class="card">
            <ul>
                <li>Filmo pavadinimas:{{$movie->title}}</li>
                <li>IMDB reitingas: {{$movie->imdb}}</li>
                <li>Aprašymas: {{$movie->description}}</li>
                <li><a href="/movie/{{$movie->id}}">p14c14u</a></li>
            </div>
            @endforeach
            </ul>
    </div>
</div>

@endsection