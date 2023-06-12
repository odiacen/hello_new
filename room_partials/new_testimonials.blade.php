<div x-data="carouselTestimonial()" x-init="startCarousel()" class="w-full mt-8 lg:px-36 px-10">
    <div class="flex flex-row justify-start items-start w-full bg-gray-100 py-8 lg:h-[350px] h-[300px]">
        <div class="flex flex-col justify-center items-center w-full">
            <span class="text-2xl font-bold text-black">Opiniones</span>
            <div class="relative flex justify-center items-center w-full px-20 mt-10">
                <template x-for="(testimonial, index) in testimonials">
                    <div x-show="isActiveSlide(index)" :key="index" class="w-full flex flex-row justify-center items-center">
                        <div class="flex flex-col justify-center items-center w-1/3">
                            <img :src="testimonial.avatar" alt="Slide" class="rounded-full lg:w-32 lg:h-32 w-20 h-20">
                            <span class="text-xl text-cyan-300 font-bold" x-text="testimonial.name"></span>
                        </div>
                        <p class="text-sm text-black text-justify w-2/3 ml-6 h-[80%] overflow-y-auto" x-text="testimonial.content"></p>
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

    <script>
        function carouselTestimonial() {
            const testimonials = [
                {
                    name:'Stephanie',
                    avatar: 'https://www.helloflatmate.com/img/img/avatar-room.png',
                    content: 'Me gusta la atmósfera juvenil entre compañeros de piso.El piso está situado a pocos minutos andando de la Universidad.Si vas a estudiar en el CEU, esta habitación es perfecta para ti.Aquí tienes el supermercado más cercano, y muy cerca el centro de salud.',
                },
                {
                    name:'Stephanie',
                    avatar: 'https://www.helloflatmate.com/img/img/avatar-room.png',
                    content: 'Texto',
                },
                {
                    name:'Stephanie',
                    avatar: 'https://www.helloflatmate.com/img/img/avatar-room.png',
                    content: 'Otro texto',
                },

            ];

            return {
                testimonials,
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
                    this.activeSlide = (this.activeSlide - 1 + this.testimonials.length) % this.testimonials.length;
                },
                nextSlide() {
                    this.activeSlide = (this.activeSlide + 1) % this.testimonials.length;
                },
            };
        }
    </script>
</div>
