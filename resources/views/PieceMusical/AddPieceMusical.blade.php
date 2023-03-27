@extends('admin.dashboardAdmin')

@section('titlePage')
add Musics
@endsection

@section('content')

<button class=" text-black font-bold py-8 px-8 rounded-lg" 
        onclick="window.history.back()">
    <i class="fas fa-arrow-left mr-2"></i>
    Back
</button>

<div class="mx-auto max-w-screen-xl px-4  sm:px-6 lg:px-8">
    <div class="mx-auto max-w-lg">
        <h1 class="text-center  font-bold text-black sm:text-3xl">
            Create Music </h1>



        <form action="/band/store" method="POST" enctype="multipart/form-data"
            class="mt-6 mb-0 space-y-4 rounded-lg p-4 bg-white shadow-lg sm:p-6 lg:p-8">
            @csrf

            <div>
                <label for="titreMusic" class= "">Title</label>

                <div class="relative">
                    <input name="titreMusic" type="text"
                        class="w-full rounded-lg border-gray-400 p-4 pr-12 text-sm shadow-md"
                        placeholder="Title Music" value="{{ old('titreMusic') }}" />

                        @error('titreMusic')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="artist" class= "">Type : </label>

                <div class="relative">
                    <input name="pays" type="text"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md"
                        placeholder="Pays" />


                </div>
            </div>


            <div>
                <label for="creation_date" class= "">Date Creation</label>

                <div class="relative">
                    <input name="creation_date" type="date"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md"
                        placeholder="creation date" />


                </div>
            </div>

            <div>
                <label for="image" class= "">image</label>

                <div class="relative">
                    <input name="image" type="file"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md"
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



@endsection










