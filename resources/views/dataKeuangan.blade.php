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
                    <div class="w-[80%] bg-[#3c3f43]  h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">Catatan</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">To-do List</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">Laporan Keuangan</span></div>
                    <div class="w-[80%] bg-[#3c3f43] h-12 rounded-lg flex  items-center justify-center hover:scale-105 hover:bg-[#2b2d30] transition-all duration-200"><span class="text-lg font-bold text-white">Forum</span></div>
                </div>
               
                
            </div>
            

        </div>

        <div class="w-[78%] h-full  flex-col">
            <div class="w-full h-[10%] bg-[#1F2124] ">

                <!-- upper bar -->
                <div class="w-full h-[70%] flex  bg-[#343941] rounded-xl mt-2 ">
                   <div class="w-[25%] h-full flex justify-start items-start cursor-default hover:scale-105 transition-all duration-200">
                        <img src="../img/money.png" alt="" class="h-[75%] ml-4 my-auto">
                        <span class=" w-[70%] h-full text-white text-base p-3 ">Saldo:  Rp500.000</span>
                   </div>
                   <div class="w-[75%] h-full flex justify-end items-end cursor-default">
                        <div class="w-[40] h-full flex justify-end items-end cursor-default hover:scale-105 transition-all duration-200">
                            <img src="../img/money.png" alt="" class="h-[75%] ml-4 my-auto">
                            <span class="  h-full text-white text-base p-3 my-auto">Pemasukan:  Rp500.000</span>
                            <img src="../img/money.png" alt="" class="h-[75%] ml-4 my-auto ">
                            <span class="  h-full text-white text-base p-3 my-auto">Pengeluaran:  Rp500.000</span>
                     </div>
                       
                   </div>
                   
                </div>
                
            </div>
            <!-- box container -->
            <div class="w-full bg-[#00000075] rounded-2xl relative">
                <button class="absolute rounded-full bg-[#c7b047] hover:bg-[#dbc460] w-16 h-16 z-20 bottom-5 right-5 flex justify-center items-center" onclick="togglePopup()"><span class="text-black text-6xl font-bold flex items-center justify-center -mt-3">+</span></button>
                
                <div class="w-full h-[85vh] p-5 pt-5 overflow-y-scroll scrollbar-hide ">
                    <!-- Box-1 -->
                    <table class="min-w-full border-4 border-blacks w-full">
                        <thead class="w-full">
                          <tr>
                            <th class=" w-[20%] border-4 border-blacks text-xl text-white">Jumlah</th>
                            <th class=" w-[80%] border-4 border-blacks font-bold text-white text-xl">Deskripsi</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class=" p-3  border-blacks flex justify-center font-semibold text-white text-base">500.000</td>
                            <td class=" p-3 border-4 border-blacks font-semibold text-white text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime hic inventore aspernatur nemo ut mollitia eligendi consectetur praesentium tempora! Delectus nulla deleniti dolorem excepturi, distinctio beatae tempora laborum eos aspernatur.</td>
                            
                          </tr>
                          
                          
                        </tbody>
                      </table>
                    
                    
                    
                </div>
                
            </div>
        </div>
        
    </div>
    <script>
        
        function togglePopup() {
        var popup = document.getElementById('popup');
        popup.classList.toggle('hidden');
    }
    </script>
    <x-popUp>
    </x-popUp>
    
</body>
</html>