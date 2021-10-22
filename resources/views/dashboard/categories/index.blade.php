@extends('dashboard.layouts.main')

@section('container')
    <main class="bg-white-300 flex-1 p-3 overflow-hidden">
        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Post Categories</div>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto">
                <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                    <path fill="currentColor" d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"></path>
                </svg>
                <span class="text-green-800"> {{ session('success') }} </span>
            </div>
        @endif 
        
        <div class="flex px-2 py-2">
            <a href="/dashboard/categories/create" class="text-sm font-medium px-4 py-2 leading-none border rounded text-white bg-grey-dark border-gray hover:bg-gray-800 mt-4 lg:mt-0">Create new category</a>
        </div>


        <div class="rounded overflow-hidden shadow bg-white mx-2 w-1/2">
            <div class="table-responsive">
                <table class="table text-grey-darkest">
                    <thead class="bg-grey-dark text-white text-normal">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th> {{-- lopp iteration bawaa laravel --}}
                            <td>{{ $category->name }}</td>
                            <td> 
                                {{-- <a href="/dashboard/categories/{{ $category->slug }}"><i class="fas fa-eye mx-2 text-info"></i></a> --}}
                                <a href="/dashboard/categories/{{ $category->slug }}/edit"><i class="fas fa-edit mx-2 text-warning"></i></a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="inline">
                                    @method('delete')
                                    @csrf
                                    <button class="focus:outline-none" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash-alt mx-2" style="color:red" ></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection