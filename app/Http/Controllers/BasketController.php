<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Photoes;
use App\Model\Baskets;
use App\User;



class BasketController extends Controller
{
    public function cart()
    {
        return view ("basket.cart");
    }
    public function checkout()
    {
        return view ("basket.checkout");
    }
    public function AddToCart(Request $request)
    {
        $CurrentUserid= $request->user()->id; 
        Baskets::AddToBasket($request->id,$CurrentUserid);
        $basket= Baskets::getcontent($CurrentUserid);
        $path=array();
        $i=0;

        foreach($basket as $item)
        {
            $path[$i]=Photoes::Where('imageable_id',$item->Product->id)->first()->path;
            $i++;
        }
        return response()->json(array('basket'=>$basket,'path'=>$path));

    }
    public function RateToProduct(Request $request)
    {
        $CurrentUserid= $request->user()->id; 
        Baskets::RateToProduct($request->id,$CurrentUserid);
        return response()->json([$CurrentUserid]);

    }
    public function RemoveFromBasket(Request $request)
    {
        // dd($request);
        $CurrentUserid= $request->user()->id; 
        Baskets::DeleteFromBasket($request->id, $CurrentUserid);
        $basket= Baskets::getcontent( $CurrentUserid);
        $path=array();
        $i=0;

        foreach($basket as $item)
        {
            $path[$i]=Photoes::Where('imageable_id',$item->Product->id)->first()->path;
            $i++;
        }
        return response()->json(array('basket'=>$basket,'path'=>$path));

        

    }



}
