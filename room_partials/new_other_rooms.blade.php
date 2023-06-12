<div x-data="otherRooms()" class="grid justify-center items-center mt-24">
    <span class="text-2xl font-bold text-black text-center">Otras habitaciones</span>
    <div class="grid grid-cols-3 justify-center items-center lg:px-20 px-10 mt-2">
        <template x-for="(room, index) in rooms">
            <a href="#" class="flex flex-col lg:w-[300px] w-[200px] items-start bg-gray-100 mt-10 lg:ml-10 ml-2 relative">
                <img class="object-cover w-full lg:h-48 h-48" :src="portadas[index]" alt="">
                <div class="absolute bg-cyan-300 flex flex-row p-2 text-sm text-white font-bold mb-1 bottom-12 right-1">
                    <span x-text="room.price"></span>
                    <span class="ml-2">e/mes</span>
                </div>
                <div class="flex flex-row justify-start items-start py-2 p-0.5 ml-4">
                    <span class="flex justify-center text-xs font-bold items-center bg-white rounded-full p-1 h-6 w-6" x-text="room.type"></span>
                    <span class="text-black text-sm font-bold ml-3" x-text="room.title"></span>
                </div>
            </a>
        </template>
    </div>

    <script>
        function otherRooms() {
            const rooms = [
                {
                    title: "Cama doble",
                    type: "x2",
                    price: "100"
                },
                {
                    title: "Cama individual",
                    type: "x1",
                    price: "200"
                },
                {
                    title: "Cama individual",
                    type: "x1",
                    price: "300"
                }
            ];

            const portadas = [
                'https://www.helloflatmate.com/img/img/room1.png',
                'https://www.helloflatmate.com/img/img/room2.png',
                'https://www.helloflatmate.com/img/img/room3.png'
            ];

            return {
                rooms,
                portadas,
            };
        }
    </script>
</div>