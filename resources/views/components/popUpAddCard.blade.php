

<div id="popupAddCard" class="fixed inset-0 items-center justify-center hidden bg-gray-800 bg-opacity-50 w-full h-full pt-48">
    <div class="w-[35%] h-[45%] bg-[#1F2124] rounded-lg row p-8 pt-1 shadow-md shadow-[#000000] m-auto flex flex-col justify-start">
        {{-- X-button --}}
        <div class="w-full h-[15%] flex justify-between ">
            <span class="text-white text-xl  pt-5">Add Card</span><br>
            <span class="close text-white hover:text-gray-300 text-3xl cursor-pointer flex justify-end pt-3" onclick="togglePopUpAdd()">&times;</span>
             
        </div>
        <div class="w-full h-[85%] mt-8 flex-col">
            <div class="h-[80%]">
                <form action="" class="">
                   
                    <input type="text" class="bg-white/0 text-white text-base outline-none w-full border-b-2 border-white mt-6 pb-1"   placeholder="Add New Title">
                   
                </form> 
                
            </div>
            
            <div class="w-full h-[20%] flex justify-end items-end gap-2">
                
                <button onclick="" class="w-[30%] h-9 bg-green-500/50 rounded-lg hover:bg-green-500 text-white text-center text-base font-semibold">Finish</button>
                
                
            </div>
        </div>
       
       
        
    </div>
</div>
