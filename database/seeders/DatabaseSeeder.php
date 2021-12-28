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



      
        $user = User::factory() -> create();

        Post::factory(5) -> create([
            'user_id' => $user->id
        ]);

        Post::factory(5) -> create([
            'user_id' => $user->id,
            'category_id' => Category::all()[0]
        ]);

        Post::factory(5) -> create([
            'user_id' => $user->id,
            'category_id' => Category::all()[1],
            'picture' => 'thumbnails/example.jpeg'
        ]);

        Post::factory(5) -> create([
            'user_id' => $user->id,
            'category_id' => Category::all()[2]
        ]);

        Post::factory(5) -> create([
            'user_id' => $user->id,
            'category_id' => Category::all()[3]
        ]);
      
        Post::factory(5) -> create([
            'user_id' => $user->id,
            'category_id' => Category::all()[4]
        ]);
      
        
     
    }
}
