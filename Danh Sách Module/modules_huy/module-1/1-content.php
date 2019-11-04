 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>
 <div class="type-1">
 	<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
</head>
<body>

<div class="container">
  <h3 style="font-size: 23px;">" The clean and modern look allows you to use the theme for every kind of eCommerce online shop. Great <div style="font-size: 23px;text-align: center;" >Looks on Desktops, Tablets and Mobiles. "</div>
</h3>  

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="margin-right: 10px;">
      <li style="margin-right: 10px;"data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li style="margin-right: 10px;"data-target="#myCarousel" data-slide-to="1"></li>
      <li style="margin-right: 10px;"data-target="#myCarousel" data-slide-to="2"></li>
       <li style="margin-right: 10px;"data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
      	<img  src="images/banners/hinh3.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/banners/hinh1.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/banners/hinh4.jpg" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="images/banners/hinh2.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
 </div>