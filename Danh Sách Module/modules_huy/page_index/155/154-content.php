 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>

<div class="type-154">
<div class="container">
  <div class="custom-feature-box row">
        <div class="col-sm-4 col-xs-12">
      <div class="feature-box fbox_1">
        <div class="title">Free &amp; Easy Return</div>
        <p>Free return in 7 Days after purchasing</p>
      </div>
    </div>
                <div class="col-sm-4 col-xs-12">
      <div class="feature-box fbox_2">
        <div class="title">Free Shipping</div>
        <p>Free shipping on order over $1000</p>
      </div>
    </div>
                <div class="col-sm-4 col-xs-12">
      <div class="feature-box fbox_3">
        <div class="title">Gift Cards</div>
        <p>Give the special perfect gift</p>
      </div>
    </div>
              </div>
</div>
    <!-- End .page-wrapper -->

</div>