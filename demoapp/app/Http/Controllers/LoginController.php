<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function __construct()
    {
        $this->middleware(['guest']);
    }
    function index()
    {
        return view('auth.login');
    }
    function store(Request $request)
    {
        $request->validate([
            
            'email' => 'required|email',
            'password' => 'required'
        ]);

        

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$request->remember))
        {
            return redirect(route('dashboard'));
        }
       
        return redirect(route('login'))->with('status',"Invalid login details");
        
        //dd(Auth::user());
        
    }
}
