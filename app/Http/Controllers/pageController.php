<?php

namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function show($id){

        $posts= App\post::find($id);
        return view('items')->withPages('posts');
    }

    public function display($slug){
        $posy = post::where('slug',$slug)->firstorFail();
        return view('possy', compact('posy', $posy));
    }
}
