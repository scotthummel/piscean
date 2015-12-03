<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Model\Comment');
    }

    public function tags()
    {
        return $this->hasMany('App\Model\Tag');
    }
}
