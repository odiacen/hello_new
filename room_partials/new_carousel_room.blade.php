<div class="w-full mt-14 lg:mb-28 lg:px-36 px-10">
    <div class="flex flex-row justify-start items-start w-full">
        <div class="flex flex-col relative lg:w-2/3 w-[75%]">
         <template x-if="room.title">   
        <div class="flex flex-row justify-between lg:mb-9 mb-4">
                <div class="flex flex-col">
                    <span x-text="room.title" class="text-black text-xl font-bold">Tranquila habitación doble</span>
                    <span x-text="room.type" class="text-black text-sm">Zona centro</span>
                </div>
                <div class="bg-neutral-200 text-black text-xs flex flex-row p-1 h-[20px]">
                    <span>
                        Habitación
                    </span>
                    <span x-text="room.code_home" class="font-bold ml-2">ZNANSDHAJAKJA</span>
                </div>
            </div>
            </template>
            <!-- Tab content -->
            <div class="h-[400px]" x-show="activeTabR === 'photos'">
                <!-- Existing carousel code -->
                <div class="relative flex justify-center items-center h-[400px]">
                    <template x-for="(image, index) in imagesR[0]">
                        <div x-show="isActiveSlideR(index)" :key="index" class="absolute w-full h-[400px]">
                            <img :src="image" alt="Slide" class="w-full h-[400px]">
                        </div>
                    </template>

                    <!-- Navigation buttons -->
                    <div class="flex justify-between absolute w-full px-4">
                        <button @click="previousSlideR()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>
                        <button @click="nextSlideR()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>

            <div class="h-[400px]" x-show="activeTabR === 'map'">
                <div id="map" style="height: 400px;"></div>
            </div>

            <div class="h-[400px]" x-show="activeTabR === 'video'">
                <!-- YouTube video embed code or video component -->
                <div id="player"></div>
            </div>

            <div class="h-[400px]" x-show="activeTabR === 'neighborhood'">
                <!-- Carousel with neighborhood photos -->
                <div class="relative flex justify-center items-center h-[400px]">
                    
                        <div class="absolute w-full h-[400px]">
                            <img :src="imagenB" alt="Slide" class="w-full h-[400px]">
                        </div>
                    

                    <!-- Navigation buttons -->
                    <div class="flex justify-between absolute w-full px-4">
                        <button @click="previousSlideR()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>
                        <button @click="nextSlideR()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>

            <div class="h-[400px]" x-show="activeTabR === 'moreRooms'">
                <!-- Carousel with more room photos -->
                <div class="relative flex justify-center items-center h-[400px]">
                    <template x-for="(image, index) in imagesR">
                        <div x-show="isActiveSlideR(index)" :key="index" class="absolute w-full h-[400px]">
                            <img :src="image.imageSrc" alt="Slide" class="w-full h-[400px]">
                        </div>
                    </template>

                    <!-- Navigation buttons -->
                    <div class="flex justify-between absolute w-full px-4">
                        <button @click="previousSlideR()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>
                        <button @click="nextSlideR()" class="text-cyan-300 bg-white text-xl p-1 rounded-full">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tab navigation -->
            <div class="flex justify-between bg-neutral-600 text-white text-sm absolute -bottom-12 w-full">
                <button @click="changeTabR('photos')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full text-xs"
                        :class="{'bg-neutral-400': activeTabR === 'photos'}">
                    <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                        <ion-icon class="w-4 h-4" name="image-outline"></ion-icon>
                    </span>
                    Fotos
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTabR('map')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full text-xs"
                        :class="{'bg-neutral-400': activeTabR === 'map'}">
                    <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                        <ion-icon class="w-4 h-4" name="location-outline"></ion-icon>
                    </span>
                    Mapa
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTabR('video')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full text-xs"
                        :class="{'bg-neutral-400': activeTabR === 'video'}">
                    <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                       <ion-icon class="w-4 h-4" name="film-outline"></ion-icon>
                    </span>
                    Video
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTabR('neighborhood')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full text-xs"
                        :class="{'bg-neutral-400': activeTabR === 'neighborhood'}">
                     <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                       <ion-icon class="w-4 h-4" name="bicycle-outline"></ion-icon>
                    </span>
                    Barrio
                </button>
                <span class="border-l border-white"></span>
                <button @click="changeTabR('moreRooms')"
                        class="py-4 h-full flex flex-row justify-center items-center w-full text-xs"
                        :class="{'bg-neutral-400': activeTabR === 'moreRooms'}">
                     <span class="text-gray-500 bg-white rounded-full p-1 w-6 h-6 mr-2 flex justify-center items-center">
                       <ion-icon class="w-4 h-4" name="bed-outline"></ion-icon>
                    </span>
                    +Habitaciones
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-start items-start lg:ml-10 ml-4 lg:w-1/3 w-[25%] lg:mt-20 mt-12">
            <template x-if="room.price"> 
                <span x-text="room.price + `e/mes`" class="bg-cyan-300 text-white font-bold text-sm p-2 lg:w-1/3 w-2/3 flex justify-center items-center">275 e/mes</span>
            </template>
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
</div>

