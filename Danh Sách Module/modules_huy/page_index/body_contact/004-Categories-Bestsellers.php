<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-004-Categories-Bestsellers">
    <h3> <span>Bestsellers</span></h3>
    <div class="row products-category mod">
        <div class="product-layout">
            <div class="product-thumb clearfix">
                <div class="image"><a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="images/hp_1-60x60.jpg" alt="HP LP3065" title="HP LP3065" class="img-responsive" /></a></div>
                <div class="caption">
                    <h4><a href="indexd21c.html?route=product/product&amp;product_id=47">HP LP3065</a></h4>
                    <!--<p>
	Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel ..</p>-->
                    <p class="price">
                        $122.00 </p>
                </div>
            </div>
        </div>
        <div class="product-layout">
            <div class="product-thumb clearfix">
                <div class="image"><a href="indexd94c.html?route=product/product&amp;product_id=44"><img src="images/macbook_air_1-60x60.jpg" alt="MacBook Air" title="MacBook Air" class="img-responsive" /></a></div>
                <div class="caption">
                    <h4><a href="indexd94c.html?route=product/product&amp;product_id=44">MacBook Air</a></h4>
                    <!--<p>
	MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don’t lose inche..</p>-->
                    <p class="price">
                        $1,202.00 </p>
                </div>
            </div>
        </div>
        <div class="product-layout">
            <div class="product-thumb clearfix">
                <div class="image"><a href="indexbb02.html?route=product/product&amp;product_id=42"><img src="images/apple_cinema_30-60x60.jpg" alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;" class="img-responsive" /></a></div>
                <div class="caption">
                    <h4><a href="indexbb02.html?route=product/product&amp;product_id=42">Apple Cinema 30&quot;</a></h4>
                    <!--<p>
	The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed sp..</p>-->
                    <p class="price">
                        <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                        <span class="saving">-10%</span> </p>
                </div>
            </div>
        </div>
        <div class="product-layout">
            <div class="product-thumb clearfix">
                <div class="image"><a href="index6320.html?route=product/product&amp;product_id=28"><img src="images/htc_touch_hd_1-60x60.jpg" alt="HTC Touch HD" title="HTC Touch HD" class="img-responsive" /></a></div>
                <div class="caption">
                    <h4><a href="index6320.html?route=product/product&amp;product_id=28">HTC Touch HD</a></h4>
                    <!--<p>
	HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high de..</p>-->
                    <p class="price">
                        $122.00 </p>
                    <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-layout">
            <div class="product-thumb clearfix">
                <div class="image"><a href="indexcae8.html?route=product/product&amp;product_id=41"><img src="images/imac_1-60x60.jpg" alt="iMac" title="iMac" class="img-responsive" /></a></div>
                <div class="caption">
                    <h4><a href="indexcae8.html?route=product/product&amp;product_id=41">iMac</a></h4>
                    <!--<p>
	Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo ..</p>-->
                    <p class="price">
                        $122.00 </p>
                </div>
            </div>
        </div>
    </div>
</div>