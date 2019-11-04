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
        <title>module 020</title>
        <meta charset="UTF-8">

    </head>

    <body>   
        <div class="type-020">
            <div class="container-fluid">
                <div class="rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                    <meta itemprop="ratingValue" content="4" />
                    <p>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                        <a href="#" onclick="$('a[href=\'#tab-review\']').trigger('click');
                                return false;"><span itemprop="reviewCount">1 reviews</span></a> / <a href="#" onclick="$('a[href=\'#tab-review\']').trigger('click');
                                        return false;">Write a review</a></p>
                </div>
                <hr>
             
                <div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> 
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> 
                    <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest"  </div>
                <a class="twitter-timeline" href="#" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="001">Tweets</a>
                    <span>
                        
                        <button style="background: transparent; border: none;">

                            <a style="background-image: url('images/download01.jpg');" class="hien" href=""></a>
                        </button></span>
                                       
                                  
               

            
        </div>
    </div>
</div> 

</body>
</html>                                    
