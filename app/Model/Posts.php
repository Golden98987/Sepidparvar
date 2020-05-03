<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title','content'
    ];
    
    public function photoes()
    {
        return $this->morphMany("App\Model\Photoes","imageable");
    }

    public function tags()
    {
        return $this->morphtoMany("App\Model\Tags","taggable");
    }

}
