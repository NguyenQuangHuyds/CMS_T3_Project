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
<div class="type-028-Categories-Bestsellers">
    <div class="list-group">
            <h2>Custom Content</h2>
            <div class="welcome" style="font-size: 12.5px;">This is a CMS block edited from theme admin panel. You can insert any content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
        </div>
    </div>
</body>

</html>