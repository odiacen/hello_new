<div x-data="cardsGrid()" class="grid justify-center items-center">
    <div class="grid grid-cols-2 lg:grid-cols-3 justify-center items-center px-20 mt-2">
        <template x-for="(card, index) in visibleCards" :key="card">
            <a href="#" class="flex flex-col lg:w-[300px] w-[330px] items-start bg-gray-100 mt-10 ml-10 relative">
                <img class="object-cover w-full lg:h-48 h-56" :src="card.imageSrc" alt="">
                <div class="absolute bg-cyan-300 flex flex-row p-2 text-sm text-white font-bold mb-1 bottom-14 right-1">
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
    <div class="flex justify-center items-center">
        <button x-show="showLoadMoreButton" @click="loadMoreCards"
                class="mt-10 bg-cyan-300 lg:w-1/4 w-3/4 hover:bg-cyan-400 text-white font-bold py-2 px-10 rounded-full">
            Cargar más
        </button>
    </div>

    <script>
        function cardsGrid() {
            const cards = [
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
            ];

            const visibleCardsCount = 9;
            const showLoadMoreButton = cards.length > visibleCardsCount;
            let visibleCards = cards.slice(0, visibleCardsCount);

            return {
                cards,
                visibleCards,
                showLoadMoreButton,
                loadMoreCards() {
                    const nextVisibleCardsCount = this.visibleCards.length + visibleCardsCount;
                    this.visibleCards = cards.slice(0, nextVisibleCardsCount);
                }
            };
        }
    </script>
</div>
