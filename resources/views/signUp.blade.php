<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Sign Up</title>
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
                <h1 class="text-center  font-bold text-gray-700 sm:text-3xl">
                    Sign up for free to start listening. </h1>



                <form action="/register" method="POST"
                    class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                    @csrf

                    <div>
                        <label for="fullname" class="sr-only">First Name</label>

                        <div class="relative">
                            <input name="fname" type="text"
                            value="{{old('fname')}}"
                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="First Name" />
                        </div>
                    </div>

                    <div>
                        <label for="lastName" class="sr-only">Last Name</label>

                        <div class="relative">
                            <input name="lname" type="text"
                            value="{{old('lname')}}"

                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Last Name" />


                        </div>
                    </div>

                    <div>
                        <label for="userName" class="sr-only">user Name</label>

                        <div class="relative">
                            <input name="userName" type="text"
                            value="{{old('userName')}}"

                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="User Name" />
                        </div>
                    </div>


                    <div>
                        <label for="email" class="sr-only">Email</label>

                        <div class="relative">
                            <input name="email" type="email"
                            value="{{old('email')}}"

                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Enter your email" />


                        </div>

                        @error('email')
                                    <p class="text-red-700 text-xs mt-2">{{ $message }}</p>
                                @enderror
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>

                        <div class="relative">
                            <input name="password" type="password"
                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="create a password" />


                        </div>
                    </div>
                    <div>
                        <label for="password_confirmation" class="sr-only">Password</label>

                        <div class="relative">
                            <input name="password_confirmation" type="password"
                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Confirm your password" />
                        </div>
                                @error('password')
                                    <p class="text-red-900 text-xs mt-2">{{ $message }}</p>
                                @enderror

                    </div>

                    <button type="submit"
                        class="block w-full rounded-lg bg-green-500 px-5 py-3 text-sm font-medium text-white">
                        Signup
                    </button>


                    <p class="text-center text-sm text-gray-500">
                        Have an account?
                        <a class="underline text-blue-700" href="/login">Log in.</a>
                    </p>
                </form>
            </div>
        </div>



    </div>

</body>

</html>
