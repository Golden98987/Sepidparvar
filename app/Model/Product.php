<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    public $timestamps = false;
    public $table= 'products';
    public function Users()
    {
        return $this->belongsToMany(Users::class, 'baskets');
    }

    public function Category()
    {
        return $this->belongsTo('App\Model\Category','category_id','id');
    }

    public function Comment()
    {
        return $this->hasMany('App\Model\Comment');
    }

    public function Baskets()
    {
        return $this->hasMany('App\Model\Baskets');
    }

    public function Factor()
    {
        return $this->belongsToMany(Factor::class, 'Factor_Product');
    }

    public function Factor_Product()
    {
        return $this->hasMany('App\Model\Factor_Product
        ');
    }
    
    public function Backed_Product()
    {
        return $this->hasMany('App\Model\Backed_Product');
    }

    public function photoes()
    {    
        return $this->morphMany('App\Model\Photoes','imageable');
    }
    public function Rates()
    {    
        return $this->morphMany('App\Model\Rates','rateable');
    }

    public function tags()
    {
        return $this->morphtoMany("App\Model\Tags","taggable");
    }

    public function getShortDescription()
    {
        return Str::limit($this->description, 15, '...');
    }
}
