<div id="popup" class="fixed inset-0 items-center justify-center hidden bg-gray-800 bg-opacity-50 w-full h-full pt-32">
    <div class="w-1/2 h-[50%] bg-[#1F2124] rounded-lg row p-3 pt-1 shadow-md shadow-[#000000] m-auto">
        {{-- X-button --}}
        <span class="close text-white hover:text-gray-300 text-2xl cursor-pointer" onclick="togglePopup()">&times;</span>
        <div class="flex justify-between h-[90%] mb-3 w-full">
            <div class="flex flex-col h-[100%] w-[60%] justify-between">
                <div class="w-[100%] rounded-lg text-white flex-col pt-5 ">

                    <input type="text" class="bg-[#0000007b] w-[100%] h-10 rounded-md  text-lg pl-4" placeholder="Jumlah">
                    
                    <input type="text" class="bg-[#0000007b] w-[100%] min-h-[40px] h-auto mt-4 rounded-md text-lg pl-4" placeholder="Deskripsi">
                </div>

                <div>
                    <button class="w-[30%] h-10 bg-black/50 text-white rounded-md p-2" onclick="togglePopup()">Back</button>
                </div>
            </div>
            
            <div class="flex h-[100%] w-[40%]  ">
                <div class="w-full h-full flex justify-end items-end gap-3">
                    
                        <button class="w-[100%] h-10 bg-red-500/50 text-white rounded-md p-2">Pengeluaran</button>
                    
                    
                        <button class="w-[100%] h-10 bg-green-400/50 text-white rounded-md p-2">Pemasukan</button>
                    
                </div>
                
            </div>
        </div>
        
    </div>
</div>
