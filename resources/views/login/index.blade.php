@extends('layouts.main')

@section('container')
    <!-- component -->
<div class="mt-16 mb-5">

    @if (session()->has('success'))
        <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 lg:max-w-2xl">
            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
            </svg>
            <span class="text-green-800"> {{ session('success') }} </span>
        </div>
    @endif 

    @if (session()->has('loginError'))
        <div class="bg-red-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 lg:max-w-2xl">
            <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor" d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"></path>
            </svg>
            <span class="text-red-800"> {{ session('loginError') }} </span>
        </div>
    @endif 

    <div class="max-w-md mx-auto lg:flex bg-white lg:shadow-lg rounded-lg lg:max-w-2xl lg:max-h-96">
        <div class="w-full lg:w-1/2 flex lg:border-r border-gray-200">
            <img src="https://source.unsplash.com/500x700/?random" alt="" class="hidden lg:block lg:h-auto lg:rounded-l-lg lg:w-full">
        </div>
        {{-- mobile --}}
        <div class="md:hidden flex justify-center">
            <img src="https://source.unsplash.com/random" alt="" class="block h-40 w-40 rounded-full">
        </div>

        <div class="w-full lg:w-2/3 px-6 py-16">
            <div class="mb-4 font-light tracking-widest text-2xl">LogIn</div>
            <form action="/login" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm text-gray-800">Email</label>
                    <input type="email" name="email" id="email" class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('email') border-2 border-red-700 @enderror" autocomplete="email" autofocus required value="{{ old('email') }}"">
                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm text-gray-800">Password</label>
                    <input type="password" name="password" id="password" class="focus:border-blue-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('password') border-2 border-red-700 @enderror" autocomplete="current-password" required>
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <div class="block flex items-center justify-around">
                    <button type="submit" class="align-middle bg-green-500  hover:bg-green-400 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">LogIn</button>

                    <a class="text-gray-600 text-sm hover:text-gray-700 no-underline block" href="/register">
                        Register Now
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

    