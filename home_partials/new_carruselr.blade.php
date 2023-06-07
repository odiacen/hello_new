<div class="mt-20 flex flex-col" x-data="{
  activeTab: 'tab1',
  tabs: [
    { id: 'tab1', icon: 'https://www.helloflatmate.com/img/img/icon-mail.png', label: 'Contrato' },
    { id: 'tab2', icon: 'https://www.helloflatmate.com/img/img/icon-clock.png', label: 'Emergencias 24/7' },
    { id: 'tab3', icon: 'https://www.helloflatmate.com/img/img/icon-setting.png', label: 'Mantenimiento' },
    { id: 'tab4', icon: 'https://www.helloflatmate.com/img/img/icon-shower.png', label: 'Suministros' },
    { id: 'tab5', icon: 'https://www.helloflatmate.com/img/img/icon-person-check.png', label: 'Medicación entre inquilinos' }
  ]
}">
    <div class="flex flex-col pl-20">
        <span class="text-black font-bold text-4xl">¿Por qué es mucho más</span>
        <span class="text-cyan-300 font-bold text-4xl">que una habitación?</span>
    </div>
    <div class="flex flex-row">
        <div class="bg-cyan-300 flex flex-row pr-32">
            <img class="pl-20" src="https://www.helloflatmate.com/img/img/hab-v.png"/>
            <template x-for="tab in tabs" :key="tab.id">
                <div x-show="activeTab === tab.id" x-text="'Contenido de ' + tab.label"></div>
            </template>
        </div>
        <div class="flex flex-col">
            <template x-for="tab in tabs" :key="tab.id">
                <button
                        @click="activeTab = tab.id"
                        :class="{ 'bg-cyan-300 text-white': activeTab === tab.id, 'bg-white text-black': activeTab !== tab.id } flex flex-row items-center justify-center font-bold rounded-full"
                >
                    <span :class="{ 'bg-white': activeTab === tab.id, 'bg-gray-100': activeTab !== tab.id } rounded-full h-6 w-6 p-1">
                       <img class="h-4 w-4" :src="tab.icon" />
                    </span>
                    <span x-text="tab.label"></span>
                </button>
            </template>
        </div>
    </div>
</div>
