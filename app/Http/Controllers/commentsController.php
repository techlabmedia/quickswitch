<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\comment;
use App\post;
use Crypt;


class commentsController extends Controller
{
    public function index() {
        $posts = post::orderBy('created_at', 'desc')->paginate(6);
        return view('welcome', compact('posts'));
    }


    

public function create(){

    return view('create');
}

public function store(Request $request, $post_id)
{
    $this->validate($request, array(
        'name'      =>  'required|max:255',
        'content'   =>  'required|min:5|max:2000'
        ));

    $post = Post::find($post_id);

    $comment = new Comment();
    $comment->name = $request->name;
    $comment->comment = $request->comment;
    $comment->post()->associate($post);

    $comment->save();

    Session::flash('success', 'Comment was added');

    return redirect()->route('possy', [$post->slug]);
}
public function storecomment(request $request){

    $comment = new comment;
    $comment->post_id = Crypt::decrypt(Input::get('post_id'));
    $comment->comments = $request->comments;
    $comment->save();

    return redirect()->route('rules');
}
}
