<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File as File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post extends Model
{

    use HasFactory;

    public $title, $body, $exceprt, $date, $filename;

    public function __construct($title, $body, $exceprt, $date, $filename)
    {
        $this->title = $title;
        $this->body = $body;
        $this->exceprt = $exceprt;
        $this->date = $date;  
        $this->filename = $filename;   
        
    }


    public static function get_posts () {

        return cache()->remember('posts.all', 1200, function () {
           return collect(File::files(resource_path("/posts")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
                    $document->title,
                    $document->body(),
                    $document->exceprt,
                    $document->date,
                    $document->filename
            
            ))
            ->sortByDesc('date');
        });

      
    }

    public static function find ($slug) {

        return static::get_posts()->firstWhere('filename', $slug);
    }
 
    public static function findOrFail ($slug) {

        if( static::find($slug) ){ 
            return static::find($slug);
        }
        else   {
            throw new ModelNotFoundException();
        }
    }
}
