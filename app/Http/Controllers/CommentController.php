<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comments;

class CommentController extends Controller
{
    
    public function StoreScore(Request $request)
    {
        // dd($request->score);
        if($request->score)
         {    $CurrentUserId=$request->user()->id;
            $product_id=$request->id;
            $score=$request->score;
            Comments::StoreScore( $CurrentUserId,$product_id,$score);
            return response()->json(['score'=>$score]);
         }
         else 
            return response()->json();
        
    }

    public function StoreComment(Request $request)
    {
      //   dd($request);
        if($request->comment)
         {  
            $CurrentUserId=$request->user()->id;
            $product_id=$request->id;
            $comment=$request->comment;
            Comments::StoreComment( $CurrentUserId,$product_id,$comment);
            return response()->json(['comment'=>$comment]);
         }
         else 
            return response()->json();
        
    }
   
}
