<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block.'/libs/lessc.inc.php');
    }

    $less = new lessc;
    $less->compileFile('less/154.less', 'css/154.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>154</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/154.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/plugins.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/154.js"></script>
    </head>
    <body>
        <?php include $dir_block.'/154-content.php'; ?>
        <?php include $dir_block.'/155-content.php'; ?>
        <?php include $dir_block.'/156-content.php'; ?>
        <?php include $dir_block.'/157-content.php'; ?>
    </body>
</html>
