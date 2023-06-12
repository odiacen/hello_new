<div class="flex relative flex-row justify-end w-full items-center mt-32 lg:h-[60%] h-[30%]">
    <div class="flex flex-col justify-start items-start w-1/3 px-8 absolute left-10 lg:left-20 z-10" onclick="playVideo()">
        <span class="text-cyan-300 font-bold text-2xl">La llegada</span>
        <span class="text-black text-sm text-justify">Nunca ha sido tan fácil llegar a la ciudad de Valencia, reserva con nosotros y nos encargamos del resto.</span>
    </div>
    <div class="h-full lg:w-3/4 w-full relative flex justify-center items-center video-container">
    </div>
</div>

<script>
    function playVideo() {
        var videoUrl = 'https://www.youtube.com/watch?v=nyxTSCVz8w8';
        var embedUrl = videoUrl.replace('watch?v=', 'embed/');
        var videoContainer = document.querySelector('.video-container');
        var textContainer = document.querySelector('.flex-col');

        textContainer.style.display = 'none'; // Oculta el contenedor de texto

        videoContainer.innerHTML = '<iframe width="100%" height="100%" src="' + embedUrl + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen onload="resizeVideoContainer()"></iframe>';
    }

    function resizeVideoContainer() {
        var videoContainer = document.querySelector('.video-container');
        videoContainer.style.backgroundPosition = 'initial';
        videoContainer.style.clipPath = 'initial';
    }
</script>
