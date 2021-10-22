@extends('layouts.main')

@section('container')
    <div class="max-w-md mx-auto bg-balck overflow-hidden md:max-w-3xl my-3">
        <h1 class="text-3xl">{{ $post->title_blog }}</h1><br>
        <p>By : <a href="/blog?author={{ $post->author->username }}">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="hover:text-gray-600">{{ $post->category->name }}</p></a>
        
        
        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img class="h-48 w-screen object-cover md:h-full md:w-screen my-3" src="{{ asset('storage/'.$post->image) }}"/>
        </div>
    @else
        <img class="h-48 w-screen object-cover md:h-full md:w-screen my-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
    @endif

            {{-- kalo misal {{  }} itu tidak akan mengeksekusi tag html didalm nya 
            tapi lebih aman--}}

            {{-- {{ $post->body}}  --}}

        {{-- klo mau supaya tag html nya kebaca itu pake {!!  !!} tapi hati hati
        harus teliti dengan tag yang ada didalm nya--}}
        {!! $post->body !!}
        <p class="my-5"><a href="/blog" class="text-sm hover:text-gray-600 ">Back To Posts</a></p>
    </div>
    
@endsection