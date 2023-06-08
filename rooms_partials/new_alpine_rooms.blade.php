<script>
        function cardsGrid() {
            return {
                showLoadMoreButton: true,
                loading: true,
                endpointRooms: "https://www.helloflatmate.com/api/path/rooms?page=",
                page: 1,
                path: "path",
                rooms: [],
                portadas: [],
                actualRooms: 0,
                totalRooms: 0,
                getRooms(){
                    let url = window.location.pathname;
                    this.path = url.split("/").pop();
                    this.endpointRooms = "https://www.helloflatmate.com/api/" + this.path + "/rooms?page=";
                    this.showLoadMoreButton = false;
                    this.loading = true;
                    axios.get( this.endpointRooms + this.page )
                    .then( (r)=>{
                            
                                                        
                            r.data.rooms.data.forEach(room => {
                                this.rooms.push(room);
                            });
                            
                            
                            r.data.portadas.forEach(portada => {
                                this.portadas.push(portada);
                            });

                            this.actualRooms = this.rooms.length;
                            this.totalRooms = r.data.rooms.total;

                            if ( (r.data.rooms.data.length < 12) || (this.actualRooms === this.totalRooms)) {
                                this.showLoadMoreButton = false;
                                this.loading =false;
                            } else {
                                this.loading =false;
                                this.showLoadMoreButton = true;

                            }

                        }).catch( (e)=>{
                            
                        })
                }
            };
        }
</script>

