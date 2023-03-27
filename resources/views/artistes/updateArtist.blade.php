@extends('admin.dashboardAdmin')

@section('titlePage')
    Update Artist
@endsection

@section('content')
    <button class=" text-black font-bold py-8 px-8 rounded-lg" onclick="window.history.back()">
        <i class="fas fa-arrow-left mr-2"></i>
        Back
    </button>

    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center  font-bold text-black sm:text-3xl">
                Update Artiste </h1>



            <form action="/artiste/update/{{ $artiste->id }}" method="POST" enctype="multipart/form-data"
                class="mt-6 mb-0 space-y-4 rounded-lg p-4 bg-white shadow-lg sm:p-6 lg:p-8">
                @csrf
                @method('PATCH')

                <div>
                    <label for="name" class="">Name</label>

                    <div class="relative">
                        <input name="name" type="text"
                            class="w-full rounded-lg border-gray-400 p-4 pr-12 text-sm shadow-md"
                            value="{{ $artiste->name }}" />


                    </div>
                </div>

                <div>
                    <label for="pays" class="">Pays</label>

                    <div class="relative">
                        <input name="pays" type="text"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md" value="{{ $artiste->pays }}" />


                    </div>
                </div>


                <div>
                    <label for="dateNaissance" class="">Date Naissance</label>

                    <div class="relative">
                        <input name="date" type="date"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md"
                            value="{{ $artiste->date }}" />


                    </div>
                </div>

                <div>
                    <label for="image" class="">image</label>

                    <div class="relative">
                        <input name="image" type="file"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md" placeholder="image" />


                    </div>
                </div>


                <button type="submit"
                    class="block w-full rounded-lg bg-green-500 px-5 py-3 text-sm font-medium text-white">
                    Update
                </button>

            </form>
        </div>
    </div>
@endsection
