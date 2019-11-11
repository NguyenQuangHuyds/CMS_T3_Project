<?php
 $url_host = 'http://'.$_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
 ?>

    <div class="type-156">
        <footer id="footer">
            <div class="container">
                <div class="fpart-second">
                <div id="powered" class="clearfix" style=" padding: 10px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="payments_types">
                                        <img data-toggle="tooltip" src="images/payment_paypal.png" alt="paypal" title="PayPal">
                                        <img data-toggle="tooltip" src="images/payment_american.png" alt="american-express" title="american-express">
                                        <img data-toggle="tooltip" src="images/payment_2checkout.png" alt="2checkout" title="2checkout">
                                        <img data-toggle="tooltip" src="images/payment_maestro.png" alt="Maestro" title="Maestro">
                                        <img data-toggle="tooltip" src="images/payment_discover.png" alt="Discover" title="Discover">
                                    </div>
                                </div>
                                <div class="powered_text pull-left flip col-md-4">
                                    Bigshop Theme © 2015, Theme By Harnish Design
                                </div>
                                <div class="col-md-4">
                                    <div class="social pull-right flip">
                                        <a href="https://www.facebook.com/harnishdesign/" target="_blank">
                                            <img data-toggle="tooltip" src="images/socialicons/facebook.png" alt="Facebook" title="Facebook">
                                        </a>
                                        <a href="#" target="_blank">
                                            <img data-toggle="tooltip" src="images/socialicons/twitter.png" alt="Twitter" title="Twitter">
                                        </a>
                                        <a href="#" target="_blank">
                                            <img data-toggle="tooltip" src="images/socialicons/pinterest.png" alt="Pinterest" title="Pinterest">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </footer>
    </div>