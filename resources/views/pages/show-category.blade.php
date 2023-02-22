@extends('main')
@section('content')

<div class="card mt-5">
    <h3>Kategorijos:</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kategorija</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
                 @foreach($categories as $category)
                 <tr>
                 <th scope="row">{{$category->id}}</th>
                 <td>{{$category->title}}</td>
                 <td><a href="/category/edit/{{$category->id}}">Redaguoti</a></td>
                 <td><a href="/category/delete/{{$category->id}}">Naikinti</a></td>
                    </tr>
                @endforeach
                </tbody>
    </table>
        
</div>

@endsection