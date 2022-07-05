<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    .scroll::-webkit-scrollbar {
        width: 20%;
        /* Tamaño del scroll en vertical */
        height: 200px;
        /* Tamaño del scroll en horizontal */
        color: rgb(0, 179, 119) !important;
    }

    .container::-webkit-scrollbar {
        width: 8px;
        /* Tamaño del scroll en vertical */
        height: 8px;
        /* Tamaño del scroll en horizontal */
    }
</style>

<body class="bg-gradient-to-tr from-black to-gray-900 bg-cover bg-fixed text-slate-300 scroll">
    <div class="flex justify-end pr-16 p-6 bg-gradient-to-tr from-gray-800 to-cyan-900 font-bold text-lg">
        <ol class="flex">
            <li class="px-4">
                <a href="{{ route('home') }}" class="">Home</a>
            </li>
            <li class="px-4">
                <a href="{{ route('blog') }}">Blog</a>
            </li>
            <li>
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                @endauth
            </li>
        </ol>
    </div>
    <section
        class="m-10 px-10 pb-10 pt-5 bg-gradient-to-tr from-gray-900 to-gray-700 bg-cover bg-fixed min-h-[75vh] rounded-xl rounded-t-2xl">
        @yield('content')
    </section>


    @extends('footer')




    @section('footer')
    @endsection


</body>

</html>
