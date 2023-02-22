@extends('main')
@section('content')
@include('_partials/errors')
<h1>Suraskite filmą</h1>
<form action="/searchResults" method="post">
    @csrf
    <div class="form-group m-1">
        <input type="text" class="form-control" name="search" placeholder="Įveskite filmo pavadinimą" >
    </div>
    <button type="submit" class="btn btn-danger">Ieškoti</button>
    <div class="results">
        <ul>
            @if(isset($results))
            @foreach ($results as $result)
            <li>{{$result->title}}</li>
            @endforeach
        </ul>
        @endif
    </div>
</form>





@endsection