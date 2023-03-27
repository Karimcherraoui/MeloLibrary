@extends('admin.dashboardAdmin')

@section('titlePage')
add Bands
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
            Create Band </h1>



        <form action="/band/store" method="POST" enctype="multipart/form-data"
            class="mt-6 mb-0 space-y-4 rounded-lg p-4 bg-white shadow-lg sm:p-6 lg:p-8">
            @csrf

            <div>
                <label for="name" class= "">Name</label>

                <div class="relative">
                    <input name="name" type="text"
                        class="w-full rounded-lg border-gray-400 p-4 pr-12 text-sm shadow-md"
                        placeholder="Name" />


                </div>
            </div>

            <div>
                <label for="pays" class= "">Pays</label>

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
            <div id="content" class="">
                <div id="inputs" class="">
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="text" placeholder="member name" name="members[]" value="">
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-password" type="text" placeholder="member name" name="members[]" value="">
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" id="plus" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-14 h-14 cursor-pointer align-center mb-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            @error('members')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="block w-full rounded-lg bg-green-500 px-5 py-3 text-sm font-medium text-white">
                Create
            </button>

        </form>
    </div>
</div>

<script>
    let plusButton = document.getElementById('plus');
    plusButton.addEventListener('click', () => {
        const contentPlus = document.getElementById('inputs');
        const div = document.createElement('div');
        div.innerHTML = `
                        <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" placeholder="member name" name="members[]" value="">
    `;
        contentPlus.prepend(div);
    })
</script>

@endsection










