<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Session;

class CategoryController extends Controller
{
    //
    public function __contruct(){
      $this->middleware('auth');
    }

    public function index(){
      $categories = Category::all();

      return view('categories.index')->withCategories($categories);
    }

    public function store(Request $request){

      $this->validate($request, array(
        'name' => 'required|max:255'));

      $category = new Category;
      $category->name = $request->name;
      $category->save();

      Session::flash('success', 'New Category has been created.');

      return redirect()->route('categories.index');

    }


}
