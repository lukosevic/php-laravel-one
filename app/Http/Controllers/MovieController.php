<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;
use File;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('pages.home', compact('movies'));
    }
    public function addMovie(){
        $categories = Category::all();

        return view('pages.add-movie', compact('categories'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'title'=>'required|unique:movies|max:255',
            'director'=>'required',
            'description'=>'required',
            'category'=>'required',
            'poster'=>'mimes:jpeg,png,gif',
        ]);
      
            $path = $request->file('poster')->store('public/images');
            $fileName = str_replace('public/','',$path);
       
        Movie::create([
            'title'=>request('title'),
            'imdb'=>request('imdb'),
            'director'=>request('director'),
            'description'=>request('description'),
            'created'=>request('created'),
            'category_id'=>request('category'),
            'poster'=>$fileName,
        ]);

        return redirect('/');
    }
    public function showMovie(Movie $movie){
        return view('pages.show-movie', compact('movie'));
    }
    public function editMovie(Movie $movie){
        return view('pages.edit-movie', compact('movie'));
    }
    public function storeUpdate(Movie $movie,Request $request){
        if(request()->hasFile('poster')){
            File::delete(storage_path('app/public/'.$movie->poster));
            $path = $request->file('poster')->store('public/images');
            $fileName = str_replace('public','',$path);
            Movie::where('id',$movie->id)->update(['poster'=>$fileName]);
        }   
        Movie::where('id',$movie->id)->update(
            $request->only(['title','director','imdb','created','description'])
        );
        return redirect('/movie/'.$movie->id);
    }
    public function deleteMovie(Movie $movie){
        $movie->delete();

        return redirect('/');
    }

    public function search(){
        return view('pages.search');
    }

    public function searchResults(){
        $results = Movie::where('title', 'like', '%'.request('search').'%')->get();

        return view('pages.search',compact('results'));
    }
}