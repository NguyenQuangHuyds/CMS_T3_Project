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
    <title>module 004</title>
    <meta charset="UTF-8">
    
</head>

<body>   
    <div class="type-019"> 
         <div id="product">
            <div class="cart">
                <div>
                  <div class="qty">
                    <label class="control-label" for="input-quantity">Qty</label>
                    <button class="qtyBtn mines" href="">-</button>
                    <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                    <button class="qtyBtn plus" href="">+</button>
                    
                    
                    <input type="hidden" name="product_id" value="28" />
                    <div class="clear"></div>
                  </div>
                  <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-color btn-lg">Add to Cart</button>
                </div>
                <div>
                  <button type="button" class="wishlist" onclick="wishlist.add('28');"><i class="fa fa-heart"></i> Add to Wish List</button>
                  <br />
                  <button type="button" class="wishlist" onclick="compare.add('28');"><i class="fa fa-exchange"></i> Compare this Product</button>
                </div>
              </div>
            </div>
    </div> 

</body>
</html>                                    
