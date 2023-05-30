<div x-data="cardsGrid()">
    <div class="flex flex-wrap justify-center items-center px-20 mt-2">
        <template x-for="card in cards" :key="card">
            <a href="#" class="flex flex-col w-56 items-start bg-gray-100 mt-10 ml-10 relative">
                <img class="object-cover w-full h-48" :src="card.imageSrc" alt="">
                <div class="absolute bg-cyan-300 flex flex-row p-2 text-sm text-white font-bold bottom-14 right-1">
                    <span x-text="card.price"></span>
                    <span class="ml-2">e/mes</span>
                </div>
                <div class="flex flex-col justify-between items-start py-2 p-0.5 ml-4">
                    <h5 class="text-sm font-bold text-black" x-text="card.title"></h5>
                    <p class="text-sm text-gray-900" x-text="card.description"></p>
                </div>
            </a>
        </template>
    </div>

    <script>
        function cardsGrid() {
            return {
                cards: [
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 275
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 375
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 285
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 275
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 375
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 285
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 275
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 375
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria',
                        price: 285
                    },
                ]
            };
        }
    </script>
</div>
