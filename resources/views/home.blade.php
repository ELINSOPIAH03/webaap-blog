@extends('layouts.main') {{-- ini manggil file yang layouts view --}}

@section('container')

    {{-- <h1 class="text-3xl font-semibold md:font-bold my-2">Halaman Home</h1> --}}
    <div class="container flex flex-col md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6">
        <div class="flex flex-col items-center w-full md:flex-row md:w-2/5">
            <div class="max-w-lg md:mx-12 md:order-2">
                <h1 class="text-3xl font-medium tracking-wide text-gray-500 dark:text-white md:text-5xl">Welcome in Blog App !</h1>
                <p class="mt-6 mb-6 text-gray-600 dark:text-gray-300">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut quia asperiores alias vero magnam recusandae adipisci ad vitae laudantium quod rem voluptatem eos accusantium cumque.</p>
                {{-- <div class="mt-6">
                    <a href="#" class="block px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md md:inline hover:bg-blue-400">Download from App Store</a>
                </div> --}}
            </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 md:w-3/5">
            <img class="object-cover w-full h-full max-w-2xl rounded-md" src="https://cdn.dribbble.com/users/5196/screenshots/16691390/media/ea838f40bd21cbffdfe6ae6699f8028b.png?compress=1&resize=1200x900" alt="404">
        </div>
    </div>

@endsection
        