<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    public function slugGen($title){
        $slug = Str::slug($title, '-');
        $found_slug = Post::where('slug', "LIKE", "$slug%")->get();
        $total = count($found_slug);
        if( $total > 0 ){
            $total++;
            $slug .= "-" . $total;
        }
        return $slug;
    }

    protected $fillable = [
        'title',
        'content',
        'category_id',
        'slug'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
