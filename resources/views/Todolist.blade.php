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
    }
     */
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
            <div class="flex flex-col w-full h-[90%] bg-[#00000075] rounded-2xl overflow-y-scroll scrollbar-hide p-10 gap-3">
                
                    
                 {{-- item 1 --}}
                <div class="flex h-auto w-full bg-[#1F2124] rounded-lg justify-between shadow-md hover:shadow-[#2e1212] hover:scale-105 transition-all duration-200 p-4" onclick="toggleEditCardPopup()">
                        
                    <div class="flex items-center w-full">
                        <input type="checkbox" name="checkbox" id="checkbox" class="h-5 w-5 mr-5 bg-black" onclick="ignorePopup(event)" >
                        <p class="w-full">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    </div>
                  
                </div>

                <!-- edit card pop-up container -->
                <div id="editCardPopup" class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
                    <div class="w-1/2 h-auto bg-[#1F2124] rounded-lg row p-5 shadow-md shadow-black onclick="toggleEditCardPopup()">

                        <p class="text-white font-mono font-semibold text-xl mb-3">edit list</p>

                            <div class="flex items-center w-full">
                                <input type="checkbox" name="checkbox" id="checkbox" class="h-5 w-5 mr-5 bg-black" >
                                <div class="w-full h-auto py-1 overflow-y-scroll scrollbar-hide bg-slate-100 rounded-lg" id="content">
                                    <span contenteditable="true"
                                        class="p-2 mr-5 w-full h-full flex justify-start text-base text-slate-600 outline-none" >Lorem ipsum dolor sit amet</span>
                                </div>                            
                            </div>

                            
                            <div class="flex justify-end mt-4">
                                <span class="close text-yellow-500 hover:text-yellow-600 text-xl font-semibold cursor-pointer" onclick="toggleEditCardPopup()">Finish</span>
                            </div>
                          
                    </div>
                </div>

                <!-- add card pop-up container -->
                <div id="addCardPopup" class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
           
                    <div class="w-1/2 h-auto bg-[#1F2124] rounded-lg row p-5 shadow-md shadow-black onclick="toggleAddCardPopup()">
                        
                        <p class="text-white font-mono font-semibold text-xl mb-3">add list</p>

                            <div class="flex items-center w-full">
                                <input type="checkbox" name="checkbox" id="checkbox" class="h-5 w-5 mr-5 bg-black" >
                                <div class="w-full h-auto py-1 overflow-y-scroll scrollbar-hide bg-slate-100 rounded-lg" id="content">
                                    <span contenteditable="true"
                                        class="p-2 mr-5 w-full h-full flex justify-start text-base text-slate-600 outline-none" ></span>
                                </div>                          
                            </div> 

                            <div class="flex justify-end gap-5 mt-4">
                                <span class="close text-red-600 hover:text-red-700 text-xl font-semibold cursor-pointer" onclick="toggleAddCardPopup()">Delete</span>
                                <span class="close text-yellow-500 hover:text-yellow-600 text-xl font-semibold cursor-pointer" onclick="toggleAddCardPopup()">Finish</span>
                            </div>

                 
                    </div>
                </div>

                    {{-- button plus --}}
                    <button class="fixed bottom-16 right-20 bg-[#c7b047] hover:bg-[#dbc460] text-white p-4 rounded-full shadow" onclick="toggleAddCardPopup()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </button>
                

                    {{-- tambah item dari sini --}}

                
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

        function toggleEditCardPopup() {
            var popup = document.getElementById('editCardPopup');
            popup.classList.toggle('hidden');
        }

        function toggleAddCardPopup() {
            var popup = document.getElementById('addCardPopup');
            popup.classList.toggle('hidden');
        }

        function ignorePopup(event) {
            event.stopPropagation();
        }

    </script>
</body>
</html>