<?php include_once("header.php"); ?>

<!-- Plugin Plyr -->
<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

<section>

    <div id="call-to-action">
        <div class="container">
            <div class="text-center">
                <h2>Vídeos</h2>
                <hr>
            </div>
            <div class="text-center">
                <div class="player">  <!-- Utilizando plugin plyr Verificar documentação mais atulizada no Site -->
                    <video id="player" src="mp4/highlights.mp4" controls playsinline poster="img/highlights.jpg">
                        <track kind="captions" label="Português (BR)" src="vtt/legendas.vtt" srclang="pt-br" default>
                    </video>
                </div>
                <!--
                1ª Opção para controle de video - sem utilizaçao de plugin
                <input type="range" id="volume" min="0" max="1" step="0.01" value="0.5">

                <button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button>
                -->
                <!--
                <audio src="mp3/audio.mp" controls></audio> 
                <audio src="mp3/audio.mp" style="display:none"></audio>
                --> 
            </div>
        </div>
    </div>	

    <div id="news" class="container" style="top:0"> 

        <div "text-center">
            <h2>Latest News</h2>
            <hr>
        </div>

        <div class="row thumbnails owl-carousel owl-theme">

            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Noticia">
                    <h3>Highlights</h3>
                </div>	
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                    <h3>Orlando City Foundation</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Noticia">
                    <h3>Highlights</h3>
                </div>	
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                    <h3>Orlando City Foundation</h3>
                </div>
            </div>
            <div class="item" data-video="highlights">
                <div class="item-inner">
                    <img src="img/highlights.jpg" alt="Noticia">
                    <h3>Highlights</h3>
                </div>	
            </div>
            <div class="item" data-video="Orlando_City_Foundation_2015">
                <div class="item-inner">
                    <img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
                    <h3>Orlando City Foundation</h3>
                </div>
            </div>
        </div>

    </div>

</section>

<?php include_once("footer.php");?>


<!-- Aulas 40 a 43 -->
<script src=" https://cdn.plyr.io/3.4.3/plyr.js"> </script>
<script> const player = new Plyr('#player')</script> 		
<script>
    $(function(){
        $(".thumbnails .item").on("click", function(){

            $("video").attr({
                "src": "mp4/"+$(this).data('video')+".mp4",
                "poster":"img/"+$(this).data('video')+".jpg"
            });
        });
        $("#volume").on("mousemove",function(){
            $('video')[0].volume = parseFloat($(this).val());
        });

        $("#btn-play-pause").on("click",function(){

            var video = $("video")[0];
            if($(this).hasClass("btn-success")){
                $(this).text("PAUSE");
                video.play();
            }else{
                $(this).text("PLAY");
                video.pause();
            }
            $(this).toggleClass("btn-success btn-danger");
        });

        Plyr.setup(document.querySelector('.player'))   //Disparando player PLYR
    });
</script>


<!-- Aulas 34 a 39
<script>
    (function(d, p){
        var a = new XMLHttpRequest(),
            b = d.body;
        a.open("GET", p, true);
        a.send();
        a.onload = function(){
            var c = d.createElement("div");
            c.style.display = "none";
            c.innerHTML = a.responseText;
            b.insertBefore(c, b.childNodes[0]);
        }
    })(document, "lib/plyr/dist/plyr.svg");
</script>
-->
<script>
$(function(){
    $(".thumbnails .item").on("click", function(){
        $("video").attr({
            "src":"mp4/"+$(this).data('video')+".mp4",
            "poster":"img/"+$(this).data('video')+".jpg"
        });	

    });

    $("#volume").on("mousemove", function(){
        $("video")[0].volume = parseFloat($(this).val());
    });

    $("#btn-play-pause").on("click", function(){

        var video = $("video")[0];

        if ($(this).hasClass("btn-sucess")) {
            $(this).text("STOP");
            video.play();
        } else {
            $(this).text("PLAY");
            video.pause();
        }

        $(this).toggleClass("btn-danger btn-sucess");

    });

});	

</script>

