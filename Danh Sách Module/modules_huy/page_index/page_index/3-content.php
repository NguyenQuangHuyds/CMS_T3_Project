 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
<html lang="en">
  <body>
  	<div class="type-3">
  		<div id="bigshop-banner1" class="bigshop-banner">
         <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 moderns"><a href="#"><img src="images/banners/hinh8.jpg" alt="sample banner" title="sample banner"></a></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 moderns"><a href="#"><img src="images/banners/hinh9.jpg"" alt="sample banner 2" title="sample banner 2"></a></div>
    </div>
</div>
</div>                          
</body>
</html>
