<!-- Hero section with background image, heading, subheading and button -->
  <div
    x-data="hero()"
    x-init="getData()"
    class="relative overflow-hidden bg-cover bg-no-repeat brightness-100 place-content-center"
    style="
      background-position: 50%;
      background-image: url('https://www.helloflatmate.com/img/img/5.png');
      height: 75%;
    ">
     
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
      style="">
      <div class="flex h-full items-center justify-center">
        <div
  class="block  rounded-lg bg-slate-300 p-6  shadow-[0_2px_15px_-3px_rgba(0,0,0,255),0_10px_20px_-2px_rgba(0,0,0,255)] dark:bg-neutral-700 bg-opacity-5">
  <form>
    <div class="grid grid-cols-4 gap-4">
      <!--First name input-->
      <select class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="1">Tipo de alojamiento</option>
          <option value="3">Habitaciones</option>
          <option value="4">Coliving</option>
       </select>
     
      <!--First name input-->
      <select class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="1">¿En que zona?</option>
          <template x-for="zone in zones">
              <option x-text="zone.zone"></option>
          </template>
       </select>
       
       <!--First name input-->
      <select class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="1">¿Para qué fecha?</option>
          <template x-for="fecha in fechas">
              <option x-text="fecha.name"></option>
          </template>
       </select>
       
       <!--First name input-->
      <select class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="1">Cerca de tu universidad</option>
          <template x-for="univ in univs">
              <option x-text="univ.university"></option>
          </template>
       </select>

      
    <!--Submit button-->
    <button
      type="submit"
      class="inline-block md:w-[60%] rounded-full bg-cyan-300 px-6 pb-2 pt-2.5 text-xs font-bold uppercase leading-normal text-stone-950 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
      >
      Buscar
    </button>
  </form>
</div>
      </div>
    </div>
  </div>
  
  <script>
    function hero(){
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