<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="
        https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js
        "></script>
    @vite('resources/css/app.css')

    <title>Login</title>
</head>

<body class="bg-gray-200 font-sans">




    {{-- Start NavBar --}}

    <div>
        <div class="flex justify-center bg-gray-200 py-3 px-8">
            <div>
                <a href="/">
                    <img class="w-36" src="{{ asset('storage/adatify-logo-removebg-preview.png') }}" alt="Logo" />
                </a>
            </div>
        </div>
        <hr class=" border-gray-300 mb-8">


        {{-- ENd NavBar  --}}


        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg">
                <h1 class="text-center  font-bold text-black sm:text-3xl">
                    To continue, log in to Spotify. </h1>



                <form action="/loginPost" method="POST"
                    class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                    @csrf
                    <p class="text-center text-lg text-gray-600 font-medium">Sign in to your account</p>

                    @error("message")
                    <p class="text-[15px] text-red-500">
                        {{$message}}
                    </p>
                @enderror

                    <div>
                        <label for="email" class="sr-only">Email</label>

                        <div class="relative">
                            <input type="email" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Enter email" name="email" />

                            <span class="absolute inset-y-0 right-0 grid place-content-center px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </span>
                            @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
          
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>

                        <div class="relative">
                            <input type="password" class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Enter password" name="password" />

                            <span class="absolute inset-y-0 right-0 grid place-content-center px-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </span>
                            @error('password')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit"
                        class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                        Sign in
                    </button>
                    <hr class=" border-gray-300 ">


                    <p class="text-center text-lg text-gray-600">
                        Don't have an account?
                    </p>
                    <a class=" flex justify-center w-auto rounded-lg bg-green-500 px-5 py-3 text-sm font-medium text-white"
                        href="/signup">Sign up</a>
                </form>
            </div>
        </div>

        @if (session()->has('success'))
            <div x-data="{ show: true }" x-init="setTimeout(()=> show = false , 4000)" x-show="show"
                class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                <p> {{ session('success') }}</p>

            </div>
        @endif

    </div>


</body>

</html>
