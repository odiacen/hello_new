@include('nuevo.global.new_header')
<section x-data="alpineRoom()" x-init="startCarousel()">
@include('nuevo.room_partials.new_carousel_room')
@include('nuevo.room_partials.new_faqs_room')
@include('nuevo.room_partials.new_testimonials')
@include('nuevo.room_partials.new_district')
@include('nuevo.room_partials.new_other_rooms')
@include('nuevo.room_partials.new_reservations')
</section>
@include('nuevo.global.new_faqs')
@include('nuevo.global.new_footer')