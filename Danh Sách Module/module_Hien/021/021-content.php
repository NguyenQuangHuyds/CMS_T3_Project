+<?php
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
    <div class="type-021">
        <div class="container-fluid">
        <div class="image-additional" id="gallery_01">
                            <a class="thumbnail" href="#" data-zoom-image="" data-image="" title="HTC Touch HD"> <img src="images/htc_touch_hd_1-500x500" title="HTC Touch HD" alt = "HTC Touch HD"/></a>
                            <a class="thumbnail" href="#" data-zoom-image="" title="HTC Touch HD"><img src="images/htc_touch_hd_1-500x500" title="HTC Touch HD" alt="HTC Touch HD" /></a>
                            <a class="thumbnail" href="#" data-zoom-image="" data-image="" title="HTC Touch HD"><img src="images/htc_touch_hd_1-500x500" title="HTC Touch HD" alt="HTC Touch HD" /></a>
                          </div>
        </div>
    </div> 

</body>
</html>                                    
