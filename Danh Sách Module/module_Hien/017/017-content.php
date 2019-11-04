<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
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
    <div class="type-017">
    <ul class="list-unstyled description">
                            <li><b>Brand:</b> <a href="#"><span itemprop="brand">HTC</span></a></li>
                            <li><b>Product Code:</b> <span itemprop="mpn">Product 1</span></li>
                            <li><b>Reward Points:</b> 400</li>
                                      <li><b>Availability:</b> <span style="color:#53af2e; font-weight:bold;">In Stock</span></li>
                      </ul>
    </div> 

</body>
</html>                                    
