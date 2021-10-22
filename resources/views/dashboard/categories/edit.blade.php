@extends('dashboard.layouts.main')

@section('container')
    <main class="bg-white-300 flex-1 p-3 overflow-hidden">
        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Edit Category</div>
            </div>
        </div>

        <div class="py-4 px-2">
            <div class=" lg:flex bg-white lg:shadow-lg rounded-lg lg:max-w-2xl ">
                <div class="w-full px-6 py-8">
                    <form method="post" action="/dashboard/categories/{{ $category->slug }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="block mb-2 text-sm text-gray-800">Nama Category</label>
                            <input type="text" name="name" id="name" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('name') border-2 border-red-700 @enderror"  placeholder="" required value="{{ old('name', $category->name) }}" autofocus>
                            @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="block mb-2 text-sm text-gray-800">Slug</label>
                            <input type="text" name="slug" id="slug" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('slug') border-2 border-red-700 @enderror" placeholder="" required readonly value="{{ old('slug',$category->slug) }}">
                            @error('slug')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>                        
                        <div class="block flex md:flex items-center justify-between">
                            <button type="submit" class="align-middle bg-grey-dark hover:bg-gray-600 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">Update Category</button>
    
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
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');
        
        name.addEventListener('change', function(){
            fetch('/dashboard/categories/checkSlug?name='+name.value)
            .then(response=>response.json())
            .then(data=>slug.value=data.slug)
        });

        // document.addEventListener('trix-file-accept',function(e){
        //     e.preventDefault();
        // })

        // function previewImage() {
        //     const image = document.querySelector("#image");
        //     const imgPreview = document.querySelector(".img-preview");

        //     imgPreview.style.display = 'block';

        //     const oFReader = new FileReader();
        //     oFReader.readAsDataURL(image.files[0]);
            
        //     oFReader.onload = function(oFREvent) {
        //         imgPreview.src = oFREvent.target.result;
        //     }
        // }

    </script>
@endsection