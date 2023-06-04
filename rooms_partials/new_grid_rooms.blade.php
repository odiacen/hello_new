<div class="grid justify-center items-center">
    <div class="grid grid-cols-2 lg:grid-cols-3 justify-center items-center px-20 mt-2">
        <template x-for="(room, index) in rooms">
            <a href="#" class="flex flex-col lg:w-[300px] w-[330px] items-start bg-gray-100 mt-10 ml-10 relative">
                <img class="object-cover w-full lg:h-48 h-56" :src="portadas[index]" alt="">
                <div class="absolute bg-cyan-300 flex flex-row p-2 text-sm text-white font-bold mb-1 bottom-14 right-1">
                    <span x-text="room.price"></span>
                    <span class="ml-2">e/mes</span>
                </div>
                <div class="flex flex-col justify-between items-start py-2 p-0.5 ml-4">
                    <h5 class="text-sm font-bold text-black w-[25%] text-ellipsis overflow-hidden" x-text="room.title"></h5>
                    <p class="text-sm text-gray-900 text-ellipsis overflow-hidden" x-text="room.type"></p>
                </div>
            </a>
        </template>
    </div>
    <div class="flex justify-center items-center">
        <button x-show="showLoadMoreButton" @click="page++, getRooms()"
                class="mt-10 bg-cyan-300 lg:w-1/4 w-3/4 hover:bg-cyan-400 text-white font-bold py-2 px-10 rounded-full">
            Cargar más
        </button>
    </div>    
</div>