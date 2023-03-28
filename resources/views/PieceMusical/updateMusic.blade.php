@extends('admin.dashboardAdmin')

@section('titlePage')
    Edit Music
@endsection

@section('content')
    <button class="text-black font-bold py-8 px-8 rounded-lg" onclick="window.history.back()">
        <i class="fas fa-arrow-left mr-2"></i>Back
    </button>

    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center font-bold text-black sm:text-3xl">Create Music</h1>

            <form action="/music/update/{{ $musics->id }}" method="POST" enctype="multipart/form-data"
                class="mt-6 mb-0 space-y-4 rounded-lg p-4 bg-white shadow-lg sm:p-6 lg:p-8">
                @csrf
                @method('PATCH')

                <div>
                    <label for="titreMusic" class="">Title</label>
                    <div class="relative">
                        <input name="titreMusic" type="text"
                            class="w-full rounded-lg border-gray-400 p-4 pr-12 text-sm shadow-md" placeholder="Title Music"
                            value="{{ $musics->titreMusic }}" />
                        @error('titreMusic')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="genre" class="">Genre</label>
                    <div class="relative">
                        <input name="genre" type="text"
                            class="w-full rounded-lg border-gray-400 p-4 pr-12 text-sm shadow-md" placeholder="Genre Music"
                            value="{{ $musics->genre }}" />
                        @error('genre')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="artiste_id" class="mb-4">Artist/Band ID</label>
                    <div class="relative">
                        <div>
                            <label class="mr-4 ">Type:</label>
                            <label for="artist">
                                <input type="radio" id="artist" name="type" value="{{ $musics->artist }}">
                                Artist
                            </label>
                            <label for="band">
                                <input type="radio" id="band" name="type" value="{{ $musics->band }}">
                                Band
                            </label>
                        </div>
                        @error('artiste_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="" for="grid-password">
                            music
                        </label>
                        <input class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md" id="grid-password"
                            type="file" placeholder="" name="music" value="">
                        @error('music')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                


                <div>
                    <label for="image" class="">Image</label>
                    <div class="relative">
                        <input name="image" type="file"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md" placeholder="Image" />
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="w-full md:w-1/2 px-3 ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            artiste Name
                        </label>
                        <select
                            class="relative block w-full  my-2 rounded-none rounded-t-md border px-3 py-2 text-black placeholder-black  focus:z-10  focus:outline-none sm:text-sm "
                            id="" name="artiste_id">
                            <option selected disabled>Select Artiste</option>
                            @foreach ($artistes as $artiste)
                                <option class="text-black" value="{{ $artiste->name }}"">{{ $artiste->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('artiste_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="w-full md:w-1/2 px-3 ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name">
                            Band Name
                        </label>
                        <select
                            class="relative block w-full  my-2 rounded-none rounded-t-md border px-3 py-2 text-black placeholder-black  focus:z-10  focus:outline-none sm:text-sm "
                            id="" name="band_id">
                            <option selected disabled>Select Band</option>
                            @foreach ($bandes as $band)
                                <option class="text-black" value="{{ $band->name }}">{{ $band->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('band_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="writers" class="">Writers</label>
                    <div class="relative">
                        <input name="writers" type="text"
                            class="w-full rounded-lg border-gray-400 p-4 pr-12 text-sm shadow-md" placeholder="Writers"
                            value="{{ $musics->writers }}" />
                        @error('writers')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="words" class="">Words</label>
                    <div class="relative">
                        <input name="words" type="text"
                            class="w-full rounded-lg border-gray-400 p-4 pr-12 text-sm shadow-md" placeholder="Words"
                            value="{{ $musics->words }}" />
                        @error('words')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="" for="">
                            langue
                        </label>
                        <select
                            class="relative block w-full appearance-none my-2 rounded-none rounded-t-md border px-3 py-2  placeholder-[#c7cad0]  focus:z-10  focus:outline-none sm:text-sm "
                            id="languages" name="langue">
                            <option selected disabled>Select Language</option>
                            <option value="af">Afrikaans</option>
                            <option value="sq">Albanian - shqip</option>
                            <option value="am">Amharic - አማርኛ</option>
                            <option value="ar">Arabic - العربية</option>
                            <option value="an">Aragonese - aragonés</option>
                            <option value="hy">Armenian - հայերեն</option>
                            <option value="ast">Asturian - asturianu</option>
                            <option value="az">Azerbaijani - azərbaycan dili</option>
                            <option value="eu">Basque - euskara</option>
                            <option value="be">Belarusian - беларуская</option>
                            <option value="bn">Bengali - বাংলা</option>
                            <option value="bs">Bosnian - bosanski</option>
                            <option value="br">Breton - brezhoneg</option>
                            <option value="bg">Bulgarian - български</option>
                            <option value="ca">Catalan - català</option>
                            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                            <option value="zh">Chinese - 中文</option>
                            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                            <option value="co">Corsican</option>
                            <option value="hr">Croatian - hrvatski</option>
                            <option value="cs">Czech - čeština</option>
                            <option value="da">Danish - dansk</option>
                            <option value="nl">Dutch - Nederlands</option>
                            <option value="en">English</option>
                            <option value="en-AU">English (Australia)</option>
                            <option value="en-CA">English (Canada)</option>
                            <option value="en-IN">English (India)</option>
                            <option value="en-NZ">English (New Zealand)</option>
                            <option value="en-ZA">English (South Africa)</option>
                            <option value="en-GB">English (United Kingdom)</option>
                            <option value="en-US">English (United States)</option>
                            <option value="eo">Esperanto - esperanto</option>
                            <option value="et">Estonian - eesti</option>
                            <option value="fo">Faroese - føroyskt</option>
                            <option value="fil">Filipino</option>
                            <option value="fi">Finnish - suomi</option>
                            <option value="fr">French - français</option>
                            <option value="fr-CA">French (Canada) - français (Canada)</option>
                            <option value="fr-FR">French (France) - français (France)</option>
                            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                            <option value="gl">Galician - galego</option>
                            <option value="ka">Georgian - ქართული</option>
                            <option value="de">German - Deutsch</option>
                            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                            <option value="el">Greek - Ελληνικά</option>
                            <option value="gn">Guarani</option>
                            <option value="gu">Gujarati - ગુજરાતી</option>
                            <option value="ha">Hausa</option>
                            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                            <option value="he">Hebrew - עברית</option>
                            <option value="hi">Hindi - हिन्दी</option>
                            <option value="hu">Hungarian - magyar</option>
                            <option value="is">Icelandic - íslenska</option>
                            <option value="id">Indonesian - Indonesia</option>
                            <option value="ia">Interlingua</option>
                            <option value="ga">Irish - Gaeilge</option>
                            <option value="it">Italian - italiano</option>
                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                            <option value="ja">Japanese - 日本語</option>
                            <option value="kn">Kannada - ಕನ್ನಡ</option>
                            <option value="kk">Kazakh - қазақ тілі</option>
                            <option value="km">Khmer - ខ្មែរ</option>
                            <option value="ko">Korean - 한국어</option>
                            <option value="ku">Kurdish - Kurdî</option>
                            <option value="ky">Kyrgyz - кыргызча</option>
                            <option value="lo">Lao - ລາວ</option>
                            <option value="la">Latin</option>
                            <option value="lv">Latvian - latviešu</option>
                            <option value="ln">Lingala - lingála</option>
                            <option value="lt">Lithuanian - lietuvių</option>
                            <option value="mk">Macedonian - македонски</option>
                            <option value="ms">Malay - Bahasa Melayu</option>
                            <option value="ml">Malayalam - മലയാളം</option>
                            <option value="mt">Maltese - Malti</option>
                            <option value="mr">Marathi - मराठी</option>
                            <option value="mn">Mongolian - монгол</option>
                            <option value="ne">Nepali - नेपाली</option>
                            <option value="no">Norwegian - norsk</option>
                            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                            <option value="oc">Occitan</option>
                            <option value="or">Oriya - ଓଡ଼ିଆ</option>
                            <option value="om">Oromo - Oromoo</option>
                            <option value="ps">Pashto - پښتو</option>
                            <option value="fa">Persian - فارسی</option>
                            <option value="pl">Polish - polski</option>
                            <option value="pt">Portuguese - português</option>
                            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                            <option value="qu">Quechua</option>
                            <option value="ro">Romanian - română</option>
                            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                            <option value="rm">Romansh - rumantsch</option>
                            <option value="ru">Russian - русский</option>
                            <option value="gd">Scottish Gaelic</option>
                            <option value="sr">Serbian - српски</option>
                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                            <option value="sn">Shona - chiShona</option>
                            <option value="sd">Sindhi</option>
                            <option value="si">Sinhala - සිංහල</option>
                            <option value="sk">Slovak - slovenčina</option>
                            <option value="sl">Slovenian - slovenščina</option>
                            <option value="so">Somali - Soomaali</option>
                            <option value="st">Southern Sotho</option>
                            <option value="es">Spanish - español</option>
                            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                            <option value="es-MX">Spanish (Mexico) - español (México)</option>
                            <option value="es-ES">Spanish (Spain) - español (España)</option>
                            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                            <option value="su">Sundanese</option>
                            <option value="sw">Swahili - Kiswahili</option>
                            <option value="sv">Swedish - svenska</option>
                            <option value="tg">Tajik - тоҷикӣ</option>
                            <option value="ta">Tamil - தமிழ்</option>
                            <option value="tt">Tatar</option>
                            <option value="te">Telugu - తెలుగు</option>
                            <option value="th">Thai - ไทย</option>
                            <option value="ti">Tigrinya - ትግርኛ</option>
                            <option value="to">Tongan - lea fakatonga</option>
                            <option value="tr">Turkish - Türkçe</option>
                            <option value="tk">Turkmen</option>
                            <option value="tw">Twi</option>
                            <option value="uk">Ukrainian - українська</option>
                            <option value="ur">Urdu - اردو</option>
                            <option value="ug">Uyghur</option>
                            <option value="uz">Uzbek - o‘zbek</option>
                            <option value="vi">Vietnamese - Tiếng Việt</option>
                            <option value="wa">Walloon - wa</option>
                            <option value="cy">Welsh - Cymraeg</option>
                            <option value="fy">Western Frisian</option>
                            <option value="xh">Xhosa</option>
                            <option value="yi">Yiddish</option>
                            <option value="yo">Yoruba - Èdè Yorùbá</option>
                            <option value="zu">Zulu - isiZulu</option>
                        </select>
                        @error('langue')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                </div>
                <div>
                    <label for="release_date" class="">Date Creation</label>

                    <div class="relative">
                        <input name="release_date" type="date"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-md"
                            placeholder="Release Date" value="{{ $musics->release_date }}" />

                        @error('release_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
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
