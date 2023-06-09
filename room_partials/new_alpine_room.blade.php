<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3hC35ehz1oAfUll7q7qzUlPa27Gz5g5g"></script>
<script>
        function alpineRoom() {
            return {
                endpointRoom: "https://www.helloflatmate.com/api/rooms/",
                path: "path",
                imagenB: "",
                room: [],
                home: [],
                getData(){
                    let url = window.location.pathname;
                    this.path = url.split("/").pop();
                    let endpoint = this.endpointRoom + this.path;
                    axios.get( endpoint )
                    .then( (r)=>{
                            
                        this.imagesR.push(r.data.imagesR);
                        this.imagenB = r.data.imageB;
                        this.room = r.data.room;
                        this.home = r.data.home;
                        this.questionlist.push(r.data.condiciones);
                        this.questionlist.push(r.data.habitaciones);
                        this.questionlist.push(r.data.facturas);
                        this.questionlist.push(r.data.reparaciones);
                        this.questionlist.push(r.data.normas);
                        this.questionlist.push(r.data.checkin);
                        this.initMap();                            
                        }).catch( (e)=>{
                            
                        })
                },
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
            questionlist: [],
            questions : [
                {
                    title: "Condiciones de alquiler",
                    open: false
                },
                {
                    title: "Habitación",
                    open: false
                },
                {
                    title: "Facturas",
                    open: false
                },
                {
                    title: "Reparaciones",
                    open: false
                },
                {
                    title: "Normas",
                    open: false
                },
                {
                    title: "Check-in",
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


                imagesR : [],
            activeSlideR: 0,
                activeTabR: 'photos',
                startCarouselR() {
                    setInterval(() => {
                        this.nextSlideR();
                    }, 10000);
                },
                isActiveSlideR(index) {
                    return this.activeSlideR === index;
                },
                previousSlideR() {
                    this.activeSlideR = (this.activeSlideR - 1 + this.imagesR[0].length) % this.imagesR[0].length;
                },
                nextSlideR() {
                    this.activeSlideR = (this.activeSlideR + 1) % this.imagesR[0].length;
                },
                changeTabR(tab) {
                    this.activeTabR = tab;
                },

                initMap() {
                    
                        const location = { 
                                           lat: this.home.latitud, 
                                           lng: this.home.longitud, 
                                         }; 
                        console.log(location);
                        
                        const map = new google.maps.Map(document.getElementById('map'), {
                            center: location,
                        });

                        const marker = new google.maps.Marker({
                            position: location,
                            map: map,
                        });
                    
                }

            };
        }
    </script>

<script src="https://www.youtube.com/iframe_api"></script>
<script>
    let player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '100%',
            width: '100%',
            videoId: '3KSXxo8CbpY',
            playerVars: {
                'autoplay': 0,
                'controls': 0,
                'showinfo': 0,
                'rel': 0,
                'modestbranding': 1
            },
        });
    }
</script>