<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

 
    return view('posts', [
        'posts' => Post::latest()-> get()
    ]);
})->name(
    'posts'
);

Route::get('/posts/{post}', function (Post $post) {

    return view('post', [
        'post' => $post
    ]);

});


Route::get('category/{category:slug}', function( Category $category) {
 
    return view('posts', [
        'posts' => $category->posts
    ]);
})-> name('categories');

Route::get('user/{user}', function( User $user) {
 
    return view('posts', [
        'posts' => $user->posts
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__ . '/auth.php';
