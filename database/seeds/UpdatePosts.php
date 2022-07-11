<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class UpdatePosts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_posts = Post::all();
        foreach($all_posts as $post){
            $category_id = Category::inRandomOrder()->first();
            // dump($category_id);
            $post->category_id = $category_id->id;
            $post->update();
        }
    }
}
