<div x-data="cardsGrid()">
    <div class="flex flex-wrap justify-center items-center px-24">
        <template x-for="card in cards" :key="card">
            <a href="#" class="flex flex-col items-center bg-gray-100">
                <img class="object-cover w-full h-56" :src="card.imageSrc" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-xl font-bold text-black" x-text="card.title"></h5>
                    <p class="mb-3 font-normal text-gray-900" x-text="card.description"></p>
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
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                        title: 'Tranquila habitación doble',
                        description: 'En la mejor zona universitaria'
                    },
                ]
            };
        }
    </script>
</div>
