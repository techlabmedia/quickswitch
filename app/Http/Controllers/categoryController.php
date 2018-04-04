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

    public function category()
    {
     $records=\DB::table('categories')
                ->select('categories','category_id', \DB::raw('count(*) as totalItems'))
                ->groupBy('categories')
                ->get();
     return view('items')->withRecords($records);
     }

     public function selection($id)
     {

        $record = post::where('category_id', $id)->get();
        if($record==""){
            $report="There are no posts of this Category";
            return view('items',compact('report',$report));
        }
        return view('items')->withRecords($record);
        

     }

     public function show($slug)
    {
        $post = Post::find($slug);
        return view('possy')->withPost($post);
    }

    public function portifolio()
    {
        $postz = post::get();
     return view('about', compact('postz', $postz));
    }
  
    public function display($id)
    {
    
        // get the current user
        $user = post::find($id);
    
        // get previous user id
        $previous = post::where('id', '<', $user->id)->max('id');
    
        // get next user id
        $next = post::where('id', '>', $user->id)->min('id');
    
        return View::make('welcome')->with('previous', $previous)->with('next', $next);
    }
  }
