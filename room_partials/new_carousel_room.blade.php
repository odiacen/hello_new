<div x-data="carousel()" x-init="startCarousel()" class="flex justify-center items-center h-screen">
    <div class="w-64">
        <div class="relative flex justify-center items-center">
            <template x-for="(image, index) in images">
                <div x-show="isActiveSlide(index)" :key="index" class="absolute w-full">
                    <img :src="image.imageSrc" alt="Slide" class="w-full">
                </div>
            </template>

            <div class="flex justify-between absolute w-full px-4">
                <button @click="previousSlide()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </button>
                <button @click="nextSlide()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
            </div>
        </div>
    </div>

    <script>
        function carousel() {
            const images = [
                {
                    imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',
                },
                {
                    imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                },
                {
                    imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                },
            ];

            let activeSlide = 0;
            let intervalId = null;

            function startCarousel() {
                intervalId = setInterval(() => {
                    nextSlide();
                }, 2000);
            }

            function isActiveSlide(index) {
                return activeSlide === index;
            }

            function previousSlide() {
                activeSlide = activeSlide === 0 ? images.length - 1 : activeSlide - 1;
            }

            function nextSlide() {
                activeSlide = (activeSlide + 1) % images.length;
            }

            return {
                images,
                activeSlide,
                startCarousel,
                isActiveSlide,
                previousSlide,
                nextSlide,
            };
        }
    </script>
</div>
