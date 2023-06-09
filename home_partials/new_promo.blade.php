<!-- Promo section -->

  <div  x-data="promo()"
    class="flex bg-slate-50 bg-cover overflow-hidden h-[60%] relative"
    
  >
    <div class="md:mx-40 md:pt-14  h-[40%] ">
      <h3 class="text-cyan-300 text-4xl font-bold pb-2">¡Ten Previsto</h3>
      <h3 class="text-black-400 font-bold text-4xl pb-2">Los imprevistos!</h3>
      <p class="pb-2 text-justify"> <strong>helloflatmate</strong> está diseñada para estudiantes, postgrados y nomadas digitales puedan reservar alojamiento sin espera.<p>
      <p class="pb-2 text-justify">Sabemos que vienen de forma temporal, por eso les ofrecemos alojamientos amueblados e Internet en Valencia y Moncada con contrato de media estancia<p>
    </div>
    
    
    <div class="items-center w-full h-full relative">
        <img
          src="https://www.helloflatmate.com/img/img/promo.png"
          alt=""
          loading="lazy" />
    </div>   
    
  </div>
  
  <script>
    function promo(){
               return {
                   endpoints: [
                              "https://www.helloflatmate.com/api/zones",
                              "https://www.helloflatmate.com/api/fechas",
                              "https://www.helloflatmate.com/api/universidades"
                              ],
                   zones: [],
                   fechas: [],
                   univs: [],
                   axiosCall(endpoint){
                        axios.get( endpoint )
                      .then( (r)=>{
                          
                             if (r.data[0].zone) {
                                 this.zones = r.data;
                             }
                             
                             if (r.data[0].university) {
                                 this.univs = r.data;
                                 
                             }
                             
                             if (r.data[0].start) {
                                 this.fechas = r.data;
                                 
                             }
                                                
                        }).catch( (e)=>{
                            
                        }); 
                        
                       
                   },
                   getData(){
                       
                        this.endpoints.forEach((endpoint) => this.axiosCall(endpoint));
                     
                    }
                   
               }
             }
  </script>