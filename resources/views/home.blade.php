@extends('layouts.mainPage')

@section('titlePage')
    Home Page
@endsection

@section('content')
    <div class="px-5 py-10">
        <h2 class="text-black text-2xl md:text-3xl mb-4 md:mb-8">Spotify Playlists 1</h2>

        <div class="flex gap-20 overflow-hidden">
            <div
                class=" min-w-36 w-40 px-4 py-3 bg-gray-300 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                <img class="w-full rounded-md mb-2.5"
                    src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                <div class="relative">
                    <div
                        class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                        <span class="fa fa-play"></span>
                    </div>




                </div>
                <h4 class="text-gray-700 text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">Today's Top
                    Hits</h4>
                <p class="text-gray-500 text-xs font-medium leading-5
  ">Rema & Selena Gomez are on top of
                    the...</p>
            </div>



        </div>
    </div>






    <div class="px-5 py-10">
        <h2 class="text-black text-2xl md:text-3xl mb-4 md:mb-8">Spotify Playlists 2</h2>

        <div class="flex gap-20 overflow-hidden">
            <div
            class=" min-w-36 w-40 px-4 py-3 bg-gray-300 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
            <img class="w-full rounded-md mb-2.5"
                src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
            <div class="relative">
                <div
                    class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                    <span class="fa fa-play"></span>
                </div>




            </div>
            <h4 class="text-gray-700 text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">Today's Top
                Hits</h4>
            <p class="text-gray-500 text-xs font-medium leading-5
">Rema & Selena Gomez are on top of
                the...</p>
        </div>








        </div>
    </div>








    <div class="px-5 py-10">
        <h2 class="text-black text-2xl md:text-3xl mb-4 md:mb-8">Spotify Playlists 3</h2>

        <div class="flex gap-20 overflow-hidden">
            <div
                class=" min-w-36 w-40 px-4 py-3 bg-gray-300 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                <img class="w-full rounded-md mb-2.5"
                    src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                <div class="relative">
                    <div
                        class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                        <span class="fa fa-play"></span>
                    </div>




                </div>
                <h4 class="text-gray-700 text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">Today's Top
                    Hits</h4>
                <p class="text-gray-500 text-xs font-medium leading-5
  ">Rema & Selena Gomez are on top of
                    the...</p>
            </div>
        @endsection
