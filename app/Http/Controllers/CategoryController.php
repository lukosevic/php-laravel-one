<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('pages.show-category', compact('categories'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addCategory()
    {
        return view('pages.add-category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validated = $request->validate([
            'title'=>'required|unique:categories|max:255',
        ]);
        Category::create([
            'title'=>request('title')
        ]);

        return redirect('/all-categories');
        }
        public function editCategory(Category $category){
            return view('pages.edit-category', compact('category'));
        }
        //

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function storeUpdate(Category $category,Request $request){
        Category::where('id',$category->id)->update(
            $request->only(['title'])
        );
        return redirect('/all-categories');
    } 
        
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect('/all-categories');
    }

    public function showCategory(Category $category){
        return view('pages.category', compact('category'));

    }
}
