<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    protected $table = 'likes';

    public function images(){
        return $this->hasMany('App\Models\Image');
    }
    public function users(){
        return $this->belongsTo('App\Models\Image', 'user_id');
    }  
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
