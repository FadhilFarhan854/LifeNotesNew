<div id="popup"
    class="fixed inset-0 items-center justify-center hidden bg-gray-800 bg-opacity-50 w-full h-full pt-44">
    <div
        class="w-[30%] h-[65%] bg-[#1F2124] rounded-lg row p-8 pt-1 shadow-md shadow-[#000000] m-auto flex flex-col justify-start">
        {{-- X-button --}}
        <div class="w-full h-[15%] flex justify-between px-2">
            <span class="text-white text-xl font-bold pt-5">Asset</span><br>
            <span class="close text-white hover:text-gray-300 text-3xl cursor-pointer flex justify-end pt-3"
                onclick="togglePopup()">&times;</span>

        </div>
        <div class="w-full h-[85%]  flex-col">
            <div class="h-[80%]">
                <form action="/TambahDataKeuangan/{{request()->route('id_catatan')}}" class="w-full h-full flex flex-col justify-between" method="get">
                    @csrf
                    <div class="mt-1">
                        <input name="deskripsi" type="text"
                        class="bg-white/0 text-white text-base outline-none w-full border-b-2 border-white mt-6 pb-1"
                        placeholder="Description">
                    <input name ="nominal" type="text"
                        class="bg-white/0 text-white text-base outline-none w-full border-b-2 border-white mt-6 pb-1"
                        placeholder="Nominal">
                    </div>
                    
                    <div class="w-full h-[20%] flex justify-end items-end gap-2 mt-36">
                        <button name="expense"
                            class="w-[30%] h-9 bg-red-500/50 rounded-lg hover:bg-red-500 text-white text-center text-base font-semibold">Expense</button>
                        <button name="income"
                            class="w-[30%] h-9 bg-green-500/50 rounded-lg hover:bg-green-500 text-white text-center text-base font-semibold">Income</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>
