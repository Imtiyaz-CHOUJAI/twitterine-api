<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /**
     * Fillable fields
     */
    protected $fillable = ['user_id','likeable_id','likeable_type'];

    /**
     * Likeable relation
     */
    public function likeable(){
        return $this->morphTo();
    }
}
