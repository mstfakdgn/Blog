<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags(){

        return $this->belongstoMany('App\Model\user\tag','post_tags')->withtimestamps();

    }
    public function categories(){

        return $this->belongstoMany('App\Model\user\category','category_posts')->withtimestamps();

    }
    public function getRouteKeyName(){

      return 'slug';
    }
}
