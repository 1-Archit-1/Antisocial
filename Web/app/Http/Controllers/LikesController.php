<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function store($id,Request $request){
        //dd("OK");

       $post=Post::find($id);
       $post->likes()->create(["post_id"=>$id,"user_id"=>$request->user()->id]);
       return back();
    }
    public function unstore($id,Request $request)
    {
        $request->user()->likes()->where('post_id',$id)->first()->delete();
        return back();
    }
}
