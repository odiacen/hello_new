<div x-data="carouselTestimonial()" x-init="startCarousel()" class="w-full mt-14 mb-28 px-36">
    <div class="flex flex-row justify-start items-start w-full">
        <div class="flex flex-col justify-between items-center">
            <span class="text-2xl font-bold text-black">Opiniones</span>
            <div class="relative flex justify-center items-center mt-40">
                <template x-for="(testimonial, index) in testimonials">
                    <div x-show="isActiveSlide(index)" :key="index" class="absolute w-full flex flex-row">
                        <div class="flex flex-col">
                            <img :src="testimonial.avatar" alt="Slide" class="rounded-full w-32 h-32">
                            <span class="text-xl text-cyan-300 font-bold" x-text="testimonial.name"></span>
                        </div>
                        <p class="text-sm text-black text-justify" x-text="testimonial.content"></p>
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
                    content: 'Me gusta la atmósfera juvenil entre compañeros de piso.El piso está situado a pocos minutos andando de la Universidad.Si vas a estudiar en el CEU, esta habitación es perfecta para ti.Aquí tienes el supermercado más cercano, y muy cerca el centro de salud.',
                },
                {
                    name:'Stephanie',
                    avatar: 'https://www.helloflatmate.com/img/img/avatar-room.png',
                    content: 'Me gusta la atmósfera juvenil entre compañeros de piso.El piso está situado a pocos minutos andando de la Universidad.Si vas a estudiar en el CEU, esta habitación es perfecta para ti.Aquí tienes el supermercado más cercano, y muy cerca el centro de salud.',
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
