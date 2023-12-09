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
                    <div class="w-[80%]   bg-[#c7b047] text-white  h-12 rounded-lg flex  items-center justify-center hover:scale-105  transition-all duration-200"><span class="text-lg font-bold text-white">Catatan</span></div>
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
            <div class="w-full h-[90%]  bg-[#00000075] rounded-2xl">

                <div class="w-full h-full flex flex-wrap items-start justify-center gap-5 p-5 overflow-y-scroll scrollbar-hide ">
                    <div class="w-full h-72 flex flex-wrap justify-center items-center">
                        <div class="w-full  flex flex-wrap justify-center items-center">
                            <span class=" text-9xl bg-gradient-to-tr from-[#564b21]  to-[#c7b047] bg-animate bg-clip-text text-transparent font-bold items-center">
                                NOTES
                            </span>
                        </div>
                        
                        <div class="flex justify-center items-center w-[55%]">
                            <span class="text-base bg-gradient-to-tr bg-animate from-[#564b21]  to-[#c7b047]  bg-clip-text text-transparent font-bold items-center text-center">
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, iure. Rem voluptatibus, ipsa similique doloribus quis a praesentium nostrum molestiae incidunt assumenda nobis vel porro temporibus quisquam vero aperiam! Eum.
                             </span>
             
                        </div>
                       
                    </div>
                    <!-- box1 -->
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex-col items-center justify-center shadow-md hover:shadow-[#fff] hover:scale-105 transition-all duration-200"><span class="w-full h-full flex justify-center items-center -mt-3">+</span></div>
                    <!-- box2 -->
                    <divs class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex-col items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200 group cursor-pointer">
                        <script>
                                const divElement = document.querySelector('divs'); // Replace 'div' with the ID or class of your actual div element
                                divElement.addEventListener('click', function() {
                                 window.location.href = '/Catatan'; // Replace 'https://www.example.com' with the URL of your desired page
                            });
                        </script>
                        
                        <div class="w-full h-[20%] flex justify-start p-5 ">
                            <span class="text-white font-bold text-2xl flex justify-start items-start ">Title</span>
                        </div>
                        <div class="w-full h-[80%]  flex justify-start items-start p-5 ">
                            <span class="text-white font-bold text-sm flex justify-start items-start ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vero ex voluptatibus vitae recusandae.</span>
                        </div>

                    </divs>

                    <!-- box3 -->
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex-col items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200 ">
                        <div class="w-full h-[15%] flex justify-start p-2 gap-2">
                            {{-- tags --}}
                            <div class="w-[20%] h-[100%] bg-[#d3d174] text-white rounded-full text-xs flex justify-center ">
                                <span class=" text-white rounded-full text-xs my-auto font-bold">TAGS</span>
                            </div>
                            <div class="w-[20%] h-[100%] bg-[#d3d174] text-white rounded-full text-xs flex justify-center ">
                                <span class=" text-white rounded-full text-xs my-auto font-bold">TAGS</span>
                            </div>
                            <div class="w-[20%] h-[100%] bg-[#d3d174] text-white rounded-full text-xs flex justify-center ">
                                <span class=" text-white rounded-full text-xs my-auto font-bold">TAGS</span>
                            </div>
                           
                          
                        </div>
                          {{-- title --}}
                        <div class="w-full h-[20%] flex justify-start p-5">
                            <span class="text-white font-bold text-lg flex justify-start items-start ">Title</span>
                        </div>
                        {{-- content --}}
                        <div class="w-full h-[65%]  flex justify-start items-start p-5">
                            <span class="text-white font-bold text-sm flex justify-start items-start ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vero ex voluptatibus vitae recusandae.</span>
                        </div>

                    </div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    <div class=" w-52 h-52 bg-[#1F2124] rounded-lg text-9xl flex items-center shadow-md hover:shadow-[#d3d174] hover:scale-105 transition-all duration-200"></div>
                    

                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>