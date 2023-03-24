<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Todo list</title>
</head>

<body class="bg-gray-900 font-sans
">

{{-- Start Side Navbar  --}}
<div>
    <div class="fixed left-0 top-0 bottom-0 w-48 bg-black p-6">
        <div>
            <a href="#">
                <img class="w-32"
                    src="{{asset('storage/adatify-logo-removebg-preview.png')}}"
                    alt="Logo" />
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
                            href="#">Sign Up</a>
                    </li>
                </ul>
                <button
                    class="bg-white text-black text-base font-bold py-4 px-6 rounded-full cursor-pointer border-0 ml-5 hover:text-gray-500"
                    type="button">Log In</button>
            </div>
        </div>


        {{-- ENd NavBar  --}}

        {{-- Start Home Items --}}

        <div class="px-5 py-10">
            <h2 class="text-white text-2xl md:text-3xl mb-4 md:mb-8">Spotify Playlists 1</h2>

            <div class="flex gap-20 overflow-hidden">
                <div
                    class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                    <img class="w-full rounded-md mb-2.5"
                        src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="relative">
                        <div
                        class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                        <span class="fa fa-play"></span>
                    </div>

                  


                    </div>
                    <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">Today's Top
                        Hits</h4>
                    <p class="text-gray-400 text-xs font-medium leading-5
          ">Rema & Selena Gomez are on top of
                        the...</p>
                </div>

                <div
                    class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                    <img class="w-full rounded-md mb-2.5"
                        src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                    <div class="relative ">
                        <div
                            class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                            <span class="fa fa-play"></span>
                        </div>
                    </div>
                    <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">RapCaviar
                    </h4>
                    <p class="text-gray-400 text-xs font-medium leading-5
          ">New Music from Lil Baby, Juice
                        WRLD an...</p>
                </div>

            </div>
        </div>

       




        <div class="px-5 py-10">
          <h2 class="text-white text-2xl md:text-3xl mb-4 md:mb-8">Spotify Playlists 2</h2>

          <div class="flex gap-20 overflow-hidden">
              <div
                  class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                  <img class="w-full rounded-md mb-2.5"
                      src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                  <div class="relative">
                    <div
                    class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                    <span class="fa fa-play"></span>
                </div>
                  </div>
                  <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">Today's Top
                      Hits</h4>
                  <p class="text-gray-400 text-xs font-medium leading-5
        ">Rema & Selena Gomez are on top of
                      the...</p>
              </div>

              <div
                  class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                  <img class="w-full rounded-md mb-2.5"
                      src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                  <div class="relative ">
                      <div
                          class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                          <span class="fa fa-play"></span>
                      </div>
                  </div>
                  <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">RapCaviar
                  </h4>
                  <p class="text-gray-400 text-xs font-medium leading-5
        ">New Music from Lil Baby, Juice
                      WRLD an...</p>
              </div>






          </div>
      </div>








      <div class="px-5 py-10">
        <h2 class="text-white text-2xl md:text-3xl mb-4 md:mb-8">Spotify Playlists 3</h2>

        <div class="flex gap-20 overflow-hidden">
            <div
                class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                <img class="w-full rounded-md mb-2.5"
                    src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                <div class="relative">
                  <div
                  class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                  <span class="fa fa-play"></span>
              </div>
                </div>
                <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">Today's Top
                    Hits</h4>
                <p class="text-gray-400 text-xs font-medium leading-5
      ">Rema & Selena Gomez are on top of
                    the...</p>
            </div>

            <div
                class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
                <img class="w-full rounded-md mb-2.5"
                    src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                <div class="relative ">
                    <div
                        class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                        <span class="fa fa-play"></span>
                    </div>
                </div>
                <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">RapCaviar
                </h4>
                <p class="text-gray-400 text-xs font-medium leading-5
      ">New Music from Lil Baby, Juice
                    WRLD an...</p>
            </div>






        </div>
    </div>







    <div class="px-5 py-10">
      <h2 class="text-white text-2xl md:text-3xl mb-4 md:mb-8">Spotify Playlists 3</h2>

      <div class="flex gap-20 overflow-hidden">
          <div
              class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
              <img class="w-full rounded-md mb-2.5"
                  src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
              <div class="relative">
                <div
                class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                <span class="fa fa-play"></span>
            </div>
              </div>
              <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">Today's Top
                  Hits</h4>
              <p class="text-gray-400 text-xs font-medium leading-5
    ">Rema & Selena Gomez are on top of
                  the...</p>
          </div>

          <div
              class="min-w-36 w-40 px-4 py-3 bg-gray-900 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-gray-800">
              <img class="w-full rounded-md mb-2.5"
                  src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
              <div class="relative ">
                  <div
                      class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                      <span class="fa fa-play"></span>
                  </div>
              </div>
              <h4 class="text-white text-sm mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">RapCaviar
              </h4>
              <p class="text-gray-400 text-xs font-medium leading-5
    ">New Music from Lil Baby, Juice
                  WRLD an...</p>
          </div>






      </div>
  </div>


       







</div>

    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>

</html>
