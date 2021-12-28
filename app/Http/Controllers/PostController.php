<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public  function index () {


        $post =  Post::latest();
    
        if(request('search')) {
            $post 
                -> where('title', 'like', '%'. request('search').'%' )
                -> orWhere('body', 'like', '%'. request('search').'%' );
        }
    
        return view('post.index', [
            'posts' => $post->paginate(4)
        ]);
    }

    public function show (Post $post) {
        

        return view('post.show', [
            'post' => $post
        ]);
        
    }

    public function create (Post $post ) {
     
        return view ('post.create');

    }

    public function store() {

        

        $attributes = request() -> validate([
            'title' => 'required',
            'excerpt' => 'required',
            'picture' => 'required|image',
            'body' => 'required',
            'category_id' => ['required', Rule::exists("categories", "id")]
        ]);

        

        $attributes['user_id'] = Auth::user() -> id;
        $attributes['picture'] = request() -> file('picture') ->store('thumbnails');

        
        Post::create($attributes);
        return redirect('/');


    }

    public function edit ( Post $post) {
        return view('post.edit', ['posts' => $post->paginate(50)]);
    }

    public function update (Post $post) {

      

        $attributes = request() -> validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists("categories", "id")]
        ]);

        

        $post->update($attributes);
        return redirect('/admin/post/edit');

    }
    
    public function editPost ( Post $post) {


        return view('post.edit-post', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/admin/post/edit');
    }
}
