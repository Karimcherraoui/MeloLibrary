<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-TfzNv99QG1nbOZikJ9R9A90fVQ2tYcLv+B55u8zJkMwV5Z5M5Z7+XfhNZlwKGHJGeYvgDlFrnSgQGkx/XJHv4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')

    <title> Dashboard Admin  </title>
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
                    <a class="text-white no-underline font-bold text-md hover:text-gray-500" href="/">
                        <span class="fa fa-home"></span>
                        <span>Home</span>
                    </a>
                </li>

                <li class="py-2 px-0">
                    <a class="text-white  no-underline font-bold text-md hover:text-gray-500" href="/artiste/list">
                        <i class="fa fa-list" aria-hidden="true"></i>

                        <span>List Artist</span>
                    </a>
                </li>

                <li class="py-2 px-0">
                    <a class="text-white  no-underline font-bold text-md hover:text-gray-500" href="#">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span>Add Music</span>
                    </a>
                </li>
                <li class="py-2 px-0">
                    <a class="text-white no-underline font-bold text-md hover:text-gray-500" href="/band/list">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span>List Band</span>
                    </a>
                </li>

                {{-- <li class="py-2 px-0">
                    <a class="text-white  no-underline font-bold text-md hover:text-gray-500" href="#">
                        <span class="fa fas fa-heart"></span>
                        <span>Liked Songs</span>
                    </a>
                </li> --}}
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

       
        <div >

            @yield('content')
        </div>


      </div>
      
  </div>
</div>




       





  <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</body>
</html>
