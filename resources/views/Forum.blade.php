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
      border-radius: 9999px; /* Menetapkan radius sudut yang besar untuk membuatnya terlihat bulat */
      padding: 10px;
      background-color: #323232; /* Warna latar belakang */
      color: #ffffff; /* Warna teks */
      box-shadow: 0 10px 6px rgba(0, 0, 0, 0.2); /* Pertebalan bayangan */
    }
    .truncate-overflow {
      display: -webkit-box;
      -webkit-line-clamp: 4; /* Jumlah baris yang ingin ditampilkan */
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
            <div class="flex w-full h-[90%] bg-[#00000075] rounded-2xl overflow-y-scroll scrollbar-hide">
                <div class="h-auto">
                <div class="grid grid-cols-2 w-full h-auto items-start gap-5 p-5">
                    
                    {{-- item 1 --}}
                    <div class=" h-64 bg-[#1F2124] rounded-lg text-9xl row p-5 shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200">
                        
                        <div class="flex justify-between h-[26%]">
                            <div class="flex flex-col">
                                <h1 class="font-semibold text-xl">Judul</h1>
                                <p class="text-sm mb-3">Author</p>
                            </div>
                            <p class="text-xs mt-1">12 h</p>
                        </div>

                        <div class="h-[55%]">
                            <p class="truncate-overflow text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sequi beatae dolore sunt deleniti iusto reiciendis non. Illum velit explicabo reiciendis in. Veniam nobis debitis neque ad enim fuga dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat veritatis, voluptatem vel accusantium aliquam, dolorum nobis veniam voluptatum velit voluptas laborum aut repellat obcaecati labore eum quod earum maxime? </p>    
                            <div class="flex cursor-pointer" onclick="togglePopup()">
                                <a class="text-blue-500 text-sm">Baca Selengkapnya</a>
                            </div>
                        </div>   
                                  
                        <div class="flex justify-end h-[19%]">
                            <div class="flex pr-4">
                                <button class="round-button flex items-center shadow-3xl" onclick="toggleLike(this)">
                                <img class="heart-icon w-5" src="../img/grey_heart.png" alt="Heart Icon">
                                </button>
                                <p class="text-xs m-2.5">120</p>
                            </div>
                        </div>
                      
                    </div>

                
                    {{-- item 2 --}}
                    <div class=" h-64 bg-[#1F2124] rounded-lg text-9xl row p-5 shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200">
                        
                        <div class="flex justify-between h-[26%]">
                            <div class="flex flex-col">
                                <h1 class="font-semibold text-xl">Judul</h1>
                                <p class="text-sm mb-3">Author</p>
                            </div>
                            <p class="text-xs mt-1">12 h</p>
                        </div>

                        <div class="h-[55%]">
                            <p class="truncate-overflow text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sequi beatae dolore sunt deleniti iusto reiciendis non. Illum velit explicabo reiciendis in. Veniam nobis debitis neque ad enim fuga dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat veritatis, voluptatem vel accusantium aliquam, dolorum nobis veniam voluptatum velit voluptas laborum aut repellat obcaecati labore eum quod earum maxime? </p>    
                            <div class="flex cursor-pointer" onclick="togglePopup()">
                                <a class="text-blue-500 text-sm">Baca Selengkapnya</a>
                            </div>
                        </div>   
                              
                        <div class="flex justify-end h-[19%]">
                            <div class="flex pr-4">
                                <button class="round-button flex items-center shadow-3xl" onclick="toggleLike(this)">
                                <img class="heart-icon w-5" src="../img/grey_heart.png" alt="Heart Icon">
                                </button>
                                <p class="text-xs m-2.5">120</p>
                            </div>
                        </div>
                  
                    </div>

                    {{-- item 3 --}}
                    <div class=" h-64 bg-[#1F2124] rounded-lg text-9xl row p-5 shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200">
                        
                        <div class="flex justify-between h-[26%]">
                            <div class="flex flex-col">
                                <h1 class="font-semibold text-xl">Judul</h1>
                                <p class="text-sm mb-3">Author</p>
                            </div>
                            <p class="text-xs mt-1">12 h</p>
                        </div>

                        <div class="h-[55%]">
                            <p class="truncate-overflow text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sequi beatae dolore sunt deleniti iusto reiciendis non. Illum velit explicabo reiciendis in. Veniam nobis debitis neque ad enim fuga dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat veritatis, voluptatem vel accusantium aliquam, dolorum nobis veniam voluptatum velit voluptas laborum aut repellat obcaecati labore eum quod earum maxime? </p>    
                            <div class="flex cursor-pointer" onclick="togglePopup()">
                                <a class="text-blue-500 text-sm">Baca Selengkapnya</a>
                            </div>
                        </div>   
                                  
                        <div class="flex justify-end h-[19%]">
                            <div class="flex pr-4">
                                <button class="round-button flex items-center shadow-3xl" onclick="toggleLike(this)">
                                <img class="heart-icon w-5" src="../img/grey_heart.png" alt="Heart Icon">
                                </button>
                                <p class="text-xs m-2.5">120</p>
                            </div>
                        </div>
                      
                    </div>

                    {{-- item 4 --}}
                    <div class=" h-64 bg-[#1F2124] rounded-lg text-9xl row p-5 shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200">
                        
                        <div class="flex justify-between h-[26%]">
                            <div class="flex flex-col">
                                <h1 class="font-semibold text-xl">Judul</h1>
                                <p class="text-sm mb-3">Author</p>
                            </div>
                            <p class="text-xs mt-1">12 h</p>
                        </div>

                        <div class="h-[55%]">
                            <p class="truncate-overflow text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sequi beatae dolore sunt deleniti iusto reiciendis non. Illum velit explicabo reiciendis in. Veniam nobis debitis neque ad enim fuga dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat veritatis, voluptatem vel accusantium aliquam, dolorum nobis veniam voluptatum velit voluptas laborum aut repellat obcaecati labore eum quod earum maxime? </p>    
                            <div class="flex cursor-pointer" onclick="togglePopup()">
                                <a class="text-blue-500 text-sm">Baca Selengkapnya</a>
                            </div>
                        </div>   
                                  
                        <div class="flex justify-end h-[19%]">
                            <div class="flex pr-4">
                                <button class="round-button flex items-center shadow-3xl" onclick="toggleLike(this)">
                                <img class="heart-icon w-5" src="../img/grey_heart.png" alt="Heart Icon">
                                </button>
                                <p class="text-xs m-2.5">120</p>
                            </div>
                        </div>
                      
                    </div>

                    {{-- item 5 --}}
                    <div class=" h-64 bg-[#1F2124] rounded-lg text-9xl row p-5 shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200">
                        
                        <div class="flex justify-between h-[26%]">
                            <div class="flex flex-col">
                                <h1 class="font-semibold text-xl">Judul</h1>
                                <p class="text-sm mb-3">Author</p>
                            </div>
                            <p class="text-xs mt-1">12 h</p>
                        </div>

                        <div class="h-[55%]">
                            <p class="truncate-overflow text-base">cabo reiciendictetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sequi beatae dolore sunt deleniti iusto reiciendis non. Illum velit explicabo reiciendise? </p>    
                            <div class="flex cursor-pointer" onclick="togglePopup()">
                                <a class="text-blue-500 text-sm">Baca Selengkapnya</a>
                            </div>
                        </div>   
                                  
                        <div class="flex justify-end h-[19%]">
                            <div class="flex pr-4">
                                <button class="round-button flex items-center shadow-3xl" onclick="toggleLike(this)">
                                <img class="heart-icon w-5" src="../img/grey_heart.png" alt="Heart Icon">
                                </button>
                                <p class="text-xs m-2.5">120</p>
                            </div>
                        </div>
                      
                    </div>


                <!-- pop-up container -->
                <div id="popup" class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
           
                    <div class="w-1/2 h-auto bg-[#1F2124] rounded-lg row p-5 shadow-md shadow-white onclick="togglePopup()">
                        <span class="close text-white hover:text-gray-300 text-2xl cursor-pointer" onclick="togglePopup()">&times;</span>

                        <div class="flex justify-between h-10 mb-3">
                            <div class="flex flex-col">
                                <h1 class="font-semibold text-xl">Judul</h1>
                            <p class="text-sm mb-3">Author</p>
                            </div>
                    
                            <p class="text-xs mt-1">12 h</p>
                        </div>

                
                        <div class="h-auto">
                            <p class="text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat a ut sint. Repellendus delectus, neque sit tempora, deserunt eaque quaerat adipisci odit reprehenderit ducimus totam distinctio, ipsam cumque aut tenetur? ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptates, ex optio suscipit sed soluta blanditiis iste porro dignissimos voluptatem tempore, in quod illo rerum. Nisi quia impedit distinctio voluptatem! ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis sequi beatae dolore sunt deleniti iusto reiciendis non. Illum velit explicabo reiciendis in. Veniam nobis debitis neque ad enim fuga dolore? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat veritatis, voluptatem vel accusantium aliquam, dolorum nobis veniam voluptatum velit voluptas laborum aut repellat obcaecati labore eum quod earum maxime? 
                            </p>    
                        </div>
                          
                        <div class="h-auto mt-4">
                            <div class="flex justify-end pr-4">
                                <button class="round-button flex items-center shadow-3xl" onclick="toggleLike(this)">
                                <img class="heart-icon w-5" src="../img/grey_heart.png" alt="Heart Icon">
                                </button>
                                <p class="text-xs m-2.5">120</p>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- button plus --}}
                <button class="fixed bottom-16 right-20 bg-[#c7b047] hover:bg-[#dbc460] text-white p-4 rounded-full shadow">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
                

                    {{-- tambah item dari sini --}}

                </div>
            </div>
        </div>
        </div>
        
    </div>

    <script>
        function toggleLike(button) {
            var likeImage = button.querySelector('.heart-icon');
    
            if (likeImage.src.endsWith('grey_heart.png')) {
                likeImage.src = '../img/red_heart.png';
            } else {
                likeImage.src = '../img/grey_heart.png';
            }
        }

        function togglePopup() {
            var popup = document.getElementById('popup');
            popup.classList.toggle('hidden');
        }
    </script>
</body>
</html>