@include('nuevo.global.new_header')
<section x-data="alpineRoom()" x-init="startCarousel(), startCarouseld()">
@include('nuevo.room_partials.new_carousel_room')
@include('nuevo.room_partials.new_faqs_room')
@include('nuevo.room_partials.new_testimonials')
@include('nuevo.room_partials.new_district')
@include('nuevo.room_partials.new_other_rooms')
@include('nuevo.room_partials.new_reservations')
@include('nuevo.room_partials.new_alpine_room')
</section>
@include('nuevo.global.new_faqs')
@include('nuevo.global.new_footer')