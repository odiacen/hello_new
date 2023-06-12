<div class="flex relative flex-row justify-end w-full items-center mt-32 lg:h-[60%] h-[30%]">
    <div class="flex flex-col justify-start items-start w-1/3 px-8 absolute left-10 lg:left-20 z-10" id="text-container">
        <span class="text-cyan-300 font-bold text-2xl">La llegada</span>
        <span class="text-black text-sm text-justify">Nunca ha sido tan fácil llegar a la ciudad de Valencia, reserva con nosotros y nos encargamos del resto.</span>
    </div>
    <div class="h-full lg:w-3/4 w-[85%] relative flex justify-center items-center video-container" style="">
        <iframe id="videoIframe" width="100%" height="100%" src="https://www.youtube.com/embed/3KSXxo8CbpY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<style>
    .video-container.playing {
        width: 70%;
    }

    .video-container.playing #text-container {
        display: none;
    }

    .video-container #text-container {
        transition: opacity 0.5s ease-in-out;
        opacity: 1;
    }

    .video-container.playing #text-container {
        opacity: 0;
    }
</style>

<script>
    const videoIframe = document.getElementById('videoIframe');
    const videoContainer = document.querySelector('.video-container');
    const textContainer = document.getElementById('text-container');

    videoIframe.addEventListener('load', function() {
        const video = videoIframe.contentWindow.document.querySelector('video');
        video.addEventListener('loadedmetadata', function() {
            video.addEventListener('play', function() {
                videoContainer.classList.add('playing');
            });
            video.addEventListener('pause', function() {
                videoContainer.classList.remove('playing');
            });
        });
    });
</script>