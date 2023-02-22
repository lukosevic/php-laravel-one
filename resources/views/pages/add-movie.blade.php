@extends('main')
@section('content')
<h1 class="mt-4">Pridet filmą</h1>
@include('_partials/errors')
<form action="/storeMovie" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-1">
        <input type="text" class="form-control" name="title" placeholder="filmo pavadinimas" >
    </div>
    <div class="form-group m-1">
        <select name="category" class="form-contol">
            <option selected disabled">- - - Pasirinkite kategoriją - - - </option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
        </select>
    </div>
    <div class="form-group m-1">
        <input type="text" class="form-control" name="imdb" placeholder="imdb">
    </div>
    <div class="form-group m-1">
        <input type="text" class="form-control" name="director" placeholder="232151321u5">
    </div>
    <div class="form-group m-1">
        <input type="date" class="form-control" name="created" placeholder="5uku21m0 d474">
    </div>
    
    <div class="form-group m-1">
        <textarea name="description" placeholder="4p245ym45" class="form-control"></textarea>
    </div>
    <div class="form-group m-1">
        <label>Plakatas</label>
        <input type="file" class="form-control" name="poster"> 
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-danger">54u9071</button>
    </div>
</form>
@endsection