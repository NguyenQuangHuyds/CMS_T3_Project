 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
<html>
<body>

        <div class="k tab-slider">
            <div id="owl-demo">
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/nfl-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/redbull-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/sony-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/cocacola-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/burgerking-130x100.png"
                        alt="Owl Image"></div>

                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/canon-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/harley-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/dell-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/disney-130x100.png"
                        alt="Owl Image"></div>
                <div class="item"><img class="img-slider"
                        src="images/demo/manufacturer/starbucks-130x100.png"
                        alt="Owl Image"></div>

                <div class="item"><img  class="img-slider"
                        src="images/demo/manufacturer/nintendo-130x100.png"
                        alt="Owl Image"></div>

            </div>

        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {

            $("#owl-demo").owlCarousel({
                autoPlay: 300000, //Set AutoPlay to 3 seconds
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });
        });
    </script>
</body>

</html>