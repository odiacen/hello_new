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
        <iframe id="videoIframe" width="100%" height="100%" src="https://www.youtube.com/embed/3KSXxo8CbpY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<style>
    .video-container.playing {
        width: 100% !important;
        background-position: initial !important;
        -webkit-clip-path: initial !important;
        clip-path: initial !important;
    }

    .video-container.playing #text-container {
        display: none;
    }
</style>

<script>
    const videoIframe = document.getElementById('videoIframe');
    const videoContainer = document.querySelector('.video-container');
    const textContainer = document.getElementById('text-container');

    videoIframe.addEventListener('load', function() {
        videoIframe.contentWindow.addEventListener('play', function() {
            videoContainer.classList.add('playing');
            textContainer.style.display = 'none';
            videoContainer.style.backgroundPosition = 'initial';
            videoContainer.style.webkitClipPath = 'initial';
            videoContainer.style.clipPath = 'initial';
        });
    });
</script>
