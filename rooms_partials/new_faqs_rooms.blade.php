<div  x-data="listItems()" class="flex flex-col justify-center items-center py-10 bg-white px-36">
    <div class="flex flex-col justify-start items-start">
        <span class="text-black text-md font-bold">
            ¿Por qué alquilar una habitación para estudiantes en Valencia con helloflatmate?
        </span>
        <p class="text-black text-sm text-justify mt-4">
            helloflatmate dispone de profesionales a tu servicio para
            ofrecerte siempre las mejores habitaciones para estudiantes en
            Valencia. Disponemos de equipos de diseño que se encargan de preparar
            temporada tras temporada todas las habitaciones en alquiler para que tu
            estancia en nuestras propiedades sea lo más satisfactoria posible.
        </p>
        <p class="text-black text-sm text-justify mt-4">
            Además, gracias a que cuentas con el respaldo de una empresa especializada y
            profesional del sector tienes todas las garantías. Contrato disponible para su
            lectura antes de formalizar tu reserva. garantías de que recuperarás tu fianza
            cumpliendo las condiciones del contrato.
        </p>
        <p class="text-black text-sm text-justify mt-4">
            Si durante tu estancia en nuestras habitaciones para estudiantes en Valencia tienes
            cualquier problema tanto con compañeros como con propietarios desde helloflatmate te
            ayudamos a resolver los imprevistos y posibles conflictos buscando las mejores soluciones para ti.
        </p>
    </div>
    <div class="flex flex-col justify-start items-start mt-8">
        <span class="text-black text-md font-bold">
            ¿Qué habitación en alquiler para estudiantes puedo elegir?
        </span>
        <p class="text-black text-sm text-justify mt-4">
            Gracias a los diferentes filtros de nuestra central de reservas podrás elegir
            tu habitación ideal en base a parámetros como:
        </p>
        <ul class="p-1 text-black text-sm text-justify list-disc mt-4" >
            <template x-for="(item, index) in items" :key="index">
                <li x-text="item">
                </li>
            </template>
        </ul>
        <p class="text-black text-sm text-justify mt-4">
            Además, si tienes cualquier tipo de duda o necesitas que te asesoremos personalmente,
            puedes contactar con nuestros agentes que te orientarán durante todo el proceso de búsqueda,
            reserva y estancia para hacer una experiencia única tus días de estudio y alojamiento con helloflatmate.
        </p>
    </div>

    <script>
        function listItems() {
            const items = [
                'Cercanía a tu universidad',
                'Presupuesto mensual',
                'Temporada en la que quieras ocupar la habitación',
                'Zona de Valencia preferida por cercanía de servicios, ocio y demás.',
                'Habitaciones exclusivas sólo para chicas'
            ];

            return {
                items,
            };
        }
    </script>
</div>




