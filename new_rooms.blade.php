@include('nuevo.global.new_header')
<div
        class="relative overflow-hidden bg-cover bg-no-repeat lg:h-[60%] h-[30%]"
        style="
    background-position: 50%;
    background-image: url('https://www.helloflatmate.com/img/img/rooms_banner.png');
    ">
    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
        <span class="uppercase text-white text-6xl font-bold">
            habitaciones <br/> para estudiantes
        </span>
    </div>
</div>
<div class="bg-white py-12 w-full flex justify-center items-center">
        <span class="text-sm text-gray-800">Habitaciones para estudiantes en Valencia con la mejor empresa del sector.
            Atención personalizada, pisos <br/> recién reformados. Las mejores condiciones.
        </span>
</div>
@include('nuevo.rooms_partials.new_rooms_promo')
@include('nuevo.rooms_partials.new_search_bar')
@include('nuevo.rooms_partials.new_grid_rooms')
