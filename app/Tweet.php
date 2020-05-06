<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    /**
     * Fillable Fields
     */
    protected $fillable = ['user_id','body'];

    /**
     * User Relation
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Likes relation
     */
    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }
}
