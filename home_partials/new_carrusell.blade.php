<div class="mb-28 lg:mt-16 mt-24 flex flex-col lg:h-[500px] h-[350px] items-start" x-data="{
  activeTab: 'tab1',
   tabs: [
    {
      id: 'tab1',
      icon: 'https://www.helloflatmate.com/img/img/icon-mail.png',
      label: 'Contrato',
      content: 'De lunes a viernes de 10 a 18 h. Fuera de este horario tendrá un coste extra de 30 €, hasta las 21h. Tienes la opción de contratar nuestro Pick Up Service por 90 € y te recogeremos con tu equipaje en el aeropuerto o estación de tren o bus.',
    },
    {
      id: 'tab2',
      icon: 'https://www.helloflatmate.com/img/img/icon-clock.png',
      label: 'Emergencias 24/7',
      content: 'De lunes a viernes de 10 a 18 h. Fuera de este horario tendrá un coste extra de 30 €, hasta las 21h. Tienes la opción de contratar nuestro Pick Up Service por 90 € y te recogeremos con tu equipaje en el aeropuerto o estación de tren o bus.',
    },
    {
      id: 'tab3',
      icon: 'https://www.helloflatmate.com/img/img/icon-calendar.png',
      label: 'Check-in',
      content: 'De lunes a viernes de 10 a 18 h. Fuera de este horario tendrá un coste extra de 30 €, hasta las 21h. Tienes la opción de contratar nuestro Pick Up Service por 90 € y te recogeremos con tu equipaje en el aeropuerto o estación de tren o bus.',
    },
    {
      id: 'tab4',
      icon: 'https://www.helloflatmate.com/img/img/icon-shower.png',
      label: 'Suministros',
      content: 'De lunes a viernes de 10 a 18 h. Fuera de este horario tendrá un coste extra de 30 €, hasta las 21h. Tienes la opción de contratar nuestro Pick Up Service por 90 € y te recogeremos con tu equipaje en el aeropuerto o estación de tren o bus.',
    },
  ]
}">
    <div class="flex flex-row justify-start w-full">
        <div class="flex flex-col items-start justify-start w-auto space-y-6 py-4 px-6">
            <template x-for="tab in tabs" :key="tab.id">
                <button
                        @click="activeTab = tab.id"
                        class="flex flex-row items-center justify-center font-bold rounded-full p-2 px-2"
                        :class="{ 'bg-[#3f12a3] text-white': activeTab === tab.id, 'bg-white text-black': activeTab !== tab.id }"
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
        <div style="background-color: #3f12a3" class="relative flex flex-row justify-start w-[80%]">
            <img class="absolute right-10 top-10 w-1/4 h-auto" src="https://www.helloflatmate.com/img/img/3.png"/>
            <div class="flex flex-col px-12 w-[60%] ml-24 py-10">
                <div class="flex flex-col relative mb-5">
                    <div class="flex flex-col absolute -top-32 ">
                        <span class="text-black font-bold text-4xl">¿Por qué es mucho más</span>
                        <span style="color: #3f12a3" class="font-bold text-4xl">que una habitación?</span>
                    </div>
                    <div class="mt-4">
                      <span class="text-white font-bold text-2xl">
                        Pisos - hello landlords
                      </span>
                        <p class="text-md text-justify text-white">
                            Son habitaciones regentadas por propietarios que son colaboradores con el sistema de gestión de viviendas que propone helloflatmate.

                            Los <strong>hello landlord</strong> llevan trabajando conjuntamente con helloflatmate años y que tienen el tiempo para ofrecer una atención personalizada a sus inquilinos.
                        </p>
                    </div>
                </div>
                <hr class="border-t-2 border-gray-50 my-2 w-[60%]">
                <div class="mt-5">
                    <template x-for="tab in tabs" :key="tab.id">
                        <div x-show="activeTab === tab.id">
                            <span class="text-white font-bold text-2xl" x-text="tab.label"></span>
                            <p class="text-white text-justify text-md" x-text="tab.content"></p>
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
    </div>
</div>
