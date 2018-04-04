<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\post;
class categoryController extends Controller {

    public function index()
    {
        $categories = Category::with('sub_category')->get();

        return view('layout.layoutA')->withCategories($categories);
    }


}