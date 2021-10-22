@extends('layouts.main')

@section('container')
    <!-- component -->
<div class="mt-12 mb-5">
    <div class="max-w-md mx-auto lg:flex bg-white lg:shadow-lg rounded-lg lg:max-w-2xl ">
        <div class="w-full px-6 py-8">
            <div class="mb-4 font-light text-center  tracking-widest text-xl">Register</div>
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="block mb-2 text-sm text-gray-800">Name</label>
                        <input type="name" name="name" id="name" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('name') border-2 border-red-700 @enderror" autocomplete="name" placeholder="name" required value="{{ old('name') }}">
                        @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="block mb-2 text-sm text-gray-800">Username</label>
                        <input type="username" name="username" id="username" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('username') border-2 border-red-700 @enderror" autocomplete="username" placeholder="username" required value="{{ old('username') }}">
                        @error('username')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm text-gray-800">Email</label>
                        <input type="email" name="email" id="email" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('email') border-2 border-red-700 @enderror"  placeholder="example@gmail.com" required value="{{ old('email') }}">
                        @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm text-gray-800">Email</label>
                        <input type="email" name="email" id="email" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none" autocomplete="email" placeholder="examplee@gmail.com" required> --}}
                        {{-- @error('email')
                        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                        @enderror --}}
                        {{-- </div> --}}
                    <div class="mb-3">
                        <label for="password" class="block mb-2 text-sm text-gray-800">Password</label>
                        <input type="password" name="password" id="password" class="focus:border-green-500 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('password') border-2 border-red-700 @enderror" autocomplete="current-password" placeholder="password" required>
                        @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="block flex md:flex items-center justify-between">
                        <button type="submit" class="align-middle bg-green-500 hover:bg-green-400 text-center px-4 py-2 text-white text-sm font-semibold rounded-lg inline-block shadow-lg">Register</button>

                        <a class="text-gray-600 text-sm hover:text-gray-700 no-underline block" href="/login">
                            LogIn
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

    