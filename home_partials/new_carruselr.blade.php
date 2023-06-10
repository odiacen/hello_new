<div class="mt-48 flex flex-col h-[500px]" x-data="{
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
    <div class="flex flex-row w-full">
        <div class="bg-cyan-300 flex flex-row w-[80%]">
            <img class="ml-36 -mt-24" src="https://www.helloflatmate.com/img/img/hab-v.png"/>
            <div class="flex flex-col">
                <div class="flex flex-col relative">
                    <div class="flex flex-col absolute -top-24 px-8">
                        <span class="text-black font-bold text-4xl">¿Por qué es mucho más</span>
                        <span class="text-cyan-300 font-bold text-4xl">que una habitación?</span>
                    </div>
                    <div class="px-8 mt-4">
                  <span class="text-white font-bold text-2xl">
                    Habitaciones - hello rooms
                  </span>
                        <p class="text-md text-justify text-black">
                            Las habitaciones <strong>HELLO ROOMS</strong>, son habitaciones que prepara cada año helloflatmate encargándose de la limpieza, mantenimiento y gestión de la estancia de flatmates. Para que el tiempo que esté con nosotros no se tenga que preocupar prácticamente de nada.
                        </p>
                    </div>
                </div>
                <hr class="border-t-2 border-gray-50 my-2">
                <template x-for="tab in tabs" :key="tab.id">
                    <div x-show="activeTab === tab.id">
                        <span class="text-black font-bold text-2xl" x-text="tab.label"></span>
                        <p class="text-black text-justify text-md" x-text="tab.content"></p>
                    </div>
                </template>
            </div>
        </div>
        <div class="flex flex-col justify-start space-y-6">
            <template x-for="tab in tabs" :key="tab.id">
                <button
                    @click="activeTab = tab.id"
                    class="flex flex-row items-center justify-center font-bold rounded-full p-2 w-auto"
                    :class="{ 'bg-cyan-300 text-white': activeTab === tab.id, 'bg-white text-black': activeTab !== tab.id }"
                >
                  <span
                      class="rounded-full flex justify-center items-center h-8 w-8 p-2"
                      :class="{ 'bg-white': activeTab === tab.id, 'bg-gray-100': activeTab !== tab.id }"
                  >
                     <img class="h-6 w-6" :src="tab.icon" />
                  </span>
                    <span x-text="tab.label"></span>
                </button>
            </template>
        </div>
    </div>
</div>
