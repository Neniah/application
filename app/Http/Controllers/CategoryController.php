<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

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

    public function store(){

    }


}
