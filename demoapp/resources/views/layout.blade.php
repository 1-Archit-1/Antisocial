<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="bg-gray-200">
        <nav class = "p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                @if(Auth::user())
                <li>
                    <a href="{{route('home')}}" class="p-3"> Home</a>
                </li>
                
                <li>
                    <a href="{{ route( 'dashboard') }}" class="p-3"> Dashboard</a>
                </li>
                
                <li>
                    <a href="{{ route( 'posts') }}" class="p-3"> Post</a>
                </li>
                @endif
                
            </ul>
            <ul class="flex items-center">
                @if(Auth::user())
                <li>
                    <a href="" class="p-3"> {{ Auth::user()->name }}</a>
                </li>
                <li>
                    <form action="{{  route('logout')}}" method="POST" class="p-3">
                        @csrf
                        <button name="logout" type="submit">Logout</button>
                    </form>
                </li>
                
                @else
                
                <li>
                    <a href="{{route('login')}}" class="p-3"> Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="p-3"> Register</a>
                </li>
                @endif
                
            </ul>

        </nav>
        <nav class="flex justify-center">
            @yield('content')
        </nav>
        
    </body>
</html>
