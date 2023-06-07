<div x-data="{
  activeTab: 'tab1',
  tabs: [
    { id: 'tab1', icon: 'https://www.helloflatmate.com/img/img/icon-mail', label: 'Contrato' },
    { id: 'tab2', icon: 'https://www.helloflatmate.com/img/img/icon-clock', label: 'Emergencias 24/7' },
    { id: 'tab3', icon: 'https://www.helloflatmate.com/img/img/icon-setting', label: 'Mantenimiento' },
    { id: 'tab4', icon: 'https://www.helloflatmate.com/img/img/icon-shower', label: 'Suministros' },
    { id: 'tab5', icon: 'https://www.helloflatmate.com/img/img/icon-person-check', label: 'Medicación entre inquilinos' }
  ]
}">
    <div class="flex">
        <div class="flex-1">
            <template x-for="tab in tabs" :key="tab.id">
                <button
                        x-on:click="activeTab = tab.id"
                        :class="{ 'bg-cyan-300 text-white font-bold rounded-full': activeTab === tab.id, 'bg-white text-black font-bold rounded-full': activeTab !== tab.id } flex flex-row"
                >
                    <span :class="{ 'bg-white': activeTab === tab.id, 'bg-gray-100': activeTab !== tab.id } rounded-full h-6 w-6 p-1">
                       <img class="h-4 w-4" :src="tab.icon" />
                    </span>
                    <span x-text="tab.label"></span>
                </button>
            </template>
        </div>
        <div class="flex-1 p-4">
            <template x-for="tab in tabs" :key="tab.id">
                <div x-show="activeTab === tab.id" x-text="'Contenido de ' + tab.label"></div>
            </template>
        </div>
    </div>
</div>
