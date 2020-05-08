<?php

namespace App\Http\Controllers;
use App\Model\Posts;
use App\Model\Tags;
use App\Model\Taggables;



use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts=Posts::simplepaginate(3);
        $recentposts=Posts::orderBy('created_at','DESC')->take(3)->get();
        return view ("weblog",compact('posts','recentposts'));   
    }

    public function SimplePostShow($title,$id)
    {
        $post=Posts::where('id',$id)->first();
        $recentposts=Posts::orderBy('created_at','DESC')->take(3)->get();
        return view ("weblog-single",compact('post','recentposts'));   
    }

    
    public function ShowTagPosts($id)
    {
        $tag=Tags::findOrFail($id);
     
        $posts=$tag->posts()->simplepaginate(3);
        $recentposts=Posts::orderBy('created_at','DESC')->take(3)->get();
        return view ("weblog",compact('posts','recentposts'));   
    }

}
