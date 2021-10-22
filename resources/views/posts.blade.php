@extends('layouts.main')

@section('container')

<h1 class="text-3xl my-3">{{ $title }}</h1>

<div class="flex items-end justify-end  m-4">
    <form action="/blog">
        @if (request('category'))
            <input type="hidden"  name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden"  name="author" value="{{ request('author') }}">
        @endif
        <div class="flex border-2 rounded">
            <input type="text" class="px-4 py-2 w-80" placeholder="Search..." name="search" value="{{ request('search') }}">
            <button type="submit" class="flex items-center rounded justify-center px-4 border-l bg-green-500 hover:bg-green-400">
                <i class="fas fa-search text-white fa-lg" color=""></i>
            </button>
        </div>
    </form>
</div>

@if ($posts->count())
    <div class="grid gap-4 lg:grid-cols-2">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-xl">
            <div class="md:flex">
                {{-- <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://source.unsplash.com/500x600?{{ $posts[0]->category->name }}" alt="Man looking at item at a store">
                </div> --}}
                @if ($posts[0]->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img class="h-48 w-screen object-cover md:h-full md:w-screen my-3" src="{{ asset('storage/'.$posts[0]->image) }}" alt="Man looking at item at a store"/>
                    </div>
                @else
                    <div class="md:flex-shrink-0">
                        <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://source.unsplash.com/500x600?{{ $posts[0]->category->name }}" alt="Man looking at item at a store">
                    </div>
                @endif
                <div class="p-8">
                    <a href="/blog/{{ $posts[0]->slug}}" class="block text-lg leading-tight font-medium text-black hover:text-gray-600">{{ $posts[0]->title_blog }}</a>
                    <div class="mt-1 tracking-wide text-sm text-indigo-500 font-semibold">By.
                        <a href="/blog?author={{ $posts[0]->author->username }}" class="hover:text-gray-600">{{ $posts[0]->user->name }}</a>
                        in <a href="/blog?category={{ $posts[0]->category->slug }}" class="hover:text-gray-600">{{ $posts[0]->category->name }}</a>
                    </div>
                    <p class="mt-2 text-gray-500">{{ $posts[0]->excerpt}}<a href="/blog/{{ $posts[0]->slug}}">Read more...</a></p>
                    <p class="text-sm mt-2 text-gray-500 text-right">{{ $posts[0]->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
        {{-- <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-xl">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://source.unsplash.com/500x600?{{ $posts[0]->category->name }}" alt="Man looking at item at a store">
                </div>
                <div class="p-8">
                    <a href="/blog/{{ $posts[1]->slug}}" class="block text-lg leading-tight font-medium text-black hover:text-gray-600">{{ $posts[1]->title_blog }}</a>
                    <div class="mt-1 tracking-wide text-sm text-indigo-500 font-semibold">By.
                        <a href="/authors/{{ $posts[1]->author->username }}" class="hover:text-gray-600">{{ $posts[1]->user->name }}</a>
                        in <a href="/categories/{{ $posts[1]->category->slug }}" class="hover:text-gray-600">{{ $posts[1]->category->name }}</a>
                    </div>
                    <p class="mt-2 text-gray-500">{{ $posts[1]->excerpt}}<a href="/blog/{{ $posts[1]->slug}}">Read more...</a></p>
                    <p class="text-sm mt-2 text-gray-500 text-right">{{ $posts[1]->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div> --}}
        
    </div>


    <div class="grid gap-4 lg:grid-cols-3 my-6">
        @foreach ($posts->skip(1) as $post)
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-xl">
            <div class="absolute bg-indigo-500  bg-opacity-50 rounded ">
                <a href="/blog?category={{ $post->category->slug }}" class=" font-medium m-4 text-white hover:text-gray-300">{{ $post->category->name }}</a>
            </div>
            @if ($post->image)
                <img class="h-50 w-full object-cover md:h-50 md:w-full" style="max-height: 270px; overflow:hidden;" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}">
            @else
                <img class="h-50 w-full object-cover md:h-50 md:w-full" src="https://source.unsplash.com/400x300?{{ $post->category->name }}" alt="{{ $post->category->name }}">
            @endif
            {{-- <img class="h-50 w-full object-cover md:h-50 md:w-full" src="https://source.unsplash.com/400x300?{{ $post->category->name }}" alt="{{ $post->category->name }}"> --}}
            <div class="p-6">
                <a href="/blog/{{ $post->slug}}" class="block text-lg leading-tight font-medium text-black hover:text-gray-600">{{ $post->title_blog }}</a>
                <div class="mt-1 tracking-wide text-sm text-indigo-500 font-semibold">By.
                    <a href="/blog?author={{ $post->author->username }}" class="hover:text-gray-600">{{ $post->user->name }}</a>
                    in <a href="/blog?category={{ $post->category->slug }}" class="hover:text-gray-600">{{ $post->category->name }}</a>
                </div>
                <p class="mt-2 text-gray-500">{{ $post->excerpt}}<a href="/blog/{{ $post->slug}}">Read more...</a></p>
                <p class="text-sm mt-2 text-gray-500 text-right">{{ $post->created_at->diffForHumans() }}</p>
            </div>
        </div>
        @endforeach
    </div>

    @else
        <p class="text-3xl my-3">Not post found.</p>
    @endif

    {{ $posts->links() }}
@endsection

