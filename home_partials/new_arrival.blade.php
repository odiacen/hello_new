<div class="flex relative flex-row justify-end w-full items-center mt-32 lg:h-[60%] h-[30%]">
    <div class="flex flex-col justify-start items-start w-1/3 px-8 absolute left-10 lg:left-20 z-10" id="text-container">
        <span class="text-cyan-300 font-bold text-2xl">La llegada</span>
        <span class="text-black text-sm text-justify">Nunca ha sido tan fácil llegar a la ciudad de Valencia, reserva con nosotros y nos encargamos del resto.</span>
    </div>
    <div class="h-full lg:w-3/4 w-[85%] relative flex justify-center items-center video-container" style="
        background-position: 50%;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 30% 50%);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 30% 50%);
    ">
        <button onclick="playVideo()" class="play-button absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-gray-900 text-white px-6 py-3 rounded-full"><i class="fas fa-play"></i></button>
    </div>
</div>

<script>
    function playVideo() {
        var videoUrl = 'https://www.youtube.com/watch?v=3KSXxo8CbpY ';
        var embedUrl = videoUrl.replace('watch?v=', 'embed/');
        var videoContainer = document.querySelector('.video-container');
        var textContainer = document.getElementById('text-container');

        textContainer.style.display = 'none'; // Oculta el contenedor de texto

        videoContainer.innerHTML = '<iframe width="100%" height="100%" src="' + embedUrl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        videoContainer.style.width = '100%';
        videoContainer.style.backgroundPosition = 'initial';
        videoContainer.style.clipPath = 'initial';
    }
</script>
