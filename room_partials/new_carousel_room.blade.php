<div x-data="carousel()" x-init="startCarousel()" class="w-full mt-14 lg:mb-28 lg:px-36 px-10">
    <div class="flex flex-row justify-start items-start w-full">
        <div class="flex flex-col relative lg:w-2/3 w-[75%]">
            <div class="flex flex-row justify-between mb-10">
                <div class="flex flex-col">
                    <span class="text-black text-xl font-bold">Tranquila habitación doble</span>
                    <span class="text-black text-sm">Zona centro</span>
                </div>
                <div class="bg-neutral-200 text-black text-xs flex flex-row p-1 h-[20px]">
                    <span>
                        Cod. habitación
                    </span>
                    <span class="font-bold ml-2">ZNANSDHAJAKJA</span>
                </div>
            </div>

            <!-- Tab content -->
            <div class="h-[400px]" x-show="activeTab === 'photos'">
                <!-- Existing carousel code -->
                <div class="relative flex justify-center items-center mt-24 lg:mt-40">
                    <template x-for="(image, index) in images">
                        <div x-show="isActiveSlide(index)" :key="index" class="absolute w-full">
                            <img :src="image.imageSrc" alt="Slide" class="w-full">
                        </div>
                    </template>

                    <!-- Navigation buttons -->
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

            <div class="h-[400px]" x-show="activeTab === 'map'">
                <!-- Google Maps embed code or map component -->
                <p>This is the map content</p>
            </div>

            <div class="h-[400px]" x-show="activeTab === 'video'">
                <!-- YouTube video embed code or video component -->
                <p>This is the video content</p>
            </div>

            <div class="h-[400px]" x-show="activeTab === 'neighborhood'">
                <!-- Carousel with neighborhood photos -->
                <div class="relative flex justify-center items-center mt-24 lg:mt-40">
                    <!-- Neighborhood photos carousel code -->
                </div>
            </div>

            <div class="h-[400px]" x-show="activeTab === 'moreRooms'">
                <!-- Carousel with more room photos -->
                <div class="relative flex justify-center items-center mt-24 lg:mt-40">
                    <!-- More room photos carousel code -->
                </div>
            </div>

            <!-- Tab navigation -->
            <div class="flex justify-between bg-neutral-600 text-white text-sm absolute bottom-1 w-full">
                <button @click="changeTab('photos')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full"
                        :class="{'bg-neutral-400': activeTab === 'photos'}">
                    <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                        <ion-icon class="w-4 h-4" name="image-outline"></ion-icon>
                    </span>
                    Fotos
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTab('map')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full"
                        :class="{'bg-neutral-400': activeTab === 'map'}">
                    <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                        <ion-icon class="w-4 h-4" name="location-outline"></ion-icon>
                    </span>
                    Mapa
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTab('video')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full"
                        :class="{'bg-neutral-400': activeTab === 'video'}">
                    <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                       <ion-icon class="w-4 h-4" name="film-outline"></ion-icon>
                    </span>
                    Video
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTab('neighborhood')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full"
                        :class="{'bg-neutral-400': activeTab === 'neighborhood'}">
                     <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                       <ion-icon class="w-4 h-4" name="bicycle-outline"></ion-icon>
                    </span>
                    Barrio
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTab('moreRooms')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full"
                        :class="{'bg-neutral-400': activeTab === 'moreRooms'}">
                     <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                       <ion-icon class="w-4 h-4" name="bed-outline"></ion-icon>
                    </span>
                    +Habitaciones
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-start items-start lg:ml-10 ml-4 lg:w-1/3 w-[25%] lg:mt-20 mt-12">
            <span class="bg-cyan-300 text-white font-bold text-sm p-2 lg:w-1/3 w-2/3 flex justify-center items-center">275 e/mes</span>
            <button class="bg-[#3f12a3] lg:w-[65%] w-full mt-4 flex flex-row justify-between items-center px-2 p-2 rounded-full text-white text-sm font-bold">
                Reserva sin esperas
                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">
                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>
                </span>
            </button>
            <button class="bg-gray-500 lg:w-[65%] w-full mt-4 flex flex-row justify-between items-center px-2 p-2 rounded-full text-white text-sm font-bold">
                ¿Alguna pregunta?
                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">
                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>
                </span>
            </button>
            <button class="bg-cyan-300 lg:w-[65%] w-full mt-4 flex flex-row justify-between items-center px-2 p-2 rounded-full text-white text-sm font-bold">
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
                activeTab: 'photos',
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
                changeTab(tab) {
                    this.activeTab = tab;
                },
            };
        }
    </script>
</div>

{{--<div x-data="carousel()" x-init="startCarousel()" class="w-full mt-14 lg:mb-28 lg:px-36 px-10">--}}
{{--    <div class="flex flex-row justify-start items-start w-full">--}}
{{--        <div class="flex flex-col justify-between lg:w-2/3 w-[75%]">--}}
{{--            <div class="flex flex-row justify-between mb-10">--}}
{{--                <div class="flex flex-col">--}}
{{--                    <span class="text-black text-xl font-bold">Tranquila habitación doble</span>--}}
{{--                    <span class="text-black text-sm">Zona centro</span>--}}
{{--                </div>--}}
{{--                <div class="bg-neutral-200 text-black text-xs flex flex-row p-1 h-[20px]">--}}
{{--                    <span>--}}
{{--                        Cod. habitación--}}
{{--                    </span>--}}
{{--                    <span class="font-bold ml-2">ZNANSDHAJAKJA</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="relative flex justify-center items-center mt-24 lg:mt-40">--}}
{{--                <template x-for="(image, index) in images">--}}
{{--                    <div x-show="isActiveSlide(index)" :key="index" class="absolute w-full">--}}
{{--                        <img :src="image.imageSrc" alt="Slide" class="w-full">--}}
{{--                    </div>--}}
{{--                </template>--}}

{{--                <div class="flex justify-between absolute w-full px-4">--}}
{{--                    <button @click="previousSlide()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">--}}
{{--                        <ion-icon name="chevron-back-outline"></ion-icon>--}}
{{--                    </button>--}}
{{--                    <button @click="nextSlide()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">--}}
{{--                        <ion-icon name="chevron-forward-outline"></ion-icon>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="flex flex-col justify-start items-start lg:ml-10 ml-4 lg:w-1/3 w-[25%] lg:mt-20 mt-12">--}}
{{--            <span class="bg-cyan-300 text-white font-bold text-sm p-2 lg:w-1/3 w-2/3 flex justify-center items-center">275 e/mes</span>--}}
{{--            <button class="bg-[#3f12a3] lg:w-[65%] w-full mt-4 flex flex-row justify-between items-center px-2 p-2 rounded-full text-white text-sm font-bold">--}}
{{--                Reserva sin esperas--}}
{{--                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">--}}
{{--                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>--}}
{{--                </span>--}}
{{--            </button>--}}
{{--            <button class="bg-gray-500 lg:w-[65%] w-full mt-4 flex flex-row justify-between items-center px-2 p-2 rounded-full text-white text-sm font-bold">--}}
{{--                ¿Alguna pregunta?--}}
{{--                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">--}}
{{--                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>--}}
{{--                </span>--}}
{{--            </button>--}}
{{--            <button class="bg-cyan-300 lg:w-[65%] w-full mt-4 flex flex-row justify-between items-center px-2 p-2 rounded-full text-white text-sm font-bold">--}}
{{--                Como reservar--}}
{{--                <span class="bg-white rounded-full p-1 h-6 w-6 flex justify-center items-center ml-2">--}}
{{--                    <ion-icon class="text-black h-4 w-4" name="add-outline"></ion-icon>--}}
{{--                </span>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <script>--}}
{{--        function carousel() {--}}
{{--            const images = [--}}
{{--                {--}}
{{--                    imageSrc: 'https://www.helloflatmate.com/img/img/room1.png',--}}
{{--                },--}}
{{--                {--}}
{{--                    imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',--}}
{{--                },--}}
{{--                {--}}
{{--                    imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',--}}
{{--                },--}}
{{--            ];--}}

{{--            return {--}}
{{--                images,--}}
{{--                activeSlide: 0,--}}
{{--                startCarousel() {--}}
{{--                    setInterval(() => {--}}
{{--                        this.nextSlide();--}}
{{--                    }, 10000);--}}
{{--                },--}}
{{--                isActiveSlide(index) {--}}
{{--                    return this.activeSlide === index;--}}
{{--                },--}}
{{--                previousSlide() {--}}
{{--                    this.activeSlide = (this.activeSlide - 1 + this.images.length) % this.images.length;--}}
{{--                },--}}
{{--                nextSlide() {--}}
{{--                    this.activeSlide = (this.activeSlide + 1) % this.images.length;--}}
{{--                },--}}
{{--            };--}}
{{--        }--}}
{{--    </script>--}}
{{--</div>--}}
