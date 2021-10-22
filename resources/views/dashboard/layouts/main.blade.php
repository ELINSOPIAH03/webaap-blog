<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/all.css">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none; 
        }
    </style>

    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet"> --}}
    <title>Dashboard | Blog App</title>
</head>

<body>
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        @include('dashboard.layouts.header')
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            @include('dashboard.layouts.sidebar')
            <!--/Sidebar-->
            <!--Main-->
                @yield('container')
            <!--/Main-->
        </div>
        

    </div>

</div>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://kit.fontawesome.com/259c9d2829.js" crossorigin="anonymous"></script>
</body>

</html>