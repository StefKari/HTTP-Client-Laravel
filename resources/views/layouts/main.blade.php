<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MovieApp</title>
    <!-- Favicon -->
    <link rel="icon" type="text/css" sizes="32x32" href="/img/movie.png">
    <!-- Tailwindcss -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Link za awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <livewire:styles>
</head>
<body class="font-sans bg-indigo-800 text-white">

    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <img class="w-20" src="/img/movie.png" alt="MovieApp">
                    </a>
                </li>
                <li>
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">MovieAPP</a>
                </li>
                <!--<li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>-->
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}">
                        <img src="/img/me.jpeg" alt="avatar" class="rounded-full w-12 h-10">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    <livewire:scripts>
</body>
</html>
