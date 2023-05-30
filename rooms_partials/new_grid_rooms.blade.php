<div x-data="cardsGrid()">
    <div class="flex flex-wrap justify-center items-center px-20 mt-10">
        <template x-for="card in cards" :key="card">
            <a href="#" class="flex flex-col items-start bg-gray-100 mt-10 ml-10 relative">
                <img class="object-cover w-full h-48" :src="card.imageSrc" alt="">
                <span
                      class="absolute bg-cyan-300 p-2 text-sm text-white font-bold bottom-1 right-1"
                      x-text="card.price">
                    e/mes
                </span>
                <div class="flex flex-col justify-between items-start p-1">
                    <h5 class="mb-2 text-sm font-bold text-black" x-text="card.title"></h5>
                    <p class="mb-2 text-sm text-gray-900" x-text="card.description"></p>
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
