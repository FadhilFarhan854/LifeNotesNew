@php
    use Carbon\Carbon;
    $id_user = Session::get('id');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .round-button {
            border-radius: 9999px;
            /* Menetapkan radius sudut yang besar untuk membuatnya terlihat bulat */
            padding: 10px;
            background-color: #323232;
            /* Warna latar belakang */
            color: #ffffff;
            /* Warna teks */
            box-shadow: 0 10px 6px rgba(0, 0, 0, 0.2);
            /* Pertebalan bayangan */
        }

        .truncate-overflow {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            /* Jumlah baris yang ingin ditampilkan */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* * {
        border: 1px solid red;
    } */
    </style>
</head>

<body class="bg-[#1F2124] h-[100vh] w-full">
    <div class="flex w-full h-full">

        <div class="w-[20%] h-full bg-[#fff0] flex-col">
            <div class="w-full h-1/3 flex-col items-center ">
                <div class="w-full h-full flex justify-center items-center ">
                    <img class="w-36" src="../img/logo_dpl.png " alt="">
                </div>
                <div class="w-full flex justify-center items-center ">
                    <span class="text-white font-bold text-3xl ">LIFE NOTES</span>
                </div>
            </div>
            <!-- sidebar -->
            <div class="w-full h-2/3 flex-col items-center justify-between pt-10 pb-6">
                <div class="w-full h-[60%] flex flex-col gap-2  justify-center items-center">
                    <button onclick="window.location.href='/NotesMain'"
                    class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200">
                        <span class="text-lg font-bold text-white">Catatan</span>
                    </button>
                    <button onclick="window.location.href='/Todolist'"
                        class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200">
                        <span class="text-lg font-bold text-white">To-do List</span>
                    </button>
                    <button onclick="window.location.href='/LaporanKeuangan'"
                    class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200">
                        <span class="text-lg font-bold text-white">Laporan Keuangan</span>
                    </button>
                    <button onclick="window.location.href='/Forum'"
                    class="w-[80%]   bg-[#c7b047] text-white  h-12 rounded-lg flex  items-center justify-center hover:scale-105  transition-all duration-200 focus:bg-[#82722d]">
                        <span class="text-lg font-bold text-white">Forum</span>
                    </button>
                </div >
                 <div class="w-full h-[40%] flex flex-col gap-2 justify-end items-center">
                    <button onclick="window.location.href='/Logout'"
                        class="w-[80%] bg-[#4F1515] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#d44040] transition-all duration-200">
                        <span class="text-lg font-bold text-white">Logout</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="w-[78%] h-full  flex-col">
            <div class="w-full h-[10%] bg-[#1F2124] ">
                <!-- search -->
                <form class="w-full h-full flex align-middle items-center" action="/SearchForum" method="get">
                    {{-- <div class="w-full h-full flex align-middle items-center"> --}}
                        <input name="search"
                            class="  w-full py-3 h-[60%] rounded-lg bg-[#00000075] border-black border-solid border-2 text-xl font-bold text-white px-12"
                            placeholder="Search" type="text">
                    {{-- </div> --}}
                </form>
            </div>

            <!-- box container -->
            <div class="flex w-full h-[90%] bg-[#00000075] rounded-2xl overflow-y-scroll scrollbar-hide">
                {{-- <div class="h-auto"> --}}
                    <div class="grid grid-cols-2 w-full h-auto items-start gap-5 p-5">

                        {{-- item 1 --}}
                        @foreach ($forums as $forum)
                            @php
                                $timeFormat = Carbon::parse($forum->times)->diffForHumans();
                            @endphp
                            <div
                                class=" h-64 w-full bg-[#1F2124] rounded-lg row p-5 shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200 ">
                                <div class="flex justify-between h-[26%]">
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold text-xl">{{ $forum->judul }}</h1>
                                        <p class="text-sm mb-3">{{ $forum->username }}</p>
                                    </div>
                                    <p class="text-xs mt-1">{{ $timeFormat }}</p>
                                </div>
                                <div class="h-[55%]">
                                    <p class="truncate-overflow text-base">
                                        {{ $forum->deskripsi }}</p>
                                    <div class="flex cursor-pointer w-fit"
                                        onclick="toggleReadmorePopup(event,{{ $forum->id_saluran }})">
                                        <a class="text-blue-500 text-sm">Baca Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="flex justify-end h-[19%]">
                                    <div class="flex pr-4">
                                        <form action="/likes/{{ $forum->id_saluran }}" method="post">
                                            @csrf
                                            @if ($forum->is_liked == 0)
                                                <button class="round-button flex items-center shadow-3xl"
                                                    onclick="toggleLike(event, this)">
                                                    <img class="heart-icon w-5" src="../img/grey_heart.png"
                                                        alt="Heart Icon">
                                                </button>
                                            @else
                                                <button class="round-button flex items-center shadow-3xl"
                                                    onclick="toggleLike(event, this)">
                                                    <img class="heart-icon w-5" src="../img/red_heart.png"
                                                        alt="Heart Icon">
                                                </button>
                                            @endif
                                        </form>
                                        <p class="text-xs m-2.5">{{ $forum->likes }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- pop-up readmore container -->
                            <div id="readmorePopup{{ $forum->id_saluran }}"
                                class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
                                <div
                                    class="w-1/2 h-auto bg-[#1F2124] rounded-lg row p-5 shadow-md shadow-black onclick="toggleReadmorePopup()">

                                    <div class="flex justify-between h-20 mb-3">
                                        <div class="flex flex-col">
                                            <h1 class="font-semibold text-xl">{{ $forum->judul }}</h1>
                                            <p class="text-sm mb-3">{{ $forum->username }}</p>
                                        </div>

                                        <div class="row">
                                            <span class="close text-white hover:text-gray-300 text-4xl cursor-pointer"
                                                onclick="closeReadmorePopup({{ $forum->id_saluran }})">&times;</span>
                                            <p class="text-xs mt-4">{{ $timeFormat }}</p>
                                        </div>
                                    </div>
                                    <div class="h-auto">
                                        <p class="text-base">
                                            {{ $forum->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                {{-- </div> --}}
            </div>
        </div>

    </div>

    <script>
        function toggleLike(event, button) {
            var likeImage = button.querySelector('.heart-icon');
            event.stopPropagation();

            if (likeImage.src.endsWith('grey_heart.png')) {
                likeImage.src = '../img/red_heart.png';
            } else {
                likeImage.src = '../img/grey_heart.png';
            }
        }

        function toggleReadmorePopup(event, forumId) {
            var popup = document.getElementById('readmorePopup' + forumId);
            event.stopPropagation();
            popup.classList.toggle('hidden');
        }

        function closeReadmorePopup(forumId) {
            var popup = document.getElementById('readmorePopup' + forumId);
            popup.classList.toggle('hidden');
        }
    </script>
</body>

</html>
