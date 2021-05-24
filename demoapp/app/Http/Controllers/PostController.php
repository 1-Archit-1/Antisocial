<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    function index()
    {
        $x=Post::latest()->Paginate(2);
        
        return view('posts',['postSet'=>$x]);
    }
    function store(Request $request)
    {
        $request->validate([
            'body'=>'required'
        ]);
        $request->user()->posts()->create(['body' => $request->body]);
        return back();   
        
    }
}
