<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Factor;
use App\Model\Baskets;
use App\Model\Factor_Product;
use App\Model\Address;
use Carbon\Carbon;

class FactorController extends Controller
{


    public function checkout(Request $request)
    {
        // dd($request);
        $factor=new Factor();
        $factor->user_id=$request->user()->id;
        $factor->sum=$request->total;
        $factor->created_at=Carbon::now();
        $factor->save();
        $factor_id=$factor->id;

        $basket_items=Baskets::where('user_id',$request->user()->id)->get();

        $total=0;
        $factor_items=array();
        foreach($basket_items as $item)
        {   
            $factor_product=new Factor_Product();
            $factor_product->product_id=$item->product_id;
            $factor_product->factor_id= $factor_id;
            $factor_product->num=$item->num;
            $factor_product->save();
            array_push($factor_items,$factor_product);
        }

        $Addresses=Address::where('user_id',$request->user()->id)->get();
        return view ("basket.checkout",compact('Addresses','factor_id','factor_items'));
    }

    public function StorefactorAddress(Request $request)
    {
        // dd($request);
        $address=new Address();
        $address->state=$request->state;
        $address->city=$request->city;
        $address->postaddress=$request->postaddress;
        $address->postal_code=$request->postal_code;
        $address->telephone=$request->telephone;
        $address->mobile=$request->mobile;
        $address->transferee_name=$request->transferee_name;
        $address->save();
        $address_id=$address->id;
        $factor=Factor::where('id',$request->factor_id)->first();
        dd($factor);
        $factor->address_id=$address_id;
        // $factor->sum=
        $factor->save();
        

       
    }
}
