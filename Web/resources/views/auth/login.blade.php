@extends('layout')
@section('content')
<div class="bg-white w-4/12 m-4 p-6 rounded-lg ">
    <div class="flex justify-center">Login</div>
    <br>
    <form action="{{route('login')}}"  method="post">
        @csrf
        
            @if(  session('status'))
            <div class="mb-3 p-3 bg-red-100 rounded-lg">
                {{ session('status')}}
            </div>
            @endif


      
        <div class= "mb-4 ">
            <label for="email" class="sr-only">Email</label>
            <input type="text" name="email" id ="email" placeholder="Enter email address" class="mb-4 p-4 border-2 w-full bg-gray-50 rounded-lg
            @error('email') border-red-500 @enderror"  value="{{old('email')}}">
         @error('email')
            <div class="text-red-500 text-sm">
                {{$message}}
            </div>    
        @enderror

        </div>

        <div class= "mb-4 ">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id ="password" placeholder="Enter password" class="mb-4 p-4 border-2 w-full bg-gray-50 rounded-lg
            @error('password') border-red-500 @enderror">
            @error('password')
            <div class="text-red-500 text-sm">
                {{$message}}
            </div>    
            @enderror

        </div>
        <div class="mb-2">
            <input class="m-2" type="checkbox" name="remember" ><label for= "remember">Remember me</label>
        </div>

        <div class="mb-4">

            <button type="submit" name="login" class="border-2 p-4 rounded-lg bg-red-400">Login</button>
        </div>

</div>
@endsection