@include('nuevo.global.new_header')
<section x-data="cardsGrid()" x-init="getRooms()">
@include('nuevo.rooms_partials.new_grid_rooms')
@include('nuevo.search_partials.new_alpine_rooms')
</section>
@include('nuevo.global.new_faqs')
@include('nuevo.global.new_footer')