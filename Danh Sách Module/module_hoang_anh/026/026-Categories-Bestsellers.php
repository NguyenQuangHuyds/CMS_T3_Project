<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!DOCTYPE html>

<html>

<head>
    <title>module 1329</title>
    <meta charset="UTF-8">

</head>

<body>
    <div class="type-026-Categories-Bestsellers">
    <div id="bigshop-banner0" class="bigshop-banner">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 moderns"><a href="#"><img  src="images/sb-262x125.jpg" alt="sample banner" title="sample banner" /></a></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 moderns"><a href="#"><img  src="images/sb2-262x125.jpg" alt="sb" title="sb" /></a></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 moderns"><a href="#"><img  src="images/sb3-262x125.jpg" alt="sb banner" title="sb banner" /></a></div>
            </div>
        </div>
    </div>
</body>

</html>