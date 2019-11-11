<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-331">
  <div class="col-xs-12 inner">
    <div class="links_contact pull-right flip">
      <ul class="ull">
        <li class="mobile"><i class="fa fa-phone"></i>+91 98989898</li>
        <li class="email"><a href="#"><i class="fa fa-envelope"></i>support@bigshop.com</a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-9 pull-right col-sm-4 col-xs-12 inner">
    <div id="cart">
      <div style="position:relative">
        <!-- <img src="images/images" alt="" style="width: 20px;height: 20px; margin-left: 1189px;"> -->

        <button class="btnfocus" id="cart-total"><i class="cart fa fa-shopping-cart" aria-hidden="true"></i>0 item(s) - $0.00 <i class="fa fa-caret-down"></i>
          <ul class="dropdown-focus">
            <li>
              <p class="text-center">Your shopping cart is empty!</p>
            </li>
          </ul>
        </button>
      </div>
    </div>
  </div>
</div>