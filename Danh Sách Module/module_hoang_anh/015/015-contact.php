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
  <div class="type-015-contact">
    <form action="" class="form-horizontal">
      <fieldset>
        <h3> <span>Contact Form</span></h3>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-name">Your Name</label>
          <div class="col-sm-10">
            <input type="text" name="name" value="" id="input-name" class="form-control" />
          </div>
        </div>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
          <div class="col-sm-10">
            <input type="text" name="email" value="" id="input-email" class="form-control" />
          </div>
        </div>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
          <div class="col-sm-10">
            <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
          </div>
        </div>
      </fieldset>
      <div class="buttons">
        <div class="pull-right">
          <input class="btn btn-primary" type="submit" value="Submit" />
        </div>
      </div>
    </form>
  </div>


</body>

</html>