<div class="flex relative flex-row justify-end w-full items-center mt-32 lg:h-[60%] h-[30%]">
    <div class="flex flex-col justify-start items-start w-1/3 px-8 absolute left-10 lg:left-20 z-10">
        <span class="text-cyan-300 font-bold text-2xl">La llegada</span>
        <span class="text-black text-sm text-justify">Nunca ha sido tan fácil llegar a la ciudad de Valencia, reserva con nosotros y nos encargamos del resto.</span>
    </div>
    <div class="h-full lg:w-3/4 w-[85%] relative flex justify-center items-center" style="background-position: 50%; background-image: url('https://www.helloflatmate.com/img/img/4.png'); -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 30% 50%); clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 30% 50%);">
        <video id="videoPlayer" loop style="width: 100%; height: 100%; object-fit: cover;">
            <source src="https://player.vimeo.com/external/28281304.hd.mp4?s=XXXXXXXXX&amp;profile_id=175" type="video/mp4">
        </video>
        <div class="play-button" onclick="startVideo()">
            <img class="w-12 h-12" src="https://www.helloflatmate.com/img/img/icon-play.png">
        </div>
        <div class="flex flex-col justify-start absolute top-20 right-20">
            <span class="text-white text-sm font-bold">BIENVENIDOS</span>
            <span class="text-cyan-300 text-sm font-bold">A HELLO</span>
        </div>
    </div>
</div>

<script>
    function startVideo() {
        var video = document.getElementById('videoPlayer');
        var playButton = document.querySelector('.play-button');

        video.load();
        video.play();
        playButton.style.display = 'none';
    }
</script>
