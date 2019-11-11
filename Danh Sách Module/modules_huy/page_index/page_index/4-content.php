 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
<!DOCTYPE html>

<html dir="ltr" lang="en">
<head>
    <title>4</title> 
    <base href="http://demo.harnishdesign.net/opencart/bigshop/v1/" />
    <link href="catalog/view/theme/bigshop/stylesheet/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/screen"></script>
</head>
<body class="common-home">
  <section class="wrapper-box">
      <div id="carousel0" class="owl-carousel nxt">
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/nfl-130x100.png" alt="NFL" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/redbull-130x100.png" alt="RedBull" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/sony-130x100.png" alt="Sony" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/cocacola-130x100.png" alt="Coca Cola" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/burgerking-130x100.png" alt="Burger King" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/canon-130x100.png" alt="Canon" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/harley-130x100.png" alt="Harley Davidson" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/dell-130x100.png" alt="Dell" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/disney-130x100.png" alt="Disney" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/starbucks-130x100.png" alt="Starbucks" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/manufacturer/nintendo-130x100.png" alt="Nintendo" class="img-responsive" />
        </div>
      </div>
      <script type="text/javascript"><!--
        $('#carousel0').owlCarousel({
          items: 6,
          autoPlay: 3000,
          navigation: true,
          navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
          pagination: true
        });
      --></script></div>
</div>
</section>
</body></html>
</div>

