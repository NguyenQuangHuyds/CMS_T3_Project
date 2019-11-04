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
  
  <script type="text/javascript">
    $(document).ready(function() {  
      $("#filter_name").autocomplete("getdata.php?lan=en", {
        width: 445,
        resultsClass: "ac_results col-lg-7",
        matchContains: true
      });
    });
  </script>
  <style type="text/css">
    body {  background-image: url("catalog/view/theme/bigshop/image/patterns/27.png");
  }
  #header .header-row {
    padding: 20px 0px;
  }
  #header #logo {
    padding-top: 20px;
  }

  @media screen and (max-width:800px) {
  }
</style>
</head>
<body class="common-home">
  <section class="wrapper-box">
    <div class="container">
      <!-- <div id="content" class="col-sm-9"><div class="list-group">
        <div class="welcome"></div>
      </div> -->
      <div id="bigshop-banner1" class="bigshop-banner">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 moderns"><a href="#"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/banners/small-banner1-410x170.jpg" alt="sample banner" title="sample banner" /></a></div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 moderns"><a href="#"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/banners/small-banner-410x170.jpg" alt="sample banner 2" title="sample banner 2" /></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
</body></html>
