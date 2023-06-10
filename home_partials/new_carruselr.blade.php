<div class="mt-48 flex flex-col items-start" x-data="{
  activeTab: 'tab1',
  tabs: [
    {
      id: 'tab1',
      icon: 'https://www.helloflatmate.com/img/img/icon-mail.png',
      label: 'Contrato',
      content: 'Es muy importante que como inquilino tenga contrato de alquiler y así tener un alojamiento legal donde residir. Por ello todos los alojamientos que gestionamos tienen el mismo modelo de contrato temporal y que se acoge al Código Civil y que equipara en derecho y obligación tanto a arrendador como arrendatario.'
    },
    {
      id: 'tab2',
      icon: 'https://www.helloflatmate.com/img/img/icon-clock.png',
      label: 'Emergencias 24/7',
      content: 'Es muy importante que como inquilino tenga contrato de alquiler y así tener un alojamiento legal donde residir. Por ello todos los alojamientos que gestionamos tienen el mismo modelo de contrato temporal y que se acoge al Código Civil y que equipara en derecho y obligación tanto a arrendador como arrendatario.'
    },
    {
      id: 'tab3',
      icon: 'https://www.helloflatmate.com/img/img/icon-setting.png',
      label: 'Mantenimiento',
      content: 'Es muy importante que como inquilino tenga contrato de alquiler y así tener un alojamiento legal donde residir. Por ello todos los alojamientos que gestionamos tienen el mismo modelo de contrato temporal y que se acoge al Código Civil y que equipara en derecho y obligación tanto a arrendador como arrendatario.'
    },
    {
      id: 'tab4',
      icon: 'https://www.helloflatmate.com/img/img/icon-shower.png',
      label: 'Suministros',
      content: 'Es muy importante que como inquilino tenga contrato de alquiler y así tener un alojamiento legal donde residir. Por ello todos los alojamientos que gestionamos tienen el mismo modelo de contrato temporal y que se acoge al Código Civil y que equipara en derecho y obligación tanto a arrendador como arrendatario.'
    },
    {
      id: 'tab5',
      icon: 'https://www.helloflatmate.com/img/img/icon-person-check.png',
      label: 'Medicación entre inquilinos',
      content: 'Es muy importante que como inquilino tenga contrato de alquiler y así tener un alojamiento legal donde residir. Por ello todos los alojamientos que gestionamos tienen el mismo modelo de contrato temporal y que se acoge al Código Civil y que equipara en derecho y obligación tanto a arrendador como arrendatario.'
    }
  ]
}">
    <div class="flex flex-row justify-start w-full">
        <div class="bg-cyan-300 relative flex flex-row justify-end w-[85%] lg:w-[80%]">
            <img class="absolute lg:left-36 lg:w-1/4 w-1/3 h-auto left-8 -top-32" src="https://www.helloflatmate.com/img/img/hab-v.png"/>
            <div class="flex flex-col lg:px-12 px-8 w-[60%]">
                <div class="flex flex-col relative mb-5">
                    <div class="flex flex-col absolute -top-32 ">
                        <span class="text-black font-bold lg:text-4xl text-2xl">¿Por qué es mucho más</span>
                        <span class="text-cyan-300 font-bold lg:text-4xl text-2xl">que una habitación?</span>
                    </div>
                    <div class="mt-4">
                      <span class="text-white font-bold lg:text-2xl text-xl">
                        Habitaciones - hello rooms
                      </span>
                        <p class="lg:text-md text-sd text-justify text-black lg:h-auto h-[40%] overflow-y-auto">
                            Las habitaciones <strong>HELLO ROOMS</strong>, son habitaciones que prepara cada año helloflatmate encargándose de la limpieza, mantenimiento y gestión de la estancia de flatmates. Para que el tiempo que esté con nosotros no se tenga que preocupar prácticamente de nada.
                        </p>
                    </div>
                </div>
                <hr class="border-t-2 border-gray-50 my-2 w-[60%]">
                <div class="mt-5">
                    <template x-for="tab in tabs" :key="tab.id">
                        <div x-show="activeTab === tab.id">
                            <span class="text-black font-bold lg:text-2xl text-xl" x-text="tab.label"></span>
                            <p class="text-black text-justify lg:text-md text-sd lg:h-auto h-[40%] overflow-y-auto" x-text="tab.content"></p>
                        </div>
                    </template>
                </div>
            </div>
            <div class="flex flex-col items-center space-y-1 absolute right-4 top-1/2 transform -translate-y-1/2">
                <template x-for="(tab, index) in tabs" :key="tab.id">
                    <div class="rounded-full h-2 w-2"
                         :class="{
                             'bg-gray-500': activeTab !== tab.id,
                             'bg-white': activeTab === tab.id
                           }"
                    ></div>
                </template>
            </div>
        </div>
        <div class="flex flex-col items-start justify-start ml-6 w-auto space-y-6 py-4 px-4">
            <template x-for="tab in tabs" :key="tab.id">
                    <button
                            @click="activeTab = tab.id"
                            class="flex flex-row items-center justify-center font-bold rounded-full p-2 px-2"
                            :class="{ 'bg-cyan-300 text-white': activeTab === tab.id, 'bg-white text-black': activeTab !== tab.id }"
                    >
                  <span
                          class="rounded-full flex justify-center items-center h-8 w-8 p-1"
                          :class="{ 'bg-white': activeTab === tab.id, 'bg-gray-100': activeTab !== tab.id }"
                  >
                     <img class="h-5 w-5" :src="tab.icon" />
                  </span>
                        <span class="ml-2" x-text="tab.label"></span>
                    </button>
                </template>
        </div>
    </div>
</div>
