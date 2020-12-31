<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    {{-- tailwind --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/156ac59753.js" crossorigin="anonymous"></script>

    <!-- livewire -->
    @livewireStyles

    <link rel="stylesheet" href="/resources/css/app.css">
    {{-- Alpine JS --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="contaner mx-auto flex flex-col md:flex-row items-center justify-between px-16 py-4">
            <ul class="flex flex-col md:flex-row items-center">
                <a href="/">
                    <i class="fas fa-film fa-lg"> Movie App</i>
                </a>

                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="">
                        <img class="rounded-full w-8 h-8" src="https://www.kegel8.co.uk/media/wysiwyg/Kegel8/cms/blog/wp/wp-content/uploads/2019/Avatar.jpg" alt="">
                    </a>
                </div>

            </div>
        </div>
    </nav>
    @yield('content')
    @livewireScripts

</body>

</html>