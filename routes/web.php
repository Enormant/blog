<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {


    return view('posts', [
        'posts' => Post::get_posts()
    ]);
});

Route::get('/posts/{post}', function ($slug) {

    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
