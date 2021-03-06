<?php

namespace App\Models;

use App\Models\Comment as ModelsComment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'category_id', 'user_id', 'picture'];
    protected $guarded = ['id'];

    //eager loading to sort out N+1 sql call issue.
    protected $with = ['category', 'user'];

    public function category () {
        return $this->belongsTo(Category::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function comments () {
        return $this->hasMany(ModelsComment::class);
    }
}
