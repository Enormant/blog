<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index () {


        $post =  Post::latest();
    
        if(request('search')) {
            $post 
                -> where('title', 'like', '%'. request('search').'%' )
                -> orWhere('body', 'like', '%'. request('search').'%' );
        }
    
        return view('posts', [
            'posts' => $post->paginate(4),
            'categories' => Category::all()
        ]);
    }
}
