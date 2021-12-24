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

        $user2 = User::factory() -> create();

        Post::factory(5) -> create([
            'user_id' => $user2->id
        ]);

        $user3 = User::factory() -> create();

        Post::factory(5) -> create([
            'user_id' => $user3->id
        ]);
        
     
    }
}
