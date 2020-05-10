<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function user(){
        return $this>$this->belongsTo(User::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function likes(){
        return $this->belongsToMany(Profile::class);
    }
}