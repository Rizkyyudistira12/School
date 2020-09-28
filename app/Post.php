<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['created_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thumbnail()
    {
        // if($this->thumbnail){
        //     return $this->thumbnail;
        // } else {
        //     return asset('no-thumbnail.png');
        // }
        // if(!$this->thumbnail){
        //     return asset('no-thumbnail.png');
        // }
        // return $this->thumbnail;

        return !$this->thumbnail ? asset('no-thumbnail.png') : $this->thumbnail;
    }
}
