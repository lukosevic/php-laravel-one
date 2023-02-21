@extends('main')
@section('content')
<h1 class="mt-4">Redaguoti informaciją apie filmą</h1>
@include('_partials/errors')
<form action="/update/{{$movie->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-1">
        <input type="text" class="form-control" name="title" placeholder="Filmo pavadinimas" value="{{$movie->title}}" >
    </div>
    <div class="form-group m-1">
        <input type="text" class="form-control" name="imdb" placeholder="IMDB rating" value="{{$movie->imdb}}">
    </div>
    <div class="form-group m-1">
        <input type="text" class="form-control" name="director" placeholder="Režisierius" value="{{$movie->director}}">
    </div>
    <div class="form-group m-1">
        <input type="date" class="form-control" name="created" placeholder="Sukūrimo data" value="{{$movie->created}}">
    </div>
    <div class="form-group m-1">
        <select name="category" class="form-control">
            <option selected disabled">p45121nk173 k4739021j4</option>
            <option value="1">v31k5m0</option>
            <option value="2">d24m4</option>
        </select>
    </div>
    <div class="form-group m-1">
        <textarea name="description" placeholder="Filmo aprašymas" class="form-control">{{$movie->description}}</textarea>
    </div>
    <div class="form-group m-1">
        <label">p14k4745</label>
        <input type="file" class="form-control" name="poster"> 
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-danger">54u9071</button>
    </div>
</form>
@endsection