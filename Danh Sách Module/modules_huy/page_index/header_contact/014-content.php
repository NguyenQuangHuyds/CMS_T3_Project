<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-014-contact" style="margin-top: 22px;">
  <nav class="navbar navbar-inverse">
    <!-- <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div> -->
    <ul class="nav navbar-nav">
      <li class=""><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
      <li><a href="#">Desktops</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Laptops & Notebooks</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Components</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Phones & PDAs</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Cameras</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">MP3 Players</a>
        <ul class="dropdown-menu many-ul">
          <div style="display: flex">
            <ul style="width: 19%; margin-right: 4px;">
              <li><a href="#">Test 1</a></li>
              <li><a href="#">Test 2</a></li>
              <li><a href="#">Test 3</a></li>
            </ul>
            <ul style="width: 19%;margin-right: 4px;">
              <li><a href="#">Test 4</a></li>
              <li><a href="#">Test 5</a></li>
              <li><a href="#">Test 6</a></li>
            </ul>
            <ul style="width: 19%;margin-right: 4px;">
              <li><a href="#">Test 7</a></li>
              <li><a href="#">Test 8</a></li>
              <li><a href="#">Test 9</a></li>
            </ul>
            <ul style="width: 19%;margin-right: 4px;">
              <li><a href="#">Test 10</a></li>
              <li><a href="#">Test 11</a></li>
              <li><a href="#">Test 12</a></li>
            </ul>
            <ul style="width: 19%;">
              <li><a href="#">Test 10</a></li>
              <li><a href="#">Test 11</a></li>
              <li><a href="#">Test 12</a></li>
            </ul>
          </div>

        </ul>

      </li>
      <li><a href="#">Brands</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Custom Links</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Custom Block</a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </nav>
</div>