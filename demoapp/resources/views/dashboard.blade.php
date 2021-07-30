@extends('layout')
@section('content')
<div class="bg-white w-6/12 m-4 p-6 rounded-lg">
    <div class=" text-center text-2xl text-blue-600 mb-6">Your Posts</div>
    @foreach($postSet as $value)
        @if($value->user== Auth::user())
            <div class="bg-gray-100 w-full m-2 p-6 rounded-lg">
                <a href="" class=" text-sm m-2 font-bold">
                    {{ $value->user->username }}
                    
                </a>

                <span class="text-gray-600 text-sm m-2 ">
                    {{ $value->created_at->diffForHumans() }}
                </span>
                
                <div class="m-2">
                    {{ $value->body}}
                </div>

                <div class="flex items-center m-2">
                    @if(!$value->likedBy(Auth::user()))
                    <form action="{{ route("like",$value->id) }}" method="POST">
                        @csrf
                        <button name="like" class="text-blue-400  mr-3" type="submit">Like</button>
                    </form>
                    @else
                    <form action="{{ route("like",$value->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button name="unlike" class="text-blue-400  mr-3  " type="submit">Unlike</button>
                        
                    </form>
                    @endif
                    <span class=" text-sm">{{ $value->likes->count() }} 
                        @if ($value->likes->count()==1 )
                            Like
                        @else 
                            Likes
                        @endif
                        </span>

                    
                </div>
                
            </div>
        @endif
    @endforeach
</div>
@endsection