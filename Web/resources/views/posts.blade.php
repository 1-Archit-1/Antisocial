@extends('layout')
@section('content')
<div class="bg-white w-6/12 m-4 p-6 rounded-lg">
    <form action="{{ route('posts') }}" method="POST">
        @csrf
        <label for="body" class="sr-only">Body</label>
        <textarea name="body" placeholder="post something" rows="4"  class="bg-gray-100 w-full rounded-lg border-2 m-2 p-3 
        @error('body') border-red-500 @enderror "></textarea>
        <div class="text-red-500 text-sm m-2">
        @error('body')
            {{ $message }}
        @enderror
        </div>

        <button type="submit" class="bg-blue-200 w-3/12 rounded-lg ml-2 mb-10 p-3">Post</button>
       
    </form>
    @foreach($postSet as $value)
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
    @endforeach
    {{ $postSet->links() }}
    
</div>

@endsection