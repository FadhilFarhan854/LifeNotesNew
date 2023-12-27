@php
    use Carbon\Carbon;
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
                <div class="w-full h-full flex justify-center items-center mt-5">
                    <img class="w-44" src="../img/logo_dpl.png" alt="">
                </div>
                <div class="w-full flex justify-center items-center ">
                    <span class="text-white font-bold text-3xl ">LIFE NOTES</span>
                </div>

            </div>

            <!-- sidebar -->
            <div class="w-full h-1/3 flex-col items-center mt-0">
                <div class="w-full h-full flex flex-wrap mt-20 justify-center items-center">
                    {{-- <div class="w-[80%]   bg-[#c7b047] text-white  h-12 rounded-lg flex  items-center justify-center hover:scale-105  transition-all duration-200"><span class="text-lg font-bold text-white">Catatan</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">To-do List</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">Laporan Keuangan</span></div> --}}
                    <div
                        class="w-[80%] bg-[#c7b047] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200">
                        <span class="text-lg font-bold text-white" onclick="window.location.href='/ForumAdmin'">Forum</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-[78%] h-full  flex-col">
            <div class="w-full h-[10%] bg-[#1F2124] ">
                <!-- search -->
                <form class="w-full h-full flex align-middle items-center" action="/SearchForumAdmin" method="get">
                    @csrf
                {{-- <div class="w-full h-full flex mt-5 align-middle items-center"> --}}
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
                            <div class=" h-64 bg-[#1F2124] rounded-lg row p-5 shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200 "
                                onclick="toggleEditCardPopup({{ $forum->id_saluran }})">

                                <div class="flex justify-between h-[26%]">
                                    <div class="flex flex-col">
                                        <h1 class="font-semibold text-xl">{{ $forum->judul }}</h1>
                                        <p class="text-sm mb-3">{{ $forum->username }}</p>
                                    </div>
                                    <p class="text-xs mt-1">{{ $timeFormat }}</p>
                                </div>
                                <div class="h-[55%]">
                                    <p class="truncate-overflow text-base">
                                        {{ $forum->deskripsi }} </p>
                                    <div class="flex cursor-pointer w-fit"
                                        onclick="toggleReadmorePopup(event,{{ $forum->id_saluran }})">
                                        <a class="text-blue-500 text-sm">Baca Selengkapnya</a>
                                    </div>
                                </div>

                                <div class="flex justify-end h-[19%]">
                                    <div class="flex pr-4">
                                        <img class="mt-1.5 heart-icon h-7 w-7" src="../img/red_heart.png"
                                            alt="Heart Icon">
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

                            <!-- pop-up edit card container -->
                            <div id="editCardPopup{{ $forum->id_saluran }}"
                                class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">

                                <div
                                    class="w-1/2 h-auto bg-[#1F2124] rounded-lg row p-5 shadow-md shadow-black onclick="toggleEditCardPopup()">

                                    <div class="grid gap-5 p-5 w-full">
                                        <div class="flex justify-between">
                                            <p class="text-white font-mono font-semibold text-xl">edit berita</p>
                                            <span class="close text-white hover:text-gray-300 text-4xl cursor-pointer"
                                                onclick="toggleEditCardPopup({{ $forum->id_saluran }})">&times;</span>
                                        </div>
                                        {{-- <textarea class="w-full h-10 max-h-32 p-2 bg-slate-100 rounded-lg scrollbar-hide text-slate-600 outline-none resize-none" placeholder="Tulis Judul..."></textarea> --}}
                                        <form class="grid gap-5 p-5 w-full" action="UpdateForum/{{ $forum->id_saluran }}" method="get">
                                            @csrf
                                            <p>Judul</p>
                                            <div class="w-full h-auto py-1 overflow-y-scroll scrollbar-hide bg-slate-100 rounded-lg"
                                                id="content">
                                                <input contenteditable="true" name="judul"
                                                    class="p-2 mr-5 w-full h-full flex justify-start text-base text-slate-600 outline-none" value="{{ $forum->judul }}">
                                            </div>

                                            <p>Deskripsi</p>
                                            <div class="w-full h-auto py-1 overflow-y-scroll scrollbar-hide bg-slate-100 rounded-lg"
                                                id="content">
                                                <input contenteditable="true" name="deskripsi"
                                                    class="p-2 mr-5 w-full h-full flex justify-start text-base text-slate-600 outline-none" value="{{ $forum->deskripsi }}">
                                            </div>
                                    </div>

                                    <div class="flex justify-between gap-6 p-5">
                                        <a href="DeleteForum/{{ $forum->id_saluran }}"><img class="w-8 h-8" src="../img/ic_trash.png"
                                                alt="hapus"></a>
                                        {{-- <button class="bg-red-800 text-white rounded-[5px] px-4 py-[2px] font-semibold">hapus</button> --}}
                                        {{-- <button class="bg-gray-500 text-white rounded-[5px] px-4 font-semibold" onclick="toggleEditCardPopup()">batal</button> --}}
                                        <button
                                            class="bg-[#559523] text-white rounded-[5px] px-4 font-semibold">kirim</button>
                                    </div>
                                    </form>
                                </div>

                            </div>
                        @endforeach


                        <!-- pop-up add card container -->
                        <div id="addCardPopup"
                            class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">

                            <div
                                class="w-1/2 h-auto bg-[#1F2124] rounded-lg row p-5 shadow-md shadow-black onclick="toggleAddCardPopup()">

                                <div class="grid gap-5 p-5 w-full">

                                    <div class="flex justify-between">
                                        <p class="text-white font-mono font-semibold text-xl">post berita</p>
                                        <span class="close text-white hover:text-gray-300 text-4xl cursor-pointer"
                                            onclick="toggleAddCardPopup()">&times;</span>
                                    </div>
                                    {{-- <textarea class="w-full h-10 max-h-32 p-2 bg-slate-100 rounded-lg scrollbar-hide bg-[#1F2124] text-slate-600 outline-none resize-none" placeholder="Tulis Judul..."></textarea> --}}
                                    <form class="grid gap-5 p-5 w-full" action="AddForum" method="post">
                                        @csrf
                                        <p>Judul</p>
                                        <div class="w-full h-auto py-1 overflow-y-scroll scrollbar-hide bg-slate-100 rounded-lg"
                                            id="content">
                                            <input contenteditable="true" name="judul"
                                                class="p-2 mr-5 w-full h-full flex justify-start text-base text-slate-600 outline-none">
                                        </div>

                                        <p>Deskripsi</p>
                                        <div class="w-full h-auto py-1 overflow-y-scroll scrollbar-hide bg-slate-100 rounded-lg"
                                            id="content">
                                            <input contenteditable="true" name="deskripsi"
                                                class="p-2 mr-5 w-full h-full flex justify-start text-base text-slate-600 outline-none">
                                        </div>
                                </div>
                                <div class="flex justify-end gap-6 p-5">
                                    {{-- <button class="bg-gray-500 text-white rounded-[5px] px-4 font-semibold" onclick="toggleAddCardPopup()">batal</button> --}}
                                    <button
                                        class="bg-[#559523] text-white rounded-[5px] px-4 font-semibold">kirim</button>
                                </div>
                                </form>

                            </div>

                        </div>

                        {{-- button plus --}}
                        <button id="plusButton"
                            class="fixed bottom-16 right-20 bg-[#c7b047] hover:bg-[#dbc460] text-white p-4 rounded-full shadow"
                            onclick="toggleAddCardPopup()">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>


                        {{-- tambah item dari sini --}}

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

        function toggleReadmorePopup(event, id_saluran) {
            var popup = document.getElementById('readmorePopup' + id_saluran);
            event.stopPropagation();
            popup.classList.toggle('hidden');
        }

        function closeReadmorePopup(id_saluran) {
            var popup = document.getElementById('readmorePopup' + id_saluran);
            popup.classList.toggle('hidden');
        }

        function toggleAddCardPopup() {
            var popup = document.getElementById('addCardPopup');
            popup.classList.toggle('hidden');
            // blockPlusButton();
        }

        function toggleEditCardPopup(forumId) {
            var popup = document.getElementById('editCardPopup' + forumId);
            popup.classList.toggle('hidden');
        }

        function blockPlusButton() {
            var addCardPopup = document.getElementById('addCardPopup');
            var editCardPopup = document.getElementById('editCardPopup');
            var readmorePopup = document.getElementById('readmorePopup');
            if (editCardPopup.style.display === 'block' || readmorePopup.style.display === 'block') {
                addCardPopup.style.display === 'none';
            }
        }
    </script>
</body>

</html>
