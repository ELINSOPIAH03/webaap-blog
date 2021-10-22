@extends('dashboard.layouts.main')

@section('container')
    <main class="bg-white-300 flex-1 p-3 overflow-hidden">
        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Edit Posts</div>
            </div>
        </div>

        <div class="py-4 px-2">
            <div class=" lg:flex bg-white lg:shadow-lg rounded-lg lg:max-w-3xl ">
                <div class="w-full px-6 py-8">
                    <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="title_blog" class="block mb-2 text-sm text-gray-800">Title</label>
                            <input type="text" name="title_blog" id="title_blog" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('title_blog') border-2 border-red-700 @enderror"  placeholder="" required value="{{ old('title_blog',$post->title_blog) }}" autofocus>
                            @error('title')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="block mb-2 text-sm text-gray-800">Slug</label>
                            <input type="text" name="slug" id="slug" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('slug') border-2 border-red-700 @enderror" placeholder="" required readonly value="{{ old('slug',$post->slug) }}">
                            @error('slug')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="block mb-2 text-sm text-gray-800">Category</label>
                            <select class="w-full mt-1 rounded-md border rounded py-2 px-3 focus:border-green-500 focus:ring focus:ring-indigo-200 text-gray-700 leading-tight focus:outline-none " name="category_id" >
                                @foreach ($categories as $category)
                                    @if (old('category_id', $post->category->id)==$category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="block mb-2 text-sm text-gray-800">Post Image</label>
                            <input type="file" name="image" id="image" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('image') border-2 border-red-700 @enderror" placeholder="" onchange="previewImage()">
                            <input type="hidden" name="oldImage" value="{{ $post->image }}">
                            @if ($post->image)
                            <img src="{{ asset('storage/'.$post->image) }}" alt="404" class="img-preview w-1/2 w-1/2 mt-3">
                            @else
                                <img class="img-preview w-1/2 w-1/2 mt-3">
                            @endif

                            @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="body" class="block mb-2 text-sm text-gray-800">Body</label>
                            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                            <trix-editor input="body"></trix-editor>
                            @error('body')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="block flex md:flex items-center justify-between">
                            <button type="submit" class="align-middle bg-grey-dark hover:bg-gray-600 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">Update Post</button>
    
                            {{-- <a class="text-gray-600 text-sm hover:text-gray-700 no-underline block" href="/login">
                                LogIn
                            </a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <script>
        const title = document.querySelector('#title_blog');
        const slug = document.querySelector('#slug');
        
        title.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?title='+title.value)
            .then(response=>response.json())
            .then(data=>slug.value=data.slug)
        });

        document.addEventListener('trix-file-accept',function(e){
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector(".img-preview");

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection