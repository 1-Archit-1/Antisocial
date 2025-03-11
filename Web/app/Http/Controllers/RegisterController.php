<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function __construct()
    {
        $this->middleware(['guest']);
    }
    function index()
    {
        return view('auth.register');
    }
    function store(Request $request)
    {
        $request->validate(['name'=>'required|max:255',
        'username'=>'required|max:255',
        'email'=>'required|email',
        'password'=>'required|confirmed']);
        
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)

        ]);

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        //dd(Auth::user());
        return redirect(route('dashboard'));
    }
}
