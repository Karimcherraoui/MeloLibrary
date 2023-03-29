@extends('admin.dashboardAdmin')

@section('titlePage')
    List Musics
@endsection

@section('content')

<button class=" text-black font-bold py-8 px-8 rounded-lg" 
        onclick="window.history.back()">
    <i class="fas fa-arrow-left mr-2"></i>
    Back
</button>
    <div class="overflow-x-auto">
        <p class="text-center font-bold text-2xl">List Music</p>


        <div class="min-w-screen mt-20 flex items-center justify-center  font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">


                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg"
                    onclick="window.location.href='/music/create'">Add new Music</button>


                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-300 text-gray-600 uppercase text-sm leading-normal">

                                <th class="py-3 px-6 text-left">Title Music</th>
                                <th class="py-3 px-6 text-left">Artist</th>
                                <th class="py-3 px-6 text-center">Writers</th>
                                <th class="py-3 px-6 text-center">Langue</th>
                                <th class="py-3 px-6 text-center">Duration</th>
                                <th class="py-3 px-6 text-center">Release Date</th>
                                <th class="py-3 px-6 text-center">Genre</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @foreach ($musics as $music)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">

                                    <td class="py-3 px-6 text-left musicName">
                                        <div class="flex items-center">
                                            <div class="mr-2">
                                                <img class="w-16 h-16 rounded-full"
                                                    src="{{ asset('storage/' . $music->image) }}" />
                                            </div>
                                            <span>{{ $music->titreMusic }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-blue-200 text-black py-1 px-3 rounded-full text-xs">{{ $music->artiste->name }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $music->writers }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $music->langue }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $music->duration }} min</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $music->release_date }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span
                                            class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{ $music->genre }}</span>
                                    </td>
                                    

                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <form action="/music/edit/{{ $music->id }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                            </form>


                                            <form action="/music/delete/{{ $music->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
