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
    </style>  --}}
</head>
<script>
    // Function to get data from editable div
    function getData() {
        // Get the content of the editable div
        var titleContent = document.getElementById('title').innerText;
        var contentContent = document.getElementById('content').innerText;

        // Log the content to the console (you can modify this part based on your requirements)

        //ganti jadi laravel update
        console.log("Title:", titleContent);
        console.log("Content:", contentContent);

    }

    // You can call this function when needed, for example, when submitting a form or clicking a button
    // Here, I'm calling it when the page loads just for demonstration
    document.addEventListener("DOMContentLoaded", function() {
        getData();
    });

    function updateData() {
        var titleContent = document.getElementById('title').innerText;
        var contentContent = document.getElementById('content').innerText;

        // Get the ID of the current catatan from the URL
        var catatanId = window.location.pathname.split('/').pop();

        // Send an AJAX request to update the record
        fetch(`/update/${catatanId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                judul: titleContent,
                deskripsi: contentContent,
            }),
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
            // You can add further actions or UI updates here
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>

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
                    <input
                        class="  w-full py-3 h-[60%] rounded-lg bg-[#00000075] border-black border-solid border-2 text-xl font-bold text-white px-12"
                        placeholder="Search" type="text">
                </div>

            </div>
            <!-- box container -->
            <div class="w-full h-[90%]  bg-[#00000075] rounded-2xl flex overflow-y-scroll scrollbar-hide">

                <div class="h-10 w-[9%] flex justify-start">
                    <a href="/NotesMain" class="p-2 mr-5 mt-3 w-full h-full flex justify-center group"> <img
                            src="../img/arrow.png " alt=""
                            class="h-7 group-hover:scale-105 transition-all duration-150 filter invert"></a>
                    <!-- <span class="p-2 mr-5 mt-3 w-full h-full flex justify-center text-2xl text-white font-bold">Back</span> -->
                </div>

                <div class="flex-col justify-start h-full w-[91%]">
                    @if ($catatan_pribadi)
                        <!--title -->
                        <div class="w-full h-[10%]" id="title">
                            <span contenteditable="true"
                                class="p-2 mr-5 mt-10 w-full h-full flex justify-center text-2xl text-white font-bold outline-none">{{ $catatan_pribadi->judul }}</span>
                        </div>


                        <!-- content -->

                        <div class="w-full h-[70%] overflow-y-scroll scrollbar-hide " id="content">
                            <span contenteditable="true"
                                class="p-2 mr-5 mt-5 w-full h-full flex justify-start text-base text-white font-bold outline-none ">{{ $catatan_pribadi->deskripsi }}</span>
                        </div>

                        {{-- button save --}}
                        <div class="flex flex-col justify-end ">
                            <div class="flex justify-end items-end h-full">
                                <button onclick="updateData()" class="bg-green-800 scale-105 w-12 h-12 rounded-full flex justify-center items-center hover:scale-105 duration-150 transition-all">
                                    <img src="../img/save.png" class="filter invert w-5 group-hover:scale-110 transition-all duration-150" alt="">
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
                {{-- button delete --}}
                <div class="flex flex-col justify-between w-[5%] h-full pt-5 group pr-9 pb-14">
                    <button onclick = "window.location.href='/HapusCatatan/{{ $catatan_pribadi->id_catatan }}'"
                        class="w-[90%] "><img src="../img/delete.png "
                            class="w-9 group-hover:scale-110 transition-all duration-150" alt=""></button>
                    {{-- <button class="bg-green-800 scale-105 w-12 h-12 rounded-full flex justify-center items-center"><img src="../img/save.png " class=" filter invert w-5 group-hover:scale-110 transition-all duration-150" alt=""></button> --}}
                </div>

            </div>
        </div>

    </div>

</body>

</html>
