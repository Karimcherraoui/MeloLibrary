<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title> @yield('titlePage') </title>
</head>

<body class="font-sans
">

{{-- Start Side Navbar  --}}
<div>
    <div class="fixed left-0 top-0 bottom-0 w-48 bg-gray-700 p-6">
        <div>
            <a href="/">
                <img class="w-32"
                    src="{{asset('storage/adatify-logo-removebg-preview.png')}}"
                    alt="Logo" />
            </a>
        </div>

        <div>
            <ul class="list-none mt-5">
                <li class="py-2 px-0">
                    <a class="text-white no-underline font-bold text-md hover:text-gray-500" href="/">
                        <span class="fa fa-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li class="py-2 px-0">
                  <a class="text-white  no-underline font-bold text-md hover:text-gray-300" href="/music/list/liked">
                      <span class="fa fas fa-heart"></span>
                      <span>Songs Playlist</span>
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
            <div class="relative rounded-md shadow-sm">
                {{-- <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                        <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                    </svg>
                </div>
                <input id="search" class="form-input py-2 pl-10 pr-4 block w-full leading-5 rounded-md transition duration-150 ease-in-out bg-white border border-gray-300 placeholder-gray-500 rounded-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5" placeholder="Search..."> --}}
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
    class="text-white bg-gray-700 text-md font-bold leading-5 tracking-widest uppercase py-[9px] px-[14px] sm:px-[38px] rounded-full hover:scale-105">logout</button>
</form>

</div>
                
            @else
            <div class="flex items-center">
                <ul class="list-none flex items-center w-fit">
                    
                    <li>
                        <a class="text-gray-700 no-underline font-bold text-md tracking-widest hover:text-gray-500"
                        href="/signup">Sign Up</a>
                    </li>
                </ul>
                
                <a
                class="text-white bg-gray-700 text-md font-bold py-4 px-6 rounded-full cursor-pointer border-0 ml-5 hover:text-gray-500"
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




       





  <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
