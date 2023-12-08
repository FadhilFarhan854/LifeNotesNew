<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
       
    </style>
</head>
<body >
    <div class="w-full h-[100vh] bg-cover" style="background-image:url('../img/bgai5.jpg'); ">
        <div class="w-full h-full backdrop-blur-md bg-black/20 flex justify-center items-center">
            <div class="w-[70%] h-[67.5%] bg-black/50 flex justify-center align-middle rounded-xl ">
                <!-- <div class="w-[60%] h-full bg-green-300/50 flex justify-center align-middle rounded-xl ">
                    <div class="flex justify-center items-center h-[20%]">
                        <img src="../img/logo_dpl.png" alt="" class="h-[100%] mt-10">
                        <div class="flex-col mt-10">
                            <span class="font-bold text-5xl text-white">Life </span><br>
                            <span class="font-bold text-5xl text-white"> Notes</span>
                        </div>
                        
                    </div>
                </div> -->
                <div class="w-[0%] md:w-[60%] md:h-full md:bg-black/50 md:flex-col md:justify-center md:items-center md:align-middle md:rounded-md ">
                    <div class="flex justify-center items-center h-[100%]">
                        <img src="../img/logo_dpl.png" alt="" class="h-[60%]">              
                    </div>
                    
                </div>
                <div class="w-[100%] h-[100%] md:w-[40%] md:h-[full] md:bg-black/80 flex-col justify-center align-middle rounded-md ">
                   
                    <div class="mt-10 flex justify-center items-center align-middle">
                        <Span class="font-bold text-4xl text-white ">REGISTER</Span>
                    </div>
                    <div class="p-5">
                        <form action="" class="w-[100%] h-[75%]  mt-3">
                            
                            <input type="text" class="rounded-md w-full py-2 mt-5 px-3 bg-[#fff0] outline outline-1 outline-white text-white" placeholder="Username">
                            <input type="text" class="rounded-md w-full py-2 mt-5 px-3 bg-[#fff0] outline outline-1 outline-white text-white mb-1" placeholder="Password">   
                            <input type="text" class="rounded-md w-full py-2 mt-4 px-3 bg-[#fff0] outline outline-1 outline-white text-white mb-1" placeholder="Confirm Password">   
                              
                            <input type="submit" class="rounded-md w-full h-10  bg-white font-bold hover:bg-[#c7b047] hover:text-white focus:bg-white hover:scale-105 transition-all duration-100 text-black  focus:text-black mt-10" value="Register">
                            <input type="submit" class="rounded-md w-full h-10  bg-white font-bold hover:bg-[#c7b047] hover:text-white focus:bg-white hover:scale-105 transition-all duration-100 text-black  focus:text-black mt-2" value="Back">
        
                                            
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
        
</body>
</html>