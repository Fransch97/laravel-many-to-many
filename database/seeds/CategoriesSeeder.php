<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorie = ["PHP", "HTML", "CSS", "JAVASCRIPT", "LARAVEL", "BOOTSTRAP", "VUE.JS", "SCSS"];
        foreach($categorie as $categoria){
            $new_category = new Category();
            $new_category->name = $categoria;
            $new_category->slug = Str::slug($categoria, '-');
            $new_category->save();
        }
    }
}
