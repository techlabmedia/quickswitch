<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function show(){

        $posts= App\post::all();
        return view('items')->withPages('posts');
    }
}
