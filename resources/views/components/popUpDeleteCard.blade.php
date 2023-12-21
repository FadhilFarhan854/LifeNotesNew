<div id="popupDeleteCard{{ $id }}"
    class="fixed inset-0 items-center justify-center hidden bg-gray-800 bg-opacity-50 w-full h-full pt-44">
    <div
        class="w-[35%] h-[35%] bg-[#1F2124] rounded-lg row p-8 pt-1 shadow-md shadow-[#000000] m-auto flex flex-col justify-start">
        {{-- X-button --}}
        <div class="w-full h-[15%] flex justify-end items-end mt-4">
            
            <span id="closeButton" class="close text-white hover:text-gray-300 text-3xl cursor-pointer flex justify-end "
                onclick="togglePopUpDelete(event, {{$id}})">&times;</span>

        </div>
        <div class="w-full h-[85%]  flex-col">
            <div class="h-[80%] p-8 pl-2 w-full">

                <span class="text-lg text-white w-full flex">Are you sure to delete this card ?</span>

            </div>

            <div class="w-full h-[20%] flex justify-end items-end gap-2">

                <button onclick="window.location.href='/HapusCatatanKeuangan/{{ $id }}'"
                    class="w-[30%] h-9 bg-red-500/50 rounded-lg hover:bg-red-500 text-white text-center text-base font-semibold">Delete</button>


            </div>
        </div>
       

    </div>
</div>
