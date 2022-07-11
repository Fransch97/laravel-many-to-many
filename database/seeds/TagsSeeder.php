<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ["php","js","vue.js","laravel","css","scss","bootstrap","python","html","jquery","MySql","NoSql"];
        foreach($data as $tag){
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->save();
        }
    }
}
