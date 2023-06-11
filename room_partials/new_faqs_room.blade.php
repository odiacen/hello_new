<div x-data="listFaqsRoom()" class="py-12 px-28 relative mt-36">
    <div class="px-8">
        <hr class="border-t-2 border-gray-50 my-2">
        <template x-for="(question, index) in questions" :key="index">
            <div class="flex flex-row justify-between items-center pb-4 p-4 border-b-2 border-gray-50">
                <div>
                   <h3 class="text-md font-bold"  x-text="question.title"></h3>
                   <div x-show="question.open">
                       <spam class="text-sm font-bold" x-text="question.answer.title"></spam>
                       <ul class="p-1 text-black text-sm text-justify mt-2" >
                           <template x-for="(item, index) in question.answer.list" :key="index">
                               <li x-text="item">
                               </li>
                           </template>
                       </ul>
                   </div>
                </div>
                <div class="mr-2">
                    <button @click="question.open = !question.open">
                        <ion-icon x-show="!question.open" name="chevron-down-outline"></ion-icon>
                        <ion-icon x-show="question.open" name="chevron-up-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </template>
    </div>
    <script>
        function listFaqsRoom() {
            const questions = [
                {
                    title: "Condiciones de alquiler",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Habitación",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Facturas",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Raparaciones",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Normas",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
                {
                    title: "Check-in",
                    answer: {
                        title:"Incluido el precio de la habitación",
                        list:[
                            "Servicio de raparaciones y mantenimiento",
                            "Atención a emergencias 24h",
                            "Fast WIFI",
                            "Desinfectada anti COVID-19",
                            "Habitación de unos 8m2",
                            "Cama de 105 x 190 cm",
                            "Exterior al patio de manzana",
                            "Encontrarás un escritorio, una cómoda silla de trabajo y una mesita de noche",
                            "Armario empotrado de 4 puertas, increible capacidad",
                            "Ventana de aluminio con persiana",
                            "Habitación muy luminosa",
                        ]
                    },
                    open: false
                },
            ];

            return {
                questions,
            };
        }
    </script>
</div>
