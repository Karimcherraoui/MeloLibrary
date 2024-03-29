@extends('layouts.mainPage')

@section('titlePage')
    Music Page
@endsection

@section('content')
    {{-- {{dd($music-);}} --}}

    <div class="w-full mt-8  bg-cover " style="background-image: url('{{ asset('storage/' . $music->image) }}');">
        <div class="relative bg-cover h-[40vh]"></div>
        <div class="backdrop-brightness-[60%] h-full w-full">
            <h2 class="font-bold text-[#EEF2F7] text-3xl pt-6 pl-8">{{ $music->titreMusic }}</h2>

            <h3 class="font-bold text-[#EEF2F7] text-xl pt-4 pl-8">{{ $music->artiste->name }}
            </h3>

            <h3 class="font-bold text-[#EEF2F7] text-xl pt-4 pl-8"></h3>



            <h4 class="font-bold text-[#EEF2F7] text-lg pt-2 pl-8">Duration :
                <span>{{ $music->duration }}</span> min
            </h4>
            <div class="flex pb-20">
                <div class="border-[0.3px]  border-[#EEF2F7] mt-4 ml-12 rounded-full w-fit p-4 text-[#EEF2F7] cursor-pointer"
                    id="play">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                    </svg>
                </div>
                <div class="border-[0.3px]  border-[#EEF2F7] mt-4 ml-12 rounded-full w-fit p-4 text-[#EEF2F7] cursor-pointer "
                    id="pause">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                    </svg>
                </div>
                <div class="border-[0.3px]   border-[#EEF2F7] mt-4 ml-12 rounded-full w-fit p-4 text-[#EEF2F7] cursor-pointer"
                    id="stop">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                    </svg>
                </div>
                <div class="ml-8 border-r-2 text-center"></div>

                @Auth
                    @if ($client_id == Auth::id())
                        <form action="{{ asset('music/' . $music->id . '/unlike') }}" method="post" id="likeForm"
                            class="border-[0.3px] z-20  border-[#EEF2F7] mt-4 ml-12 rounded-full w-fit p-4 text-[#EEF2F7] cursor-pointer">
                            @method('DELETE')
                            @csrf
                            <svg style="color: white" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor"
                                class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" fill="white">
                                </path>
                            </svg>
                        </form>
                    @else
                        <form method="post" action="/music/{{ $music->id }}/like" id="likeForm"
                            class="border-[0.3px] z-20  border-[#EEF2F7] mt-4 ml-12 rounded-full w-fit p-4 text-[#EEF2F7] cursor-pointer">
                            @csrf
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </form>
                    @endif
                @endauth

            </div>
        </div>
    </div>
    <div>
        <div class="w-[80%] rounded-lg py-2 mx-auto my-4 mt-6 shadow-xl bg-gray-200">
            <div class="">

                <section class="bg-gray-200 dark:bg-gray-500 py-8 lg:py-16">
                    <div class="max-w-2xl mx-auto px-4">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion</h2>
                        </div>
                        <form method="post" action="{{ asset('music/' . $music->id . '/comment') }}" class="mb-6">
                            @csrf
                            <input type="hidden" name="piece" value="{{ $music->id }}">
                            <div
                                class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment_body" rows="6" name="comment_body"
                                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                    placeholder="Write a comment..." required></textarea>
                            </div>
                            <button type="submit"
                                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Post comment
                            </button>
                        </form>
                        {{-- {{ dd($data);}}
                        @foreach ($music->comments as $comment) --}}
                        <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                            @foreach ($comments as $comment)
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-lg text-blue-600 dark:text-white ">
                                        {{-- <img class="mr-2 w-6 h-6 rounded-full" 
                                                {{-- src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                alt="Michael Gough"> --}}
                                                {{ $comment->users->userName }}
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime=""
                                            title="">
                                            {{ date('Y-m-d', strtotime($comment->created_at)) }}
                                                    <span class="text-black font-bold mx-2">at</span> {{ date('H:m', strtotime($comment->created_at)) }} </time></p>
                                </div>


                                <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>


                                <!-- Main modal -->
                                <div id="settings-modal" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                    <div class="relative w-full h-full max-w-md md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div class="px-6 py-6 lg:px-8">
                                                <h3
                                                    class="mb-4 text-xl font-medium text-gray-900 dark:text-white capitalize">
                                                    edit your comment</h3>
                                                <form class="space-y-6"
                                                    action="{{ asset('music/' . $music->id . '/comment') }}">
                                                    <input type="hidden" name="piece" value="">
                                                    <div
                                                        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                                        <label for="comment" class="sr-only">Your comment</label>
                                                        <textarea id="comment_body" rows="6" name="comment_body"
                                                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                                            placeholder="Write a comment..." required></textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Post comment
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment1"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a data-modal-toggle="settings-modal"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            
                                <p class="text-black">{{ $comment->comment_body }}</p>
                            @endforeach
                        </article>
                        {{-- @endforeach --}}
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    <!-- Main modal -->




    <script>
        var likeForm = document.getElementById('likeForm');
        likeForm.addEventListener('click', () => {
            likeForm.submit();
        });
        // var unlikeForm = document.getElementById('unlikeForm');
        // unlikeForm.addEventListener('click', () => {
        //     unlikeForm.submit();
        // });
        let play = document.querySelector('#play');
        let pause = document.querySelector('#pause');
        let stop = document.querySelector('#stop');
        let audio = new Audio('{{ asset('storage/' . $music->music) }}');
        play.addEventListener('click', () => {
            audio.play();
        });
        pause.addEventListener('click', () => {
            audio.pause();
        });
        stop.addEventListener('click', () => {
            audio.pause();
            audio.currentTime = 0;
        });
    </script>
@endsection
