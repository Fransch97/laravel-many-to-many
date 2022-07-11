<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class Post_TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 50; $i++){
            $post = Post::inRandomOrder()->first();
            $tag = Tag::inRandomOrder()->first()->id;
            $post->tags()->attach($tag);
        }
    }
}
