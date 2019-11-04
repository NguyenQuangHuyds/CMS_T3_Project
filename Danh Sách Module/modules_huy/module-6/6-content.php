 <?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>

 <div class="type-6">
  <div class="container">
    <footer id="footer">
      <div class="fpart-first">
        <div class="container">
          <div class="row">

            <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
              <h5>Information</h5>
              <ul class="padding">
                <li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
                <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>
                <li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
              <h5>Customer Service</h5>
              <ul class="padding">
                <li><a href="index2724.html?route=information/contact">Contact Us</a></li>
                <li><a href="index71ba.html?route=account/return/add">Returns</a></li>
                <li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
              </ul>
            </div>
            <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
              <h5>Extras</h5>
              <ul class="padding">
                <li><a href="indexd773.html?route=product/manufacturer">Brands</a></li>
                <li><a href="index4dd2.html?route=account/voucher">Gift Vouchers</a></li>
                <li><a href="index3d18.html?route=affiliate/account">Affiliates</a></li>
                <li><a href="indexf110.html?route=product/special">Specials</a></li>
              </ul>
            </div>
            <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
              <h5>My Account</h5>
              <ul class="padding">
                <li><a href="indexe223.html?route=account/account">My Account</a></li>
                <li><a href="indexe223.html?route=account/order">Order History</a></li>
                <li><a href="indexe223.html?route=account/wishlist">Wish List</a></li>
                <li><a href="indexe223.html?route=account/newsletter">Newsletter</a></li>
              </ul>
            </div>

            <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h5>Contact Details</h5>
              <ul class="padding">
                <li class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Bigshop Plaza, 22 Hoi Wing Road, Delhi, India.</li>
                <li class="mobile"><i class="fa fa-phone"></i>+91 9898989898</li>
                <li class="email"><i class="fa fa-envelope"></i><a href="mailto:info@bigshop.com">info@bigshop.com</a>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>