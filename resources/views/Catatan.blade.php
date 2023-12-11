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
    document.addEventListener("DOMContentLoaded", function () {
      getData();
    });
  </script>
<body class="bg-[#1F2124] h-[100vh]  w-full">
    <div class="flex w-full h-full">

        <div class="w-[20%] h-full bg-[#fff0] flex-col">
            <div class="w-full h-1/3 flex-col items-center " >
                <div class="w-full h-full flex justify-center items-center mt-5">
                    <img class="w-44" src="../img/logo_dpl.png" alt="">
                </div>
                <div class="w-full flex justify-center items-center ">
                    <span class="text-white font-bold text-3xl ">LIFE NOTES</span>
                </div>

            </div>
            <!-- sidebar -->
            <div class="w-full h-1/3 flex-col items-center mt-0" >
                <div class="w-full h-full flex flex-wrap mt-20 justify-center items-center">
                    <div class="w-[80%] bg-[#c7b047]  h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#c7b047] transition-all duration-200"><span class="text-lg font-bold text-white">Catatan</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">To-do List</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">Laporan Keuangan</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">Forum</span></div>
                </div>


            </div>


        </div>

        <div class="w-[78%] h-full  flex-col">
            <div class="w-full h-[10%] bg-[#1F2124] ">

                <!-- search -->
                <div class="w-full h-full flex align-middle items-center">
                    <input class="  w-full py-3 h-[60%] rounded-lg bg-[#00000075] border-black border-solid border-2 text-xl font-bold text-white px-12" placeholder="Search" type="text">
                </div>

            </div>
            <!-- box container -->
            <div class="w-full h-[90%]  bg-[#00000075] rounded-2xl flex overflow-y-scroll scrollbar-hide">

               <div class="h-full w-[9%] flex justify-start">
                <a href="/NotesMain" class="p-2 mr-5 mt-3 w-full h-full flex justify-center text-2xl text-white font-bold">Back</a>
                    <!-- <span class="p-2 mr-5 mt-3 w-full h-full flex justify-center text-2xl text-white font-bold">Back</span> -->
               </div>

               <div class="flex-col justify-start h-full w-[91%]">
                @if ($catatan_pribadi)
                
                <!--title -->
                    <div class="w-full h-[10%]" id="title">
                        <span contenteditable="true" class="p-2 mr-5 mt-10 w-full h-full flex justify-center text-2xl text-white font-bold outline-none">{{ $catatan_pribadi->judul }}</span>
                    </div>

                    
                    <!-- content -->
                
                    <div class="w-full h-[73%] overflow-y-scroll scrollbar-hide " id="content">
                        <span contenteditable="true" class="p-2 mr-5 mt-5 w-full h-full flex justify-start text-base text-white font-bold outline-none ">{{ $catatan_pribadi->deskripsi }}</span>
                    </div>
                
                    {{-- button save and delete --}}
                    <div class="flex flex-col justify-end mt-4">
                        <div class="flex justify-end items-end gap-5 pr-5">
                            <button onclick="getData()" class=" text-black w-28 h-10 rounded-md bg-green-400/50 hover:bg-green-400 hover:scale-105 transition-all font-semibold" >Save</button>
                            <button onclick="" class=" text-black w-28 h-10 rounded-md bg-red-400/50 hover:bg-red-400  hover:scale-105 transition-all font-semibold">Delete</button>
                        </div>
                        
                    </div>
                     
                  
                
                @endif
               </div>
               
            </div>
        </div>

    </div>

</body>
</html>
