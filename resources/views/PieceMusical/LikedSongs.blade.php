@extends('layouts.mainPage')

@section('titlePage')
    Home Page
@endsection

@section('content')
    {{-- {{dd($musics->image);}} --}}

    <div class="px-5 py-5 ">
        <h2 class="text-black text-2xl md:text-3xl mb-4 md:mb-8">Liked Playlist</h2>

        <div class="flex flex-cols gap-10">
            @foreach ($musics as $music)
                <div class="flex gap-20 overflow-hidden mb-8">


                    <div
                        class=" min-w-36 w-40 px-4 py-3 bg-blue-100 rounded-md cursor-pointer transition-all duration-400 ease-in-out hover:bg-blue-300">
                        <img class="w-full rounded-md mb-2.5" src="{{ asset('storage/' . $music->image) }}" />


                        <div class="relative">
                            <div
                                class="absolute right-10 top--16 p-2 bg-green-500 rounded-full opacity-0 transition-all duration-400 ease hover:opacity-100 hover:transform -translate-y-20">
                                <a href="{{ asset('music/page/' . $music->id) }}"><span class="fa fa-play"></span></a>
                            </div>




                        </div>
                        <h4 class="text-black font-bold text-md mb-2 whitespace-nowrap overflow-hidden overflow-ellipsis">
                            {{ $music->titreMusic }}</h4>
                        <p class="text-gray-700 text-xs font-medium leading-5
            ">{{ $music->artiste->name }}
                        </p>
                    </div>



                </div>
            @endforeach
        </div>
    </div>
@endsection
