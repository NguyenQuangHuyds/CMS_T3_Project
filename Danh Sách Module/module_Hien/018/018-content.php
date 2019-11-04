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
    <title>module 018</title>
    <meta charset="UTF-8">
    
</head>

<body>   
    <div class="type-018">
    <div class="container">
      <div class="price-div" >
        <div class="before-price">
          <span class="price">$122.00</span>
          <br>
          <br>
          <li>Ex Tax: $100.00</li>
          <li>Price in reward points: 200</li>

        </div>

      </div>

    </div>
  
    
   
   
    </div> 

</body>
</html>                                    
