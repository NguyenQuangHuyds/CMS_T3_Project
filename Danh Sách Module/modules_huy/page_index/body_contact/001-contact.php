<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-001-contact">
  <div class="container-fluid">
    <div class="row">
      <h1>Contact Us</h1>
      <h3> <span>Our Location</span></h3>
      <div class="row">
        <div class="col-sm-3">
          <strong>Bigshop</strong><br />
          <address>
            Bigshop Plaza,<br />
            22 Hoi Wing Road,<br />
            Delhi,<br />
            India.
          </address>
        </div>
        <div class="col-sm-3"><strong>Telephone</strong><br>
          +91 9898989898<br />
          <br />
          <strong>Fax</strong><br>
          +91 9898989898 </div>
        <div class="col-sm-3">
          <strong>Opening Times</strong><br />
          24X7 Customer Care<br />
          <br />
          <strong>Comments</strong><br />
          This field is for any special notes you would like to tell the customer i.e. Store does not accept cheques. </div>
      </div>
    </div>
  </div>
</div>