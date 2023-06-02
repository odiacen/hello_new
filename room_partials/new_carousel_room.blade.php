<div x-data="carousel()" class="flex justify-center items-center h-screen">
    <div class="w-64">
        <div class="relative">
            <template x-for="(image, index) in images">
                <div x-show="activeSlide === index" :key="index" class="absolute w-full">
                    <img :src="image.imageSrc" alt="Slide" class="w-full">
                </div>
            </template>

            <div class="flex justify-between absolute w-full px-4">
                <button @click="activeSlide = Math.max(activeSlide - 1, 0)" class="text-white text-2xl">&larr;</button>
                <button @click="activeSlide = Math.min(activeSlide + 1, images.length - 1)" class="text-white text-2xl">&rarr;</button>
            </div>
        </div>
    </div>

    <script>
        function carousel() {
            return {
                images: [
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                    },
                    {
                        imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                    },
                ],
                activeSlide: 0,
            };
        }
    </script>
</div>
