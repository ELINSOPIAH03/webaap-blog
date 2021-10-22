@extends('layouts.main')

@section('container')
    {{-- <h1 class="text-3xl my-2">Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p> --}}
    {{-- ini ambil dari routes web.php --}}
    {{-- <main class="profile-page my-2"> --}}
    <!-- component -->


<main class="profile-page">
    <section class="relative block h-500-px">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                background-image: url('https://cdn.dribbble.com/users/3056637/screenshots/16608062/media/539b01c22faaa7b432f17794bef623d5.png?compress=1&resize=1200x900');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="relative py-px bg-blueGray-200">
        <div class="container mx-auto">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                            <div class="relative">
                                <img alt="404" src="img/user.png" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-28">
                        <h4 class="text-3xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">Elin Sopiah</h4>
                        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                            <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>Indonesia, Bogor
                        </div>
                        <div class="mb-2 text-blueGray-600 mt-10">
                            <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>Student
                        </div>
                        <div class="mb-2 text-blueGray-600">
                            <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>ARS University - Technical Information
                        </div>
                    </div>
                    <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-9/12 px-4">
                                <p class="mb-4 text-sm leading-relaxed text-blueGray-700">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quaerat aliquam exercitationem soluta sed laborum vero, fuga quo, consequatur corrupti sequi. Nemo ad ipsum, tempore neque aperiam fugit non sequi et nisi deleniti placeat illo numquam obcaecati optio accusantium voluptas!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

    