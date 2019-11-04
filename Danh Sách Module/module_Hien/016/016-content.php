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
    <title>module 016</title>
    <meta charset="UTF-8">
    
</head>

<body>   
    <div class="type-016">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h1> HTC Touch HD</h1>
            <div class="left">
            <img src="images/htc_touch_hd_1-500x500" alt="CSS scale" class="zoom image">
            <div class="center-block text-center "><span class="zoom-gallery"><i class="fa fa-search"></i> Click image for Gallery</span></div>
</div>
</div>
</div>
</div>
        
    </div> 

</body>
</html>                                    
