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
<!--<![endif]-->
<head>

  <meta charset="UTF-8" />
 
</head>
<body class="common-home">
  <section class="wrapper-box">
    <div class="container">
      <div class="row"><column id="column-left" class="col-sm-3 hidden-xs">
        <script type="text/javascript" src="catalog/view/theme/bigshop/js/jquery.dcjqaccordion.min.js"></script> 

        <script type="text/javascript">
          $(document).ready(function() {
            $('#cat_accordion').cutomAccordion({
              classExpand : 'custom_id0',
              menuClose: false,
              autoClose: true,
              saveState: false,
              disableLink: false,   
              autoExpand: true
            });
          });
        </script>
      </column>
      <div id="carousel0" class="owl-carousel nxt">
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/nfl-130x100.png" alt="NFL" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/redbull-130x100.png" alt="RedBull" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/sony-130x100.png" alt="Sony" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/cocacola-130x100.png" alt="Coca Cola" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/burgerking-130x100.png" alt="Burger King" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/canon-130x100.png" alt="Canon" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/harley-130x100.png" alt="Harley Davidson" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/dell-130x100.png" alt="Dell" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/disney-130x100.png" alt="Disney" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/starbucks-130x100.png" alt="Starbucks" class="img-responsive" />
        </div>
        <div class="item text-center">
          <img src="images/cache/catalog/demo/manufacturer/nintendo-130x100.png" alt="Nintendo" class="img-responsive" />
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
  </div>
</div>
</section>
</body></html>
</div>

