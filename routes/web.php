<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController:: class, 'index'])
-> name('posts') ;

Route::get('/posts/{post}', function (Post $post) {

    return view('post', [
        'post' => $post,
        'categories' => Category::all()
    ]);

});

Route::post('/post/{post}/comments', [CommentController::class, 'store']);


Route::get('category/{category:slug}', function( Category $category) {
 
    return view('posts', [
        'posts' => $category->posts,
        'categories' => Category::all()
        
    ]);
})-> name('category');

Route::get('user/{user}', function( User $user) {
 
    return view('posts', [
        'posts' => $user->posts
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__ . '/auth.php';
