<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    // Page belongs to User
    public function user() {
        return $this->belongsTo('App\User', 'author_id');
    }

    public static function findBySlug($slug) {
        return static::where([
            'slug' => $slug,
            'status' => 'active'
        ])->firstOrFail();
    }

}
