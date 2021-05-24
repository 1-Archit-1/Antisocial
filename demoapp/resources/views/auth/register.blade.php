@extends('layout')
@section('content')
<div class="bg-white w-4/12 m-4 p-6 rounded-lg ">
    <div class="flex justify-center">Register</div>
    <br>
    <form action="{{route('register')}}"  method="post">
        @csrf
        <div class= "mb-4 ">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id ="name" placeholder="Enter name" class="mb-4 p-4 border-2 w-full bg-gray-50 rounded-lg" value="{{old('name')}}">
            @error('name')
                <div class="text-red-500 text-sm">
                    {{$message}}
                </div>    
            @enderror

        </div>
        <div class= "mb-4 ">
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id ="username" placeholder="Enter username" class="mb-4 p-4 border-2 w-full bg-gray-50 rounded-lg" value="{{old('username')}}">
            @error('username')
                <div class="text-red-500 text-sm">
                    {{$message}}
                </div>    
            @enderror

        </div>
        <div class= "mb-4 ">
            <label for="email" class="sr-only">Email</label>
            <input type="text" name="email" id ="email" placeholder="Enter email address" class="mb-4 p-4 border-2 w-full bg-gray-50 rounded-lg"  value="{{old('email')}}">
         @error('email')
            <div class="text-red-500 text-sm">
                {{$message}}
            </div>    
        @enderror

        </div>

        <div class= "mb-4 ">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id ="password" placeholder="Enter password" class="mb-4 p-4 border-2 w-full bg-gray-50 rounded-lg">
            @error('password')
            <div class="text-red-500 text-sm">
                {{$message}}
            </div>    
        @enderror

        </div>

        <div class= "mb-4 ">
            <label for="password_confirmation" class="sr-only">Password</label>
            <input type="password" name="password_confirmation" id ="password_confirmation" placeholder="Confirm your password" class="mb-4 p-4 border-2 w-full bg-gray-50 rounded-lg">


        </div>
        <button type="submit" class="bg-blue-500 border-2 p-2 rounded-lg ">Register</button>

        
    </form>

</div>
@endsection