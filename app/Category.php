<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    public function posts() {
//        return $this->belongsToMany('App\Post', 'categories_posts',  'category_id', 'post_id');
//    }

    public function articles() {
        return $this->belongsToMany('App\Article', 'articles_categories', 'category_id', 'article_id');
    }

    public function findBySlug($slug) {
        return static::where([
            'slug' => $slug
        ])->firstOrFail();
    }
}
