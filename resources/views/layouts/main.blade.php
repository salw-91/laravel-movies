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


    <link rel="stylesheet" href="/resources/css/app.css">
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
                <div class="relative mt-3 md:mt-0">
                    <input type="text"
                        class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                        placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="text-gray-400 h-4 w-4 fill-current mt-2 ml-2" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </div>
                </div>

<div class="md:ml-4 mt-3 md:mt-0">
    <a href="">
        <img class="rounded-full w-8 h-8" src="https://www.kegel8.co.uk/media/wysiwyg/Kegel8/cms/blog/wp/wp-content/uploads/2019/Avatar.jpg" alt="">
    </a>
</div>

            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
