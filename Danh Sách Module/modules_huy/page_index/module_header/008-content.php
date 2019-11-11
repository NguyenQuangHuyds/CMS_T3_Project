<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-008">
  <nav class="navbar navbar-default">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav ">
      <li class=""><a href="#">Custom Links</a></li>
      <li class="dropdown-hover">
        <a href="#">Custom Block<span class="caret"></span></a>
        <ul style="width: 258px;" class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <div class="customblock">
            <h4>Custom Block</h3>
              <img width="100%" src="images/sb.jpg" alt="">
              <p>This is a CMS block edited from theme admin panel. You can insert any content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
              <p> <a href="">Read More</a> </p>
          </div>


        </ul>
      </li>
      <li><a href="#">Wish List(0)</a></li>
      <li class="dropdown-hover">
        <a href="#"><img src="images/gb.png" alt="">
          <span> English</span>
          <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li style="border-bottom:1px solid #e5e5e5" role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/gb.png" alt=""><span> English</span> </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/ar.png" alt=""><span> Arabic</span> </a></li>
        </ul>
      </li>
      <li class="dropdown-hover">
        <a href="#">$USD<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li style="border-bottom:1px solid #e5e5e5" role="presentation"><a role="menuitem" tabindex="-1" href="#"><span>€ Euro</span> </a></li>
          <li style="border-bottom:1px solid #e5e5e5" role="presentation"><a role="menuitem" tabindex="-1" href="#"><span>£ Pound Sterling</span> </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> <span>$ US Dollar</span> </a></li>
        </ul>
      </li>
      <li><a href="#">Login</a></li>
      <li><a href="#">Register</a></li>
    </ul>
  </nav>

</div>