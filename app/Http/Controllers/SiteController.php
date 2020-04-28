<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Photoes;
use App\Model\Factor_Product;
use App\Model\Factor;
use App\Model\Taggables;
use App\Query;
use App\Model\Roles;
use Illuminate\Support\Facades\DB;



class SiteController extends Controller
{
    public function ShowHomepage()
    {
        $BestSoldProduct_id = Query::BestSoldeAllProducts();
        $BestSoldProduct=array();
            
        foreach($BestSoldProduct_id as $product_id)
        {
            array_push($BestSoldProduct,Product::where('id',$product_id->product_id)->first()); 
        }
      
        $MostPopularProduct_id = Query::MostPopularAllProduct();
        $MostPopularProduct=array();
            
        foreach($MostPopularProduct_id as $product_id)
        {
            array_push($MostPopularProduct,Product::where('id',$product_id->rateable_id)->first()); 
        }

        return view('home',compact('BestSoldProduct','MostPopularProduct'));
    }

    //Best Sold Products Based On Category
    public function SortByCategory(Request $request)
    {    
        $result=array();
     
        $BestSoldeselectedCategory_id=Query::BestSoldeAllProducts();

            if($request->id!=null)
            { 
                foreach($BestSoldeselectedCategory_id as $product_id)
                {
                    $product=Product::where('id',$product_id->product_id)->where('category_id','=',$request->id)->first();

                    if($product)
                        array_push($result,$product); 
                }
            }
            else
            {
                foreach($BestSoldeselectedCategory_id as $product_id)
                {
                    $product=Product::where('id',$product_id->product_id)->first();

                    if($product)
                        array_push($result,$product); 
                }
            }
            $path=array();
            $i=0;
            foreach($result as $item)
            {
                $path[$i]=Photoes::Where('imageable_id',$item->id)->first()->path;
                $i++;
            }
        return response()->json(array('result'=>$result,'path'=>$path));
    }


    public function ShowCategory($name , $id)
    {    
        $product_id=Product::where('category_id', $id)->get();
        return view ('product.category',compact('product_id'));
    }

    //---------------------------------------------------
    public function ShowSubcategory($category ,$name ,$id)
    {
    
        $product=Product::where('id', $id)->get();
            return view ('Product.subcategory',compact('product'));
    }

    public function aboutus()
    {
        return view ("aboutus");   
    }
    public function contactus()
    {
        return view ("contactus");   
    }
    public function weblog()
    {
        return view ("weblog");   
    }
}
