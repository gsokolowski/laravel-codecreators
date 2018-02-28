<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Slideshow extends Model
{
    public function slides() {
        return $this->hasMany('App\Slide', 'slideshow_id');
    }
}
