<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
    <!-- <style >
    * {
        border: 1px solid red;
    }
    </style> -->
</head>
<body>
    <div class="w-full bg-cover bg-no-repeat" style="background-image:url('../img/notes.png')">
        <!-- section 1 -->
        <div class="h-[120vh] w-full">
            <!-- nav -->
            <div class="flex h-16 w-full bg-[#0000005b] ">
                <ul class="flex justify-start text-white gap-3 p-2 w-full ml-1">
                    <li><img src="../img/logo_dpl.png" alt="" class="h-[80%]"></li>
                    <li class="my-auto font-semibold text-2xl">Life Notes</li>
                    
                </ul>
                
            </div>

            <!-- sub-Section 1 -->
            <div class="w-full h-80 mt-28" >
                <div class="w-[60%] flex-col pl-10">
                    <span class="text-white font-bold text-8xl ">Life Notes</span><br>
                    <span class=" text-white font-semibold text-base justify-start "> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem magnam suscipit consectetur animi id quaerat natus repellat soluta aspernatur unde itaque et expedita fugiat ipsa commodi, adipisci illum voluptate non. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio labore blanditiis provident accusantium beatae, tenetur eaque voluptas quo est eveniet nostrum iusto tempora nam doloribus quos illum qui non commodi.</span>
                    <div class="flex justify-start mt-5 gap-3">
         
                        <a href="/Login" class="rounded-md bg-slate-200 w-20 h-10 flex justify-center items-center" ><span class="text-slate-700 text-base font-bold">Login</span></a>
                        <a href="/Register" class="rounded-md bg-slate-200 w-20 h-10 flex justify-center items-center" ><span class="text-slate-700 text-base font-bold">Register</span></a>
                        
                        
                    </div>
                </div>

            </div>

            <!-- gradient -->
            <div class="mt-16 w-full h-80 bg-gradient-to-b from-[#01000000] to-black">

            </div>
            <!-- section 2 -->
            <div class="bg-black h-auto w-full px-9">
                <div class="">
                    <span class="text-white font-bold text-6xl p-7">Features</span><br>
                </div>
                <div class="mt-10 w-full h-auto grid grid-cols-4 gap-7 p-7">
                    <div class="flex-col  border-white rounded-xl border-4  h-[28rem]">
                        <div class="flex w-full h-[50%] justify-center items-center ml-3">
                            <img src="../img/notesIcon.png" alt="" class="h-[65%] filter invert ">
                            
                        </div>
                        <span class="text-white font-semibold text-2xl justify-center flex items-center ">Catatan</span>
                        <div class="flex  justify-start p-3 h-auto">
                            <span class="text-white text-base ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero porro temporibus eaque exercitationem iusto, commodi, ab vel sint non dolor eveniet. Minima ratione repellendus reprehenderit architecto ut! Asperiores, iusto a.</span>
                        </div>
                    </div>
                    <div class="flex-col  border-white rounded-xl border-4  h-[28rem]">
                        <div class="flex w-full h-[50%] justify-center items-center ">
                            <img src="../img/to-do-list.png" alt="" class="h-[65%] filter invert ">
                            
                        </div>
                        <span class="text-white font-semibold text-2xl justify-center flex items-center ">To-do List</span>
                        <div class="flex  justify-start p-3 h-auto">
                            <span class="text-white text-base ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero porro temporibus eaque exercitationem iusto, commodi, ab vel sint non dolor eveniet. Minima ratione repellendus reprehenderit architecto ut! Asperiores, iusto a.</span>
                        </div>
                    </div>
                    <div class="flex-col  border-white rounded-xl border-4  h-[28rem]">
                        <div class="flex w-full h-[50%] justify-center items-center ">
                            <img src="../img/money-bag.png" alt="" class="h-[65%] filter invert ">
                            
                        </div>
                        <span class="text-white font-semibold text-2xl justify-center flex items-center ">Catatan Keuangan</span>
                        <div class="flex  justify-start p-3 h-auto">
                            <span class="text-white text-base ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero porro temporibus eaque exercitationem iusto, commodi, ab vel sint non dolor eveniet. Minima ratione repellendus reprehenderit architecto ut! Asperiores, iusto a.</span>
                        </div>
                    </div>
                    <div class="flex-col  border-white rounded-xl border-4  h-[28rem]">
                        <div class="flex w-full h-[50%] justify-center items-center ">
                            <img src="../img/globe.png" alt="" class="h-[65%] filter invert ">
                            
                        </div>
                        <span class="text-white font-semibold text-2xl justify-center flex items-center ">Saluran</span>
                        <div class="flex  justify-start p-3 h-auto">
                            <span class="text-white text-base ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero porro temporibus eaque exercitationem iusto, commodi, ab vel sint non dolor eveniet. Minima ratione repellendus reprehenderit architecto ut! Asperiores, iusto a.</span>
                        </div>
                    
                                     
                </div>

            <!-- <div class="w-[100vh] flex-row">
                 <span class="text-white font-bold text-6xl ">Why Life Notes ?</span><br>
                 <ul>
                
                 </ul>
            </div> -->
           
            

            </div>

        </div>

    </div>
</body>
</html>