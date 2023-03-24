<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Adatify</title>
</head>

<body class="bg-gray-900 font-sans
">

    {{-- Start Side Navbar  --}}
    <div>
        <div class="fixed left-0 top-0 bottom-0 w-48 bg-black p-6">
            <div>
                <a href="#">
                    <img class="w-32" src="{{ asset('storage/adatify-logo-removebg-preview.png') }}" alt="Logo" />
                </a>
            </div>

            <div>
                <ul class="list-none mt-5">
                    <li class="py-2 px-0">
                        <a class="text-gray-500 no-underline font-bold text-md hover:text-gray-300" href="#">
                            <span class="fa fa-home"></span>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="py-2 px-0">
                        <a class="text-gray-500 no-underline font-bold text-md hover:text-gray-300" href="#">
                            <span class="fa fa-search"></span>
                            <span>Search</span>
                        </a>
                    </li>

                    <li class="py-2 px-0">
                        <a class="text-gray-500 no-underline font-bold text-md hover:text-gray-300" href="#">
                            <span class="fa fas fa-book"></span>
                            <span>Your Library</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="list-none mt-5">
                    <li class="py-2 px-0">
                        <a class="text-gray-500 no-underline font-bold text-md hover:text-gray-300" href="#">
                            <span class="fa fas fa-plus-square"></span>
                            <span>Create Playlist</span>
                        </a>
                    </li>

                    <li class="py-2 px-0">
                        <a class="text-gray-500 no-underline font-bold text-md hover:text-gray-300" href="#">
                            <span class="fa fas fa-heart"></span>
                            <span>Liked Songs</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="absolute bottom-24">
                <ul class="list-none">
                    <li class="pb-1">
                        <a class="text-gray-300 font-medium no-underline text-sm hover:text-gray-500"
                            href="#">Cookies</a>
                    </li>
                    <li class="pb-1">
                        <a class="text-gray-300 font-medium no-underline text-sm hover:text-gray-500"
                            href="#">Privacy</a>
                    </li>
                </ul>
            </div>
        </div>


        {{-- End Side navBar --}}


        {{-- Start NavBar --}}

        <div class="ml-60 mb-24">
            <div class="flex justify-between bg-gray-900 py-3 px-8">
                <div class="text-gray-500 cursor-not-allowed w-8 h-8 rounded-full text-lg border-0 bg-gray-900 mr-4">
                    <button type="button" class="fa fas fa-chevron-left"></button>
                    <button type="button" class="fa fas fa-chevron-right"></button>
                </div>

                <div class="flex items-center">
                    <ul class="list-none flex items-center w-fit">

                        <li>
                            <a class="text-gray-300 no-underline font-bold text-base tracking-widest hover:text-gray-500"
                                href="/signup">Sign Up</a>
                        </li>
                    </ul>
                    <a
                        class="bg-white text-black text-base font-bold py-4 px-6 rounded-full cursor-pointer border-0 ml-5 hover:text-gray-500"
                        href="/">Log In</a>
                </div>
            </div>


            {{-- ENd NavBar  --}}
