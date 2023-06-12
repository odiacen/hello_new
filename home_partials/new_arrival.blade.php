<div class="flex relative flex-row justify-end w-full items-center mt-32 lg:h-[60%] h-[30%]">
    <div class="flex flex-col justify-start items-start w-1/3 px-8 absolute left-10 lg:left-20 z-10">
        <span class="text-cyan-300 font-bold text-2xl">La llegada</span>
        <span class="text-black text-sm text-justify">Nunca ha sido tan fácil llegar a la ciudad de Valencia, reserva con nosotros y nos encargamos del resto.</span>
    </div>
    <div class="h-full lg:w-3/4 w-[85%] relative flex justify-center items-center video-container" style="
        background-position: 50%;
        /*background-image: url('https://www.helloflatmate.com/img/img/4.png');*/
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 30% 50%);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 30% 50%);
    ">
{{--        <div class="video-container">--}}
            <img class="w-20 h-auto -ml-12" src="https://www.helloflatmate.com/img/img/point-map.png">
            <span class="w-14 h-14 bg-white rounded-full p-1 flex justify-center items-center ml-12" onclick="playVideo()">
                <img class="w-12 h-12" src="https://www.helloflatmate.com/img/img/icon-play.png">
            </span>
            <div class="flex flex-col justify-start absolute top-20 right-20">
                <span class="text-white text-sm font-bold">BIENVENIDOS</span>
                <span class="text-cyan-300 text-sm font-bold">A HELLO</span>
            </div>
{{--        </div>--}}
    </div>
</div>
<script>
    function playVideo() {
        var videoUrl = 'https://www.youtube.com/watch?v=nyxTSCVz8w8';
        var embedUrl = videoUrl.replace('watch?v=', 'embed/');
        var videoContainer = document.querySelector('.video-container');

        videoContainer.innerHTML = '<iframe width="100%" height="100%" src="' + embedUrl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
</script>