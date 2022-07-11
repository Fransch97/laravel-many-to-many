<?php

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
        $this->call(PostsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(UpdatePosts::class);
        $this->call(TagsSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(Post_TagSeeder::class);
    }
}
