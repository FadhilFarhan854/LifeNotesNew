<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- <style>
         * {
        border: 1px solid red;
    }
    </style> --}}
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

                <!-- upper bar -->
                <div class="w-full h-[70%] flex  bg-[#343639]  rounded-xl mt-2 justify-between">
                    <div
                        class="w-[25%] h-full flex justify-start items-start cursor-default hover:scale-105 transition-all duration-200">
                        <img src="../img/money-bag.png" alt="" class="h-[70%] ml-4 my-auto filter invert">
                        @foreach ($catatan_keuangan as $item)
                            @php
                                $saldo = $item->sum;
                            @endphp
                        @endforeach
                        @if ($saldo > 0)
                            <span class=" w-[70%] h-full text-white text-base p-3 ">Saldo: {{ $saldo }}</span>
                        @else
                            <span class=" w-[70%] h-full text-white text-base p-3 ">Saldo: 0</span>
                        @endif
                    </div>

                    <div class="w-[30%] h-[80%] my-auto pr-2">
                        <input type="text" class="w-full h-full bg-[#1F2124] text-white my-auto rounded-md pl-2"
                            placeholder="Search ">
                    </div>


                </div>

            </div>
            <!-- box container -->
            <div class="w-full h-[85vh]  bg-[#00000075]  rounded-2xl relative">

                {{-- button --}}
                <button
                    class="absolute rounded-full bg-white w-16 h-16 z-20 bottom-5 right-5 flex justify-center items-center"
                    onclick="togglePopup()"><span
                        class="text-black text-6xl font-bold flex items-center justify-center -mt-3">+</span></button>

                {{-- title --}}

                <div class="h-20 w-full border-b-2 border-black pt-5 pb-5 pl-8">
                    @if ($isi_catatan_keuangan)
                    <span class="w-full h-full text-3xl text-white font-semibold ">{{$isi_catatan_keuangan[0]->title}}</span>
                    @endif
                </div>
                {{-- Table --}}

                <div class="w-full h-[70vh] pt-5 overflow-y-scroll scrollbar-hide flex justify-start items-start mt-3">
                    <div class="w-[97%] mx-auto">
                        <table class="w-full border-[3px] border-white">
                            <thead class="text-white h-10  min-h-[20px]">
                                <tr class="text-xl font-semibold">
                                    <th class="border-[3px] border-white w-[15%]">Date</th>
                                    <th class="border-[3px] border-white w-[60%]">Description</th>
                                    <th class="border-[3px] border-white w-[25%]">Nominal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($isi_catatan_keuangan as $catatan)
                                    <tr class="text-white min-h-[20px] group cursor-pointer"
                                        onclick="togglePopupEdit()">
                                        <td
                                            class="border-[3px] border-white py-3 group-hover:scale-105 transition-all duration-200 ">
                                            <span class="flex w-full justify-center">{{ $catatan->tanggal }}</span>
                                        </td>
                                        <td
                                            class="border-[3px] border-white py-3 group-hover:scale-105 transition-all duration-200">
                                            <span class="flex w-full justify-center">{{ $catatan->deskripsi }} </span>
                                        </td>
                                        <td
                                            class="border-[3px] border-white py-3 group-hover:scale-105 transition-all duration-200">
                                            <span class="flex w-full justify-center">{{ $catatan->keuangan }}</span>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>


                </div>

            </div>

        </div>
        {{-- script n popup components --}}
        <script>
            function togglePopup() {
                var popup = document.getElementById('popup');
                popup.classList.toggle('hidden');
            }

            function togglePopupEdit() {
                var popup = document.getElementById('popupEdit');
                popup.classList.toggle('hidden');
            }
        </script>

        <x-popUp> </x-popUp>

        <x-popUpEditMoney></x-popUpEditMoney>
</body>

</html>
