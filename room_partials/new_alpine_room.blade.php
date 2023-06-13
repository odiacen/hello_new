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
            questions : [
                {
                    title: "Condiciones de alquiler",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Habitación",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Facturas",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Reparaciones",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de reparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Normas",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Check-in",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
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


                images : [
                {
                    imageSrc: 'https://www.helloflatmate.com/img/img/barrio.png',
                },
                {
                    imageSrc: 'https://www.helloflatmate.com/img/img/room2.png',
                },
                {
                    imageSrc: 'https://www.helloflatmate.com/img/img/room3.png',
                },
            ],
            activeSlided: 0,
                startCarouseld() {
                    setInterval(() => {
                        this.nextSlide();
                    }, 10000);
                },
                isActiveSlided(index) {
                    return this.activeSlided === index;
                },
                previousSlided() {
                    this.activeSlided = (this.activeSlided - 1 + this.images.length) % this.images.length;
                },
                nextSlided() {
                    this.activeSlided = (this.activeSlided + 1) % this.images.length;
                },


                imagesR : [
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
            activeSlideR: 0,
                activeTabR: 'photos',
                startCarouselR() {
                    setInterval(() => {
                        this.nextSlide();
                    }, 10000);
                },
                isActiveSlideR(index) {
                    return this.activeSlideR === index;
                },
                previousSlideR() {
                    this.activeSlideR = (this.activeSlideR - 1 + this.images.length) % this.images.length;
                },
                nextSlide() {
                    this.activeSlideR = (this.activeSlideR + 1) % this.images.length;
                },
                changeTabR(tab) {
                    this.activeTab = tab;
                }

            };
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_CLAVE_DE_API"></script>
    <script>
        function initMap() {
            const location = { lat: 40.712776, lng: -74.005974 }; // Coordenadas de ejemplo

            const map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 12,
            });

            const marker = new google.maps.Marker({
                position: location,
                map: map,
            });
        }

        // Llamada a la función initMap() para inicializar el mapa
        initMap();
    </script>