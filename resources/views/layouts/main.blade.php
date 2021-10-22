<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- my style --}}
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

    <title>Blog App | {{ $title }}</title>
</head>
<body>
    <!-- Navbar goes here -->
		@include('partials.navbar')

        <div class="max-w-6xl mx-auto px-4">
            @yield('container')
        </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/259c9d2829.js" crossorigin="anonymous"></script>
</body>
</html>