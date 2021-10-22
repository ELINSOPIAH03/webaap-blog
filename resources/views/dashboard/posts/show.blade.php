@extends('dashboard.layouts.main')

@section('container')
<div class="max-w-md mx-auto bg-balck overflow-hidden md:max-w-3xl my-3">
    <h1 class="text-3xl">{{ $post->title_blog }}</h1><br>
    <div class="">
        <a href="/dashboard/posts" class="bg-green-600 hover:bg-green-700 text-white py-1 px-3 rounded">
            <i class="fas fa-long-arrow-alt-left"></i> Back to all my post
        </a>&nbsp;
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded">
            <i class="fas fa-edit "></i> Edit
        </a>&nbsp;
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="inline">
            @method('delete')
            @csrf
            <button class="focus:outline-none bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded" onclick="return confirm('Are you sure ?')">
                <i class="fas fa-trash "></i> Delete
            </button>
        </form>
    </div>
    
    @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img class="h-48 w-screen object-cover md:h-full md:w-screen my-3" src="{{ asset('storage/'.$post->image) }}"/>
        </div>
    @else
        <div class="">
            <img class="h-48 w-screen object-cover md:h-full md:w-screen my-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"/>
        </div>
    @endif


    {{-- kalo misal {{  }} itu tidak akan mengeksekusi tag html didalm nya 
    tapi lebih aman--}}

    {{-- {{ $post->body}}  --}}

    {{-- klo mau supaya tag html nya kebaca itu pake {!!  !!} tapi hati hati
    harus teliti dengan tag yang ada didalm nya--}}
    {!! $post->body !!}
    
</div>
@endsection