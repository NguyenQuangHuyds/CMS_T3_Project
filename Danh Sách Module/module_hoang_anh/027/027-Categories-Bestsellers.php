<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!DOCTYPE html>

<html>

<head>
    <title>module 1329</title>
    <meta charset="UTF-8">

</head>

<body>
<div class="type-027-Categories-Bestsellers">
        <h3> <span>Specials</span></h3>
        <div class="row products-category mod">
            <div class="product-layout">
                <div class="product-thumb clearfix">
                    <div class="image"><a href="indexbb02.html?route=product/product&amp;product_id=42"><img src="images/apple_cinema_30-60x60.jpg" alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="indexbb02.html?route=product/product&amp;product_id=42">Apple Cinema 30&quot;</a></h4>

                        <p class="price">
                            <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                            <span class="saving">-10%</span> </p>
                    </div>
                </div>
            </div>
            <div class="product-layout">
                <div class="product-thumb clearfix">
                    <div class="image"><a href="indexf073.html?route=product/product&amp;product_id=30"><img src="images/canon_eos_5d_1-60x60.jpg" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="indexf073.html?route=product/product&amp;product_id=30">Canon EOS 5D</a></h4>
                        <p class="price">
                            <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>
                            <span class="saving">-20%</span> </p>
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
                    <div class="image"><a href="index3d7a.html?route=product/product&amp;product_id=49"><img src="images/samsung_tab_1-60x60.jpg" alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1" class="img-responsive" /></a></div>
                    <div class="caption">
                        <h4><a href="index3d7a.html?route=product/product&amp;product_id=49">Samsung Galaxy Tab 10.1</a></h4>
                        <p class="price">
                            <span class="price-new">$218.00</span> <span class="price-old">$241.99</span>
                            <span class="saving">-10%</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>