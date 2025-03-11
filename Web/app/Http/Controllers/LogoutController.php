<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    function index()
    {
    }
    function store(Request $request)
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
