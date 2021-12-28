<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController:: class, 'index'])
-> name('posts') ;

Route::get('/posts/{post}', [PostController:: class, 'show']);

Route::get('admin/post/create', [PostController::class, 'create'])-> middleware('admin') -> name('new post');
Route::post('/admin/post', [PostController::class, 'store'])-> middleware('admin');
Route::get('/admin/post/edit', [PostController::class, 'edit'])-> middleware('admin') -> name('edit posts');
Route::get('/admin/post/{post}/edit', [PostController::class, 'editPost'])-> middleware('admin') -> name('edit post');
Route::patch('/admin/post/{post}', [PostController::class, 'update']) -> middleware('admin');
Route::delete('/admin/post/{post}', [PostController::class, 'destroy']) -> middleware('admin');

Route::post('/post/{post}/comments', [CommentController::class, 'store']) ;

Route::get('category/{category:slug}', function( Category $category) {
 
    return view('post.index', [
        'posts' => $category->posts
        
    ]);
})-> name('category');

Route::get('user/{user}', function( User $user) {
 
    return view('post.index', [
        'posts' => $user->posts
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__ . '/auth.php';
