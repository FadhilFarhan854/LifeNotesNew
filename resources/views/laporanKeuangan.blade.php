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
            <div class="w-full   bg-[#343941] rounded-2xl">
                <div class="w-full h-[85vh] grid grid-cols-2  gap-7 p-5 pt-5 overflow-y-scroll scrollbar-hide ">
                    <!-- Box-1 -->
                    <div class="w-[100%] h-52 bg-[#1F2124] rounded-xl overflow-hidden flex-col hover:scale-105 hover:shadow-md hover:shadow-[#d3d174] transition-all duration-300">
                        <div class="w-full h-[30%] flex justify-start items-start shadow-black shadow-sm">
                            <div class="w-[10%] flex justify-center items-center h-full ">
                                <span class="w-full h-[80%] my-auto text-5xl text-white font-semibold flex justify-end">12</span>
                            </div>
                            <div class=" w-[90%] h-[70%] flex-col justify-end items-end my-auto pl-3">
                                <div class="w-full h-[50%] ">
                                    <span class="text-white font-semibold text-base"> Monday </span>
                                </div>
                                <div class="w-full h-[50%]">
                                    <span class="text-white font-semibold text-base ">23 nov</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full h-[70%] flex  gap-16 items-center justify-center">
                            <div class="w-33% h-[50%] flex-col items-center">
                                <span class="text-white font-semibold text-xl "> Total :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> Pemasukan :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> pengeluaran :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Box-2 -->
                    <div class="w-[100%] h-52 bg-[#1F2124] rounded-xl overflow-hidden flex-col hover:scale-105 hover:shadow-md hover:shadow-[#d3d174] transition-all duration-300">
                        <div class="w-full h-[30%] flex justify-start items-start shadow-black shadow-sm">
                            <div class="w-[10%] flex justify-center items-center h-full ">
                                <span class="w-full h-[80%] my-auto text-5xl text-white font-semibold flex justify-end">12</span>
                            </div>
                            <div class=" w-[90%] h-[70%] flex-col justify-end items-end my-auto pl-3">
                                <div class="w-full h-[50%] ">
                                    <span class="text-white font-semibold text-base"> Monday </span>
                                </div>
                                <div class="w-full h-[50%]">
                                    <span class="text-white font-semibold text-base ">23 nov</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full h-[70%] flex  gap-16 items-center justify-center">
                            <div class="w-33% h-[50%] flex-col items-center">
                                <span class="text-white font-semibold text-xl "> Total :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> Pemasukan :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> pengeluaran :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Box-3 -->
                    <div class="w-[100%] h-52 bg-[#1F2124] rounded-xl overflow-hidden flex-col hover:scale-105 hover:shadow-md hover:shadow-[#d3d174] transition-all duration-300">
                        <div class="w-full h-[30%] flex justify-start items-start shadow-black shadow-sm">
                            <div class="w-[10%] flex justify-center items-center h-full ">
                                <span class="w-full h-[80%] my-auto text-5xl text-white font-semibold flex justify-end">12</span>
                            </div>
                            <div class=" w-[90%] h-[70%] flex-col justify-end items-end my-auto pl-3">
                                <div class="w-full h-[50%] ">
                                    <span class="text-white font-semibold text-base"> Monday </span>
                                </div>
                                <div class="w-full h-[50%]">
                                    <span class="text-white font-semibold text-base ">23 nov</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full h-[70%] flex  gap-16 items-center justify-center">
                            <div class="w-33% h-[50%] flex-col items-center">
                                <span class="text-white font-semibold text-xl "> Total :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> Pemasukan :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> pengeluaran :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="w-[100%] h-52 bg-[#1F2124] rounded-xl overflow-hidden flex-col hover:scale-105 hover:shadow-md hover:shadow-[#d3d174] transition-all duration-300">
                        <div class="w-full h-[30%] flex justify-start items-start shadow-black shadow-sm">
                            <div class="w-[10%] flex justify-center items-center h-full ">
                                <span class="w-full h-[80%] my-auto text-5xl text-white font-semibold flex justify-end">12</span>
                            </div>
                            <div class=" w-[90%] h-[70%] flex-col justify-end items-end my-auto pl-3">
                                <div class="w-full h-[50%] ">
                                    <span class="text-white font-semibold text-base"> Monday </span>
                                </div>
                                <div class="w-full h-[50%]">
                                    <span class="text-white font-semibold text-base ">23 nov</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full h-[70%] flex  gap-16 items-center justify-center">
                            <div class="w-33% h-[50%] flex-col items-center">
                                <span class="text-white font-semibold text-xl "> Total :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> Pemasukan :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> pengeluaran :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="w-[100%] h-52 bg-[#1F2124] rounded-xl overflow-hidden flex-col hover:scale-105 hover:shadow-md hover:shadow-[#d3d174] transition-all duration-300">
                        <div class="w-full h-[30%] flex justify-start items-start shadow-black shadow-sm">
                            <div class="w-[10%] flex justify-center items-center h-full ">
                                <span class="w-full h-[80%] my-auto text-5xl text-white font-semibold flex justify-end">12</span>
                            </div>
                            <div class=" w-[90%] h-[70%] flex-col justify-end items-end my-auto pl-3">
                                <div class="w-full h-[50%] ">
                                    <span class="text-white font-semibold text-base"> Monday </span>
                                </div>
                                <div class="w-full h-[50%]">
                                    <span class="text-white font-semibold text-base ">23 nov</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full h-[70%] flex  gap-16 items-center justify-center">
                            <div class="w-33% h-[50%] flex-col items-center">
                                <span class="text-white font-semibold text-xl "> Total :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> Pemasukan :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> pengeluaran :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="w-[100%] h-52 bg-[#1F2124] rounded-xl overflow-hidden flex-col hover:scale-105 hover:shadow-md hover:shadow-[#d3d174] transition-all duration-300">
                        <div class="w-full h-[30%] flex justify-start items-start shadow-black shadow-sm">
                            <div class="w-[10%] flex justify-center items-center h-full ">
                                <span class="w-full h-[80%] my-auto text-5xl text-white font-semibold flex justify-end">12</span>
                            </div>
                            <div class=" w-[90%] h-[70%] flex-col justify-end items-end my-auto pl-3">
                                <div class="w-full h-[50%] ">
                                    <span class="text-white font-semibold text-base"> Monday </span>
                                </div>
                                <div class="w-full h-[50%]">
                                    <span class="text-white font-semibold text-base ">23 nov</span>
                                </div>
                            </div>
                        </div>
                        <div class=" w-full h-[70%] flex  gap-16 items-center justify-center">
                            <div class="w-33% h-[50%] flex-col items-center">
                                <span class="text-white font-semibold text-xl "> Total :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> Pemasukan :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                            <div class="w-33% h-[50%] flex-col">
                                <span class="text-white font-semibold text-xl"> pengeluaran :</span><br>
                                <span class="text-white font-semibold text-xl"> 500k</span>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
                
            </div>
        </div>
        
    </div>
    
</body>
</html>