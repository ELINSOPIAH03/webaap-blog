@extends('dashboard.layouts.main')

@section('container')
    <main class="bg-white-300 flex-1 p-3 overflow-hidden">
        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Wellcome back, {{ auth()->user()->name }}</div>
            </div>
        </div>
    </main>
@endsection