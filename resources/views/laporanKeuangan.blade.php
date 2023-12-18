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
                        @php
                            $saldo = 0;
                            foreach ($catatan_keuangan as $item) {
                                $saldo += $item->sum;
                            }
                        @endphp
                        @if ($saldo > 0)
                            <span class="w-[70%] h-full text-white text-base p-3">Saldo: {{ $saldo }}</span>
                        @else
                            <span class="w-[70%] h-full text-white text-base p-3">Saldo: {{ $saldo }}</span>
                        @endif

                    </div>

                    <div class="w-[30%] h-[80%] my-auto pr-2">
                        <form action="/SearchCatatanKeuangan" method="get" class="h-full">
                            @csrf
                            <input type="text" class="w-full h-full bg-[#1F2124] text-white my-auto rounded-md pl-2"
                                placeholder="Search " name="search">
                        </form>

                    </div>


                </div>

            </div>
            <!-- box container -->
            <button onclick="togglePopUpAdd()"
                class="absolute rounded-full bg-white w-16 h-16 z-20 bottom-10 right-10 flex justify-center items-center "><span
                    class="text-black text-6xl font-bold flex items-center justify-center -mt-3">+</span></button>
            <div class="w-full h-[85vh]  bg-[#00000075]  rounded-2xl relative overflow-y-scroll scrollbar-hide">

                {{-- button --}}

                <!-- Box-1 -->
                <div {{-- TAMBAHIN H-MAX SOALNYA ITEM ITEM NYA NGEBUG --}} class="w-full h-auto  grid grid-cols-2 gap-7 p-5 pt-5 ">
                    @foreach ($catatan_keuangan as $item)
                        @php
                            $total = $item->sum_without_minus - $item->sum_with_minus;
                        @endphp
                        <a href="/dataKeuangan/{{ $item->id_catatan }}"
                            class="w-[100%] h-44 bg-[#1F2124]  rounded-xl overflow-hidden flex-col hover:scale-105 hover:shadow-md hover:shadow-black transition-all duration-300 cursor-pointer">
                            <div class="w-full h-[20%] flex justify-start items-start shadow-black shadow-sm">
                                <div class="w-full h-full pl-4 flex justify-between">
                                    <div class=" h-full flex justify-start items-start ">
                                        <span
                                            class="w-full h-full  my-auto text-lg text-white font-semibold flex flex-col justify-center items-center">{{ $item->judul }}
                                        </span>
                                    </div>
                                    <div class=" h-[60%] my-auto pr-3">
                                        <button class="h-full group" onclick="togglePopUpDelete(event)">
                                            <img src="../img/delete.png"
                                                class="h-full group-hover:scale-110 transition-all duration-200"
                                                alt="">
                                        </button>

                                    </div>
                                </div>

                            </div>
                            <div class=" w-full h-[80%] flex  gap-16 items-start justify-start pt-8">
                                <div class="w-[33%] h-[50%] flex-col justify-center items-center">
                                    <span
                                        class="text-white font-bold text-lg w-full flex items-center justify-center h-[50%]">
                                        Pemasukan :</span>
                                    @if ($item->sum_without_minus > 0)
                                        <span
                                            class="text-green-500 font-semibold text-base flex w-full items-center justify-center h-[50%]">
                                            Rp.{{ $item->sum_without_minus }}</span>
                                    @else
                                        <span
                                            class="text-green-500 font-semibold text-base flex w-full items-center justify-center h-[50%]">
                                            Rp.0</span>
                                    @endif
                                </div>
                                <div class="w-[33%] h-[50%] flex-col justify-center items-center">
                                    <span
                                        class="text-white font-bold text-lg w-full flex items-center justify-center h-[50%]">
                                        Pengeluaran :</span>
                                    @if ($item->sum_with_minus > 0)
                                        <span
                                            class="text-red-500 font-semibold text-base flex w-full items-center justify-center h-[50%]">
                                            Rp.{{ $item->sum_with_minus }}</span>
                                    @else
                                        <span
                                            class="text-red-500 font-semibold text-base flex w-full items-center justify-center h-[50%]">
                                            Rp.0</span>
                                    @endif
                                </div>
                                <div class="w-[33%] h-[50%] flex-col justify-center items-center">
                                    <span
                                        class="text-white font-bold text-lg w-full flex items-center justify-center h-[50%]">
                                        Total :</span>
                                    @if ($total > 0)
                                        <span
                                            class="text-white font-semibold text-base flex w-full items-center justify-center h-[50%]">
                                            Rp.{{ $total }}</span>
                                    @else
                                        <span
                                            class="text-white font-semibold text-base flex w-full items-center justify-center h-[50%]">
                                            Rp. {{ $total }}</span>
                                    @endif
                                </div>
                            </div>
                        </a>
                        <x-popUpDeleteCard :id="$item->id_catatan"></x-popUpDeleteCard>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <x-popUpAddCard></x-popUpAddCard>
    <script>
        function togglePopUpAdd() {
            var popup = document.getElementById('popupAddCard');
            popup.classList.toggle('hidden');
        }

        function togglePopUpDelete(event) {

            var popup = document.getElementById('popupDeleteCard');
            popup.classList.toggle('hidden');
            event.preventDefault();
        }
    </script>

</body>

</html>
