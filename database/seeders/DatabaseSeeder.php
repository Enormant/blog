<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        //clean up tables
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory() -> create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $tech = Category::create([
            'name' => 'Technology',
            'slug' => 'tech'
        ]);

        $hobby = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);

        //posts
        
        Post::create([
            'user_id'=> $user -> id,
            'category_id' => $personal -> id,
            'title' => 'Post 1',
            'excerpt' => 'this is the excerpt for post 1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu tortor blandit, gravida purus eu, commodo risus. Pellentesque sapien lectus, euismod nec feugiat at, cursus a massa. Integer interdum dui justo, sit amet pretium eros facilisis vitae. Phasellus mollis est nec purus fermentum, nec commodo eros malesuada. Nulla a venenatis nisi. Fusce vestibulum ullamcorper risus. Proin sit amet justo nec turpis ultricies mattis. Vivamus fringilla erat eget orci hendrerit pellentesque. Morbi ipsum mi, tincidunt nec iaculis ut, blandit eget ex. Etiam non felis orci. Pellentesque feugiat velit quis congue mollis. Vivamus vel ullamcorper arcu. Etiam ac quam sit amet diam tristique sollicitudin convallis sed turpis. Suspendisse laoreet sem et nibh tempus, et elementum tortor laoreet. Integer faucibus felis non pretium ultrices. Vestibulum varius at est ut ullamcorper. Donec faucibus volutpat ipsum, at hendrerit dui commodo in. Praesent ut ultrices massa. Cras sed facilisis turpis.',
            'published_at' => date("Y-m-d H:i:s")
        ]);

        Post::create([
            'user_id'=> $user -> id,
            'category_id' => $hobby -> id,
            'title' => 'Post 2',
            'excerpt' => 'this is the excerpt for post 2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu tortor blandit, gravida purus eu, commodo risus. Pellentesque sapien lectus, euismod nec feugiat at, cursus a massa. Integer interdum dui justo, sit amet pretium eros facilisis vitae. Phasellus mollis est nec purus fermentum, nec commodo eros malesuada. Nulla a venenatis nisi. Fusce vestibulum ullamcorper risus. Proin sit amet justo nec turpis ultricies mattis. Vivamus fringilla erat eget orci hendrerit pellentesque. Morbi ipsum mi, tincidunt nec iaculis ut, blandit eget ex. Etiam non felis orci. Pellentesque feugiat velit quis congue mollis. Vivamus vel ullamcorper arcu. Etiam ac quam sit amet diam tristique sollicitudin convallis sed turpis. Suspendisse laoreet sem et nibh tempus, et elementum tortor laoreet. Integer faucibus felis non pretium ultrices. Vestibulum varius at est ut ullamcorper. Donec faucibus volutpat ipsum, at hendrerit dui commodo in. Praesent ut ultrices massa. Cras sed facilisis turpis.',
            'published_at' => date("Y-m-d H:i:s")
        ]);

        Post::create([
            'user_id'=> $user -> id,
            'category_id' => $tech -> id,
            'title' => 'Post 3',
            'excerpt' => 'this is the excerpt for post 3',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu tortor blandit, gravida purus eu, commodo risus. Pellentesque sapien lectus, euismod nec feugiat at, cursus a massa. Integer interdum dui justo, sit amet pretium eros facilisis vitae. Phasellus mollis est nec purus fermentum, nec commodo eros malesuada. Nulla a venenatis nisi. Fusce vestibulum ullamcorper risus. Proin sit amet justo nec turpis ultricies mattis. Vivamus fringilla erat eget orci hendrerit pellentesque. Morbi ipsum mi, tincidunt nec iaculis ut, blandit eget ex. Etiam non felis orci. Pellentesque feugiat velit quis congue mollis. Vivamus vel ullamcorper arcu. Etiam ac quam sit amet diam tristique sollicitudin convallis sed turpis. Suspendisse laoreet sem et nibh tempus, et elementum tortor laoreet. Integer faucibus felis non pretium ultrices. Vestibulum varius at est ut ullamcorper. Donec faucibus volutpat ipsum, at hendrerit dui commodo in. Praesent ut ultrices massa. Cras sed facilisis turpis.',
            'published_at' => date("Y-m-d H:i:s")
        ]);

        Post::create([
            'user_id'=> $user -> id,
            'category_id' => $personal -> id,
            'title' => 'Post 4',
            'excerpt' => 'this is the excerpt for post 4',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu tortor blandit, gravida purus eu, commodo risus. Pellentesque sapien lectus, euismod nec feugiat at, cursus a massa. Integer interdum dui justo, sit amet pretium eros facilisis vitae. Phasellus mollis est nec purus fermentum, nec commodo eros malesuada. Nulla a venenatis nisi. Fusce vestibulum ullamcorper risus. Proin sit amet justo nec turpis ultricies mattis. Vivamus fringilla erat eget orci hendrerit pellentesque. Morbi ipsum mi, tincidunt nec iaculis ut, blandit eget ex. Etiam non felis orci. Pellentesque feugiat velit quis congue mollis. Vivamus vel ullamcorper arcu. Etiam ac quam sit amet diam tristique sollicitudin convallis sed turpis. Suspendisse laoreet sem et nibh tempus, et elementum tortor laoreet. Integer faucibus felis non pretium ultrices. Vestibulum varius at est ut ullamcorper. Donec faucibus volutpat ipsum, at hendrerit dui commodo in. Praesent ut ultrices massa. Cras sed facilisis turpis.',
            'published_at' => date("Y-m-d H:i:s")
        ]);
    }
}
