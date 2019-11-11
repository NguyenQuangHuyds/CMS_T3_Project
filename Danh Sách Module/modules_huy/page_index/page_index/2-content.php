
<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<body>
    <div class="k main-form">
        <div class="k tab-layout">
            <span class="k  text-tab-layout first-tab"> Featured </span>
            <span class="k  text-tab-layout"> Lasted </span>
            <span class="k  text-tab-layout"> Bestseller </span>
            <span class="k  text-tab-layout"> Special </span>
        </div>
        <div class="k body-tab">

            <div class="k body-item">
               <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=42"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/apple_cinema_30-200x200.jpg" alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;" class="img-responsive"></a></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>

            <div class="k body-item">
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=48"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/ipod_classic_1-200x200.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"></a></div>
                <div class="k t name-item">iPod Classic</div>
                <div class="k t price-item">
                    $100.00
                    <span class="t price-item-discount">$110.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>
            <div class="k body-item">
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=28"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/htc_touch_hd_1-200x200.jpg" alt="HTC Touch HD" title="HTC Touch HD" class="img-responsive"></a></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>
            <div class="k body-item">
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=40"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/iphone_1-200x200.jpg" alt="iPhone" title="iPhone" class="img-responsive"></a></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>
             <div class="k body-item">
               <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=28"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/htc_touch_hd_1-200x200.jpg" alt="HTC Touch HD" title="HTC Touch HD" class="img-responsive"></a></div>
                <div class="k t name-item">iPhone 5s</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>

              <div class="k body-item">
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=33"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/samsung_syncmaster_941bw-200x200.jpg" alt="Samsung SyncMaster 941BW" title="Samsung SyncMaster 941BW" class="img-responsive"></a></div>
                <div class="k t name-item">Palm Treo Pro</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>

               <div class="k body-item">
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=29"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/palm_treo_pro_1-200x200.jpg" alt="Palm Treo Pro" title="Palm Treo Pro" class="img-responsive"></a></div>
                <div class="k t name-item">Samsung SyncMaster 941BW</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>

             <div class="k body-item">
                <div class="k img-item"></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>
            <div class="k body-item">
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=31"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/nikon_d300_1-200x200.jpg" alt="Nikon D300" title="Nikon D300" class="img-responsive"></a></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>
            <div class="k body-item">
               <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=42"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/apple_cinema_30-200x200.jpg" alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;" class="img-responsive"></a></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>
            <div class="k body-item">
                <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=34"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/ipod_shuffle_1-200x200.jpg" alt="iPod Shuffle" title="iPod Shuffle" class="img-responsive"></a></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>
            <div class="k body-item">
               <div class="image"><a href="http://demo.harnishdesign.net/opencart/bigshop/v1/index.php?route=product/product&amp;product_id=41"><img src="http://demo.harnishdesign.net/opencart/bigshop/v1/image/cache/catalog/demo/imac_1-200x200.jpg" alt="iMac" title="iMac" class="img-responsive"></a></div>
                <div class="k t name-item">Apple Cinema3D</div>
                <div class="k t price-item">
                    $110.00
                    <span class="t price-item-discount">$120.00</span>
                </div>
                <div class="k form-vote">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <div class="k t form-buttom">
                    <span class="t bnt-add-tocart">Add to Cart</span>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-exchange"></i>
                </div>
            </div>



        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
</body>

</html>
