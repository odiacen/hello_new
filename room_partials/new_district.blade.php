<div x-data="carouselDistrict()" x-init="startCarousel()" class="w-full mt-14 lg:mb-28 lg:px-36 px-10">
    <div class="flex flex-col justify-center items-center w-full">
        <span class="text-black text-2xl font-bold">El barrio</span>
        <div class="flex flex-row justify-start items-start w-full">
            <div class="flex flex-col justify-between w-1/2 h-[250px]">
                <div class="relative flex justify-center items-center mt-32 lg:mt-40">
                    <template x-for="(image, index) in images">
                        <div x-show="isActiveSlide(index)" :key="index" class="absolute w-full">
                            <img :src="image.imageSrc" alt="Slide" class="w-full h-[250px]">
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
            <div class="flex flex-col justify-start items-start lg:ml-10 ml-4 w-1/2 lg:mt-12 mt-6">
                <p class="text-xs text-black text-justify px-4 lg:h-auto h-[70px] overflow-y-auto">
                    Vivir en Moncada es tener toda la comodidad de poder ir andando a la Universidad CEU Cardenal Herrera, y la tranquilidad de vivir en un pueblo tranquilo donde la mayoría de los vecinos se conocen y están dispuestos a ayudarte. Llevan muchos años acogiendo a los estudiantes nacionales e internacionales, y el pueblo tiene ambiente estudiantil.
                </p>
                <p class="text-xs text-black text-justify px-4 lg:mt-4 mt-2">
                    Y cuando quieras ir a Valencia tan sólo tardarás 15 minutos en el Metro!
                </p>
                <p class="text-xs text-black text-justify px-4 lg:mt-4 mt-2">
                    Situado en pleno corazón de la ciudad de Moncada y con todos los servicios al alcance de tu mano.
                </p>
                <p class="text-xs text-black text-justify px-4 lg:mt-4 mt-2">
                    La estación CEU-Seminari (línea 1) se encuentra a menos de 5 minutos conectándote con el centro de la ciudad de Valencia en menos de 15 minutos.
                </p>
            </div>
        </div>
    </div>

    <script>
        function carouselDistrict() {
            const images = [
                {
                    imageSrc: 'https://www.helloflatmate.com/img/img/barrio.png',
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
