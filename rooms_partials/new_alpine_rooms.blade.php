<script>
        function cardsGrid() {
            return {
                showLoadMoreButton: true,
                endpointRooms: "https://www.helloflatmate.com/api/" + path + "/rooms?page=",
                page: 1,
                rooms: [],
                path: "path",
                portadas: [],
                actualRooms: 0,
                totalRooms: 0,
                getRooms(){
                    let url = window.location.pathname;
                    this.path = url.split("/").pop();
                    console.log(this.endpointRooms);
                    axios.get( this.endpointRooms + this.page )
                    .then( (r)=>{
                            
                            if (r.data.rooms.data.length < 12) {
                                this.showLoadMoreButton = false;
                            }
                            
                            r.data.rooms.data.forEach(room => {
                                this.rooms.push(room);
                            });
                            
                            
                            r.data.portadas.forEach(portada => {
                                this.portadas.push(portada);
                            });

                            this.actualRooms = this.rooms.length;
                            this.totalRooms = r.data.rooms.total;

                        }).catch( (e)=>{
                            
                        })
                }
            };
        }
</script>

