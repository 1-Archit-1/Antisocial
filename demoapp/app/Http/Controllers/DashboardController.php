<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    function index(Request $request)
    {
        $x=$request->user()->posts()->latest()->Paginate(10);
        
        return view('dashboard',['postSet'=>$x]);
    }
}
