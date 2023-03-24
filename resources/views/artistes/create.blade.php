<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Sign Up</title>
</head>

<body class="bg-white font-sans">




    {{-- Start NavBar --}}

    <div>
        <div class="flex justify-center bg-white py-3 px-8">
            <div>
                <a href="#">
                    <img class="w-36" src="{{ asset('storage/adatify-logo-removebg-preview.png') }}" alt="Logo" />
                </a>
            </div>
        </div>
        <hr class=" border-gray-300 mb-8">


        {{-- ENd NavBar  --}}


        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg">
                <h1 class="text-center  font-bold text-black sm:text-3xl">
                    Create Artiste </h1>



                <form action="/artiste/store" method="POST" enctype="multipart/form-data"
                    class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                    @csrf

                    <div>
                        <label for="name" class="sr-only">Name</label>

                        <div class="relative">
                            <input name="name" type="text"
                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Name" />


                        </div>
                    </div>

                    <div>
                        <label for="pays" class="sr-only">Pays</label>

                        <div class="relative">
                            <input name="pays" type="text"
                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Pays" />


                        </div>
                    </div>


                    <div>
                        <label for="dateNaissance" class="sr-only">Date Naissance</label>

                        <div class="relative">
                            <input name="date" type="date"
                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="Date Naissance" />


                        </div>
                    </div>

                    <div>
                        <label for="image" class="sr-only">image</label>

                        <div class="relative">
                            <input name="image" type="file"
                                class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm"
                                placeholder="image" />


                        </div>
                    </div>


                    <button type="submit"
                        class="block w-full rounded-lg bg-green-500 px-5 py-3 text-sm font-medium text-white">
                        Create
                    </button>

                </form>
            </div>
        </div>



    </div>

</body>

</html>
