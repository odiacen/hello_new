<div x-data="carousel()" x-init="startCarousel()" class="w-full flex flex-col justify-start items-start mt-20 px-36">
    <div class="flex flex-row justify-start items-start">
        <div class="flex flex-col w-2/3">
            <div class="flex flex-row justify-between mb-10">
                <div class="flex flex-col">
                    <span class="text-black text-xl font-bold">Tranquila habitación doble</span>
                    <span class="text-black text-sm">Zona centro</span>
                </div>
                <span class="bg-neutral-200 text-black text-sm p-0.5">
            Cod. habitación <strong>ZNANSDHAJAKJA</strong>
        </span>
            </div>
            <div class="h-auto">
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
        </div>
        <div class="flex flex-col justify-start items-start ml-10 space-y-4">
            <span class="bg-cyan-300 text-white font-bold text-sm p-2 w-1/2">275 e/mes</span>
            <button class="bg-[#3f12a3] flex flex-row justify-center items-center p-1 rounded-full text-white text-sm font-bold">
                Reserva sin esperas
                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">
                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>
                </span>
            </button>
            <button class="bg-gray-500 flex flex-row justify-center items-center p-1 rounded-full text-white text-sm font-bold">
                ¿Alguna pregunta?
                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">
                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>
                </span>
            </button>
            <button class="bg-cyan-300 flex flex-row justify-center items-center p-1 rounded-full text-white text-sm font-bold">
                Como reservar
                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">
                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>
                </span>
            </button>
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

            return {
                images,
                activeSlide: 0,
                startCarousel() {
                    setInterval(() => {
                        this.nextSlide();
                    }, 10000);
                },
                isActiveSlide(index) {
                    return this.activeSlide === index;
                },
                previousSlide() {
                    this.activeSlide = (this.activeSlide - 1 + this.images.length) % this.images.length;
                },
                nextSlide() {
                    this.activeSlide = (this.activeSlide + 1) % this.images.length;
                },
            };
        }
    </script>
</div>
