<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comments';

    public function images(){
        return $this->hasMany('App\Models\Image');
    }
    public function users(){
        return $this->belongsTo('App\Models\Image', 'user_id');
    }  
    public function likes(){
        return $this->hasMany('App\Models\Likes');
    }
}
