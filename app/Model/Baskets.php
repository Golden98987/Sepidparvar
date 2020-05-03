<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    public $timestamps=false;
    
    protected $fillable=['num','product_id','user_id','created_at','updated_at'];

    public function Product()
    {
        return $this->belongsTo('App\Model\Product');
    }
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    //add new product to basket table 
    public static function AddToBasket($product_id,$user_id)
    {
        $result=Baskets::where('user_id','=',$user_id)->where('product_id','=',$product_id)->get()->first();
        
        if($result)
        {            
            $result->increment('num');
            $result->updated_at=now();
            $result->save();
        }
        else
        {
            Baskets::add($product_id,$user_id);
 
        }
    }

    //returns all the products of current user from basket
    public static function getcontent($user_id)
    {
        $basket=Baskets::with('Product')->where('user_id',$user_id)->get();
        
        return $basket;
    }

    //add a row in basket table
    public static function add($product_id,$user_id)
    {
        $addproduct=new Baskets;
        $addproduct->product_id=$product_id;
        $addproduct->user_id=$user_id;
        $addproduct->num=1;
        $addproduct->created_at=now();
        $addproduct->save();
    }

    //decreasing a row or mines num of product
    public static function miness($product_id,$user_id)
    {
        $result=Baskets::where('user_id','=',$user_id)->where('product_id','=',$product_id)->get()->first();
  
        if(($result->num)>1)        
        {   
            $result->decrement('num');
            $result->save();
        }
        else
            $result->delete();            
    }
    //delete a row from basket table
    public static function DeleteFromBasket($product_id,$user_id)
    {
        $result=Baskets::where('user_id','=',$user_id)->where('product_id','=',$product_id)->first();

        $result->delete();  
    }
    
    public static function RateToProduct($rate_id,$user_id)
    {
        $RateToProduct=new Rates;
        $RateToProduct->rateable_id=$rate_id;
        $RateToProduct->user_id=$user_id;
        $RateToProduct->rate=1;
        $RateToProduct->created_at=now();
        $RateToProduct->updated_at=now();
        $RateToProduct->save();
    } 
}
