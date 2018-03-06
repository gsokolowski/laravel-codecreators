<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    // Post belongs to User
    public function user() {
        return $this->belongsTo('App\User', 'author_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Category', 'articles_categories', 'article_id', 'category_id');
    }

}
