@extends('main')
@section('content')

<h1>Sukurti naują kategoriją</h1>
<form action="/storeCategory" method="post">
    @csrf
    <div class="form-group m-1">
        <input type="text" class="form-control" name="title" placeholder="Kategorijos pavadinimas" >
    </div>
    <button type="submit" class="btn btn-danger">Pridėti</button>
</form>


@endsection