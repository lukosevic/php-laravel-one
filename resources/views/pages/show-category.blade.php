@extends('main')
@section('content')

<div class="card mt-5">
    <h3>Kategorijos:</h3>
    <ul>
        @foreach(Category $category)
        <li>{{$category->title}}</li>
        @endforeach
    </ul>
</div>

@endsection