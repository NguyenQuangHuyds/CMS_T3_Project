<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/pagecontact.less', 'css/pagecontact.css');

?>
<!DOCTYPE html>

<html>

<head>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/4.css" rel="stylesheet" type="text/css"/>
  
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="catalog/view/theme/bigshop/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <script src="catalog/view/theme/bigshop/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script src="catalog/view/theme/bigshop/js/jquery.easing-1.3.min.js" type="text/javascript" ></script>
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/bigshop/stylesheet/stylesheet.min.css" />
    <link rel="stylesheet" type="text/css" href="catalog/view/theme/bigshop/stylesheet/responsive.min.css" />
    <script type="text/javascript" src="catalog/view/theme/bigshop/js/common.min.js"></script>
    <script type="text/javascript" src="catalog/view/theme/bigshop/js/custom.min.js"></script>
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="catalog/view/theme/bigshop/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script src="catalog/view/theme/bigshop/js/jquery.autocomplete.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/4.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo $url_path ?>/css/pagecontact.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/headercontact.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/footercontact.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo $url_path ?>/css/indexcontact.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $url_path ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo $url_path ?>/js/331.js"></script>
</head>

<body style="background: url(images/27.png);">
    <div class="container">
        <div class="wrapper-box" style="border-radius: 5px; background: #fff;box-shadow: 0 0 10px rgba(0, 0, 0, .2);margin: 20px auto;">
            <div class="container-fluid">
                <?php $dir_block . include 'header_contact/headercontact.php'; ?>
                <?php $dir_block . include 'body_contact/bodycontact.php'; ?>
            </div>
            <?php $dir_block . include 'footer_contact/footercontact.php'; ?>
        </div>
    </div>
</body>

</html>