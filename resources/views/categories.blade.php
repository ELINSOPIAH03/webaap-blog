@extends('layouts.main')

@section('container')
<h1 class="text-3xl my-2">Post Categories</h1><br>

    <div class="grid gap-4 lg:grid-cols-3 my-6">
        @foreach ($category as $categories)
        {{-- <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-xl">
            <div class="absolute bg-indigo-500  bg-opacity-50 rounded ">
                <a href="/categories/{{ $categories->slug }}" class=" font-medium m-4 text-black hover:text-gray-300">{{ $post->category->name }}</a>
            </div>
        </div> --}}
        <div>
            <p class="text-2xl  font-medium text-center my-3"><a href="/blog?category={{ $categories->slug }}" class="hover:text-gray-400">{{ $categories->name }}</a> </p>
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-xl">
                <a href="/blog?category={{ $categories->slug }}"><img class="h-30 w-full object-cover md:h-50 md:w-full hover:opacity-75" src="https://source.unsplash.com/400x300?{{ $categories->name }}" alt="{{ $categories->name }}"></a>
            </div>
        </div>
        @endforeach
    </div>
    
    {{-- <ul> 
        <li>
            <p class="text-2xl">
                <a href="/categories/{{ $categories->slug}}" class="no-underline hover:text-gray-600">{{ $categories->name }}</a>
            </p>
        </li>
    </ul> --}}
        
    
@endsection

