<div class="lg:mt-32 mt-56 flex flex-col items-start" x-data="{
  activeTab: 'tab1',
   tabs: [
    {
      id: 'tab1',
      icon: 'https://www.helloflatmate.com/img/img/icon-mail.png',
      label: 'Contrato',
      content: 'Es muy importante que como inquilino tenga contrato de alquiler y así tener un alojamiento legal donde residir. <br> Por ello todos los alojamientos que gestionamos tienen el mismo modelo de contrato temporal y que se acoge al Código Civil y equipara en derecho y obligación tanto a arrendador como arrendatario.',
    },
    {
      id: 'tab2',
      icon: 'https://www.helloflatmate.com/img/img/icon-clock.png',
      label: 'Emergencias 24/7',
      content: 'El horario normal de helloflatmate es de lunes a viernes de 10 a 18 horas, donde los flatmates de cada piso disponen de un grupo de whatsapp en comunicación directa con la agencia. <br> Siendo rápidos en dar solución a averías de manera personalizada. <br> Pero si hubiera una emergencia fuera del horario, todos nuestros flatmates disponen de un número de teléfono que les damos en el check in para contactar con helloflatmate en caso de necesidad.',
    },
    {
      id: 'tab3',
      icon: 'https://www.helloflatmate.com/img/img/icon-calendar.png',
      label: 'Check-in',
      content: 'De lunes a viernes de 10 a 18 h. <br> Fuera de este horario tendrá un coste extra de 30 €, hasta las 21h. <br> Tienes la opción de contratar nuestro Pick Up Service por 90 € y te recogeremos con tu equipaje en el aeropuerto o estación de tren o bus.',
    },
    {
      id: 'tab4',
      icon: 'https://www.helloflatmate.com/img/img/icon-shower.png',
      label: 'Suministros',
      content: 'Todas las viviendas que gestionamos tienen internet wifi y los suministros dados de alta a nombre del propietario/a. <br> Con ello evitamos que nuestros Flatmates tengan que firmar contratos con empresas privadas de suministros las cuales normalmente piden permanencia.',
    },
  ]
}">
    <div class="flex flex-row justify-start w-full lg:h-[450px] h-[350px]">
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
        <div style="background-color: #3f12a3" class="relative flex flex-row justify-start w-[85%] lg:w-[80%]">
            <img class="absolute right-10 top-10 lg:w-1/4 w-1/3 h-auto" src="https://www.helloflatmate.com/img/img/3.png"/>
            <div class="flex flex-col lg:px-12 px-8 w-[60%] lg:ml-24 py-10">
                <div class="flex flex-col relative lg:mb-5 mb-2">
                    <div class="flex flex-col absolute -top-32 ">
                        <span class="text-black font-bold lg:text-4xl text-2xl">¿Por qué es mucho más</span>
                        <span style="color: #3f12a3" class="font-bold lg:text-4xl text-2xl">que una habitación?</span>
                    </div>
                    <div class="lg:mt-4 mt-2 flex flex-col">
                      <span class="text-white font-bold lg:text-2xl text-xl">
                        Pisos - hello landlords
                      </span>
                        <p class="lg:text-md text-sd text-justify text-white lg:h-auto h-[90px] overflow-y-auto">
                            Son habitaciones regentadas por propietarios que son colaboradores con el sistema de gestión de viviendas que propone helloflatmate.

                            Los <strong>hello landlord</strong> llevan trabajando conjuntamente con helloflatmate años y que tienen el tiempo para ofrecer una atención personalizada a sus inquilinos.
                        </p>
                    </div>
                </div>
                <hr class="border-t-2 border-gray-50 my-2 w-[60%]">
                <div class="lg:mt-5 mt-2">
                    <template x-for="tab in tabs" :key="tab.id">
                        <div class="flex flex-col" x-show="activeTab === tab.id">
                            <span class="text-white font-bold lg:text-2xl text-xl" x-text="tab.label"></span>
                            <p class="text-white text-justify lg:text-md text-sd lg:h-auto h-[90px] overflow-y-auto" x-html="tab.content"></p>
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
