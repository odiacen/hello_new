<script>
        function searchGrid() {
            return {
                showLoadMoreButton: true,
                endpointRooms: "https://www.helloflatmate.com/api/search/",
                page: 1,
                rooms: [],
                portadas: [],
                actualRooms: 0,
                totalRooms: 0,
                getRooms(){
                    let url = window.location.pathname;
                    this.path = url.split("/nuevo_search").pop();
                    this.endpointRooms = "https://www.helloflatmate.com/api/search" + this.path;
                    console.log (this.endpointRooms);
                    axios.get( this.endpointRooms + "/?page=" + this.page )
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

