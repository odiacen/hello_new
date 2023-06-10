<!-- Hero section with background image, heading, subheading and button -->
  <div
    x-data="hero()"
    x-init="getData()"
    class="relative lg:h-[75%] h-[40%] overflow-hidden bg-cover bg-no-repeat brightness-100 place-content-center"
    style="
      background-position: 50%;
      background-image: url('https://www.helloflatmate.com/img/img/5.png');
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
      <select x-model="tipo" class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="tipo">Tipo de alojamiento</option>
          <option value="2">Habitaciones</option>
          <option value="3">Coliving</option>
       </select>
     
      <!--First name input-->
      <select x-model="zona" class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="zona">¿En que zona?</option>
          <template x-for="zone in zones">
              <option x-text="zone.zone" :value="zone.id"></option>
          </template>
       </select>
       
       <!--First name input-->
      <select x-model="fecha" class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="fecha">¿Para qué fecha?</option>
          <template x-for="fecha in fechas">
              <option x-text="fecha.name" :value="fecha.id"></option>
          </template>
       </select>
       
       <!--First name input-->
      <select x-model="univ" class="peer block w-full h-8 rounded border-0 bg-white" data-te-select-init data-te-select-visible-options="3">
          <option value="univ">Cerca de tu universidad</option>
          <template x-for="univ in univs">
              <option x-text="univ.university" :value="univ.id"></option>
          </template>
       </select>

      
    <!--Submit button-->
    <a
      @click="searchUrl()"
      type="submit"
      class="inline-block md:w-[60%] rounded-full bg-cyan-300 px-6 pb-2 pt-2.5 text-xs font-bold uppercase leading-normal text-stone-950 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
      >
      Buscar
    </a>
  </form>
  <template x-if="notify === true">
  <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Debe seleccionar al menos un criterio de búsqueda para que sea válida. </h3>
                <button @click="notify = false" data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Ok, Lo he comprendido.
                </button>
            </div>
        </div>
    </div>
  </div>
  </template>


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
                   tipo: 'tipo',
                   zona: 'zona',
                   fecha: 'fecha',
                   univ: 'univ',
                   notify: false,
                   searchUrl(){
                    
                    if(isNaN(this.tipo) && isNaN(this.zona) && isNaN(this.fecha) && isNaN(this.univ)){
                          this.notify = true;
                    } else  {
                          
                          let url = "https://www.helloflatmate.com/nuevo_search/"+ this.tipo + "/" + this.zona + "/" + this.fecha + "/" + this.univ;
                          window.location.href = url;
                    }    
                    
                        
                   }, 
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