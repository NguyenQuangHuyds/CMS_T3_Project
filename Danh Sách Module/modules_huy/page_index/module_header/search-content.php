<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-search">
  <div class="row">
    <div class="col-md-4">
      <img src="images/logo.png" alt="">
    </div>
    <div class="col-md-8">
      <!-- <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg ac_input" autocomplete="off"> -->
      <div id="search" class="input-search">
        <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="search form-control input-lg ac_input" autocomplete="off">
        <button type="button" class="button-search"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </div>
</div>