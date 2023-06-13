<script>
        function alpineRoom() {
            return {
                testimonials : [
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
                }],
                rooms : [
                {
                    title: "Cama doble",
                    type: "x2",
                    price: "100"
                },
                {
                    title: "Cama individual",
                    type: "x1",
                    price: "200"
                },
                {
                    title: "Cama individual",
                    type: "x1",
                    price: "300"
                }
            ],

             portadas : [
                'https://www.helloflatmate.com/img/img/room1.png',
                'https://www.helloflatmate.com/img/img/room2.png',
                'https://www.helloflatmate.com/img/img/room3.png'
            ],
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