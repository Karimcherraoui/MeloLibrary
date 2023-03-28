<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title> @yield('titlePage') </title>
</head>

<body class="bg-gray-200 font-sans
">

{{-- Start Side Navbar  --}}
<div>
    <div class="fixed left-0 top-0 bottom-0 w-48 bg-gray-700 p-6">
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
                    <a class="text-white no-underline font-bold text-md hover:text-gray-500" href="#">
                        <span class="fa fa-home"></span>
                        <span>Home</span>
                    </a>
                </li>

                <li class="py-2 px-0">
                    <a class="text-white  no-underline font-bold text-md hover:text-gray-500" href="#">
                        <span class="fa fa-search"></span>
                        <span>Search</span>
                    </a>
                </li>

                <li class="py-2 px-0">
                    <a class="text-white  no-underline font-bold text-md hover:text-gray-500" href="#">
                        <span class="fa fas fa-book"></span>
                        <span>Your Library</span>
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <ul class="list-none mt-5">
                <li class="py-2 px-0">
                    <a class="text-white no-underline font-bold text-md hover:text-gray-500" href="#">
                        <span class="fa fas fa-plus-square"></span>
                        <span>Create Playlist</span>
                    </a>
                </li>

                <li class="py-2 px-0">
                    <a class="text-white  no-underline font-bold text-md hover:text-gray-300" href="#">
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

    <div class="ml-48 mb-24">
        <div class="flex justify-between bg-gray-400 py-3 px-8">
            <div class="text-gray-500 cursor-not-allowed w-8 h-8 rounded-full text-lg border-0 bg-gray-400 mr-4 ">
              <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
              type="search" name="search" placeholder="Search">
            </div>
            
            @auth
            
        <div class="flex ">
@if (auth()->user()->isAdmin == '1')
<a class="text-gray-700 text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105"
href="{{ asset('/admin/dashboard') }}"><i class="fa-solid fa-gear "
style="color: #ffffff;"></i>dashboard</a>
@endif

<form action="/Users/logout" method="post">
    @csrf
    <button type="submit"
    class="text-gray-700 text-xs font-semibold leading-5 tracking-widest uppercase py-[9px] px-[17px] sm:px-[38px] rounded-full hover:scale-105">logout</button>
</form>

</div>
                
            @else
            <div class="flex items-center">
                <ul class="list-none flex items-center w-fit">
                    
                    <li>
                        <a class="text-gray-700 no-underline font-bold text-base tracking-widest hover:text-gray-500"
                        href="/signup">Sign Up</a>
                    </li>
                </ul>
                
                <a
                class="bg-blue-400 text-gray-700 text-base font-bold py-4 px-6 rounded-full cursor-pointer border-0 ml-5 hover:text-gray-500"
                href="/login">Log In</a>
            </div>
            
            @endauth
        </div>

        {{-- ENd NavBar  --}}

        {{-- Start Home Items --}}

       
        <div>

            @yield('content')
        </div>


      </div>
      
  </div>
</div>



{{-- class="bg-black p-6 absolute bottom-0 left-0 right-0"> --}}

  <footer class="bg-gray-700 col-span-6 p-4 grid grid-cols-3 gap-6 fixed	w-full  bottom-0 left-0 right-0">
    <div class="flex items-center">
      <img
        class="h-14 w-14 mr-4 flex-shrink-0"
        src="https://picsum.photos/56.webp?random=10"
        alt=""
      />
      <div class="mr-4">
        <div class="text-sm text-white text-line-clamp-1 font-light">
          Heaven
        </div>
        <div class="text-xs text-gray-100 text-line-clamp-1">
          <span>Ludwig van Beethoven</span>
        </div>
      </div>
      <div class="flex items-center">
        <button class="text-green-200 p-2">
          <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
            <path
              d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"
            />
          </svg>
        </button>
        <button class="text-gray-100 p-2">
          <svg
            class="w-4 h-4"
            width="16"
            height="16"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g fill="currentColor" fill-rule="evenodd">
              <path
                d="M1 3v9h14V3H1zm0-1h14a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z"
                fill-rule="nonzero"
              ></path>
              <path d="M10 8h4v3h-4z"></path>
            </g>
          </svg>
        </button>
      </div>
    </div>
    <div>
      <div class="flex items-center justify-center mb-3">
        <button class="w-5 h-5 text-gray-100 mr-6">
          <svg
            class="fill-current w-3"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z"
            />
          </svg>
        </button>
        <button class="w-5 h-5 text-gray-100 mr-6">
          <svg
            class="fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" />
          </svg>
        </button>
        <button
          class="w-8 h-8 border border-gray-300 rounded-full flex text-gray-100 mr-6"
        >
          <svg
            class="fill-current h-5 w-5 m-auto"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z" />
          </svg>
        </button>
        <button class="w-5 h-5 text-gray-100 mr-6">
          <svg
            class="fill-current"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" />
          </svg>
        </button>
        <button class="w-5 h-5 text-gray-100">
          <svg
            class="fill-current w-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z"
            />
          </svg>
        </button>
      </div>
      <div class="flex items-center">
        <span class="text-xs text-gray-100 font-light">4:18</span>
        <div class="overflow-hidden relative flex-1 mx-2 rounded">
          <div class="border-b-4 border-gray-400 rounded"></div>
          <div
            class="absolute inset-x-0 top-0 -translate-x-48 border-b-4 border-gray-100 rounded transform hover:border-green-200"
          ></div>
        </div>
        <span class="text-xs text-gray-100 font-light">5:13</span>
      </div>
    </div>
  </footer>
       





  <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
