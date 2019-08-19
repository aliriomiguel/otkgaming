<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\About;
use App\User;
use App\Quotes;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 5)->create();
        factory(Category::class, 10)->create();
        factory(Post::class, 30)->create();
        factory(About::class, 30)->create();
        factory(Quotes::class, 30)->create();
    }
}
