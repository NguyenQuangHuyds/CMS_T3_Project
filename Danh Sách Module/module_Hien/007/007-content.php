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
    <title></title>
    <meta charset="UTF-8">
    
</head>

<body>   
    <!-- <div class="type-008">
        <div class="container-fluid">
        <div id="header" >
  <header class="header-row">
    <div class="container">
      <div class="table-container">
      
      <nav class="htop col-md-9 pull-right flip inner" id="top">
      
      <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
        <div id="top-links" class="nav pull-right flip">
          <ul>
                        <li><a href="indexe223.html?route=account/login">Login</a></li>
            <li><a href="index5502.html?route=account/register">Register</a></li>
                      </ul>
        </div><div class="pull-right flip left-top">
                    <div class="links">
            <ul>
                            <li><a href="#" target="_self"> Custom Links</a></li>
                                                                                    <li class="wrap_custom_block hidden-sm hidden-xs"><a>Custom Block<b></b></a>
                <div class="custom_block">
                  <ul>
                    <li><table style="width:275px; height: 250px;"><tbody><tr><td><h3>Custom Block</h3></td></tr><tr><td><img src="image/catalog/demo/banners/sb.jpg"></td></tr><tr><td><p>This is a CMS block edited from theme admin panel. You can insert any content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p><p><a target="" href="http://#">Read More</a><br></p></td></tr></tbody></table></li>
                  </ul>
                </div>
              </li>
                                                                      <li><a href="indexe223.html?route=account/wishlist" id="wishlist-total">Wish List (0)</a></li>
                                        </ul>
          </div>
        </div>
    </div>  -->
    <div class="type-007">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav ">
        <li class="active"><a href="#">Custom Links</a></li>
        <li class="dropdown-hover">
            <a href="#">Custom Block<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>    
            </ul>
        </li>
      <li><a href="#">Wish List(0)</a></li>
      <li class="dropdown-hover">
          <a href="#"><img src="" alt="">English<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                
            </ul>
    </li>
      <li class="dropdown-hover">
          <a href="#">$USD<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                 
            </ul>
    </li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Register</a></li>
    </ul>
  </div>
</nav>

</div>

</body>
</html>                                    
