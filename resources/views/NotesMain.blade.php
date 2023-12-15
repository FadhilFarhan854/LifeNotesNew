<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <!-- <style>
         * {
        border: 1px solid red;
    }
    </style> -->
</head>

<body class="bg-[#1F2124] h-[100vh]  w-full">
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
                    <button onclick="window.location.href='/NotesMain'"
                        class="w-[80%]   bg-[#c7b047] text-white  h-12 rounded-lg flex  items-center justify-center hover:scale-105  transition-all duration-200 focus:bg-[#82722d]">
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
                        class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200">
                        <span class="text-lg font-bold text-white">Forum</span>
                    </button>
                </div>
            </div>


        </div>

        <div class="w-[78%] h-full  flex-col">
            <div class="w-full h-[10%] bg-[#1F2124] ">

                <!-- search -->
                <div class="w-full h-full flex align-middle items-center">
                    <form action="/Search" method="get">
                        @csrf
                        <input
                            class="w-[78vw] py-3 h-[60%] rounded-lg bg-[#00000075] border-black border-solid border-2 text-xl font-bold text-white px-12"
                            placeholder="Search" type="text" name="search">
                    </form>
                </div>

            </div>
            <!-- box container -->
            <div class="w-full h-[90%]  bg-[#00000075] rounded-2xl">

                <div
                    class="w-full h-full flex flex-wrap items-start justify-center gap-5 p-5 overflow-y-scroll scrollbar-hide ">

                    <!-- box1 -->
                    <div
                        class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex-col items-center justify-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200">
                        <a href="/TambahCatatan"><span
                                class="w-full h-full flex justify-center items-center -mt-3 text-9xl text-white">+</span></a>
                    </div>
                    <!-- box2 -->
                    @foreach ($catatan_pribadi as $catatan)
                        <a href="/Catatan/{{ $catatan->id_catatan }}"
                            class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex-col items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200 group cursor-pointer overflow-hidden">
                            <div class="w-full h-[20%] flex justify-start p-5 ">
                                <span
                                    class="text-white font-bold text-2xl flex justify-start items-start ">{{ $catatan->judul }}</span>
                            </div>
                            <div class="w-full h-[80%]  flex justify-start items-start p-5 ">
                                <span
                                    class="text-white font-bold text-sm flex justify-start items-start ">{{ $catatan->deskripsi }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</body>

</html>
