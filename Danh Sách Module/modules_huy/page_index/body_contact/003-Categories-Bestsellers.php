<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<script type="text/javascript">
  function show(show, close, down) {
    document.getElementById(show).style.display = 'block';
    document.getElementById(close).style.display = 'block';
    document.getElementById(down).style.display = 'none';
  }

  function hiddens(show, close, down) {
    document.getElementById(show).style.display = 'none';
    document.getElementById(close).style.display = 'none';
    document.getElementById(down).style.display = 'block';
  }
</script>
<!DOCTYPE html>

<html>

<head>
  <title>module 1329</title>
  <meta charset="UTF-8">

</head>

<body>
  <div class="type-003-Categories-Bestsellers">
    <h3> <span>Categories</span></h3>
    <div class="box-category">
      <ul id="cat_accordion" style="padding: 0;">
        <li class="custom_id20 cutom-parent-li">
          <a class="" href="index98dc.html?route=product/category&amp;path=20">Desktops</a>
          <span id="close" onclick="hiddens('show', 'close', 'down')" class="down" style="display:none"><i style="font-size: 10px;" class="fa fa-minus" aria-hidden="true"></i></span>
          <span id="down" class="down" onclick="show('show', 'close', 'down')"><i style="font-size: 10px;" class="fa fa-plus" aria-hidden="true"></i></span>
          <ul id="show" style="display:none; padding: 10px;">
            <li class="custom_id26">
              <a class="cutom-parent-li" href="indexd9fe.html?route=product/category&amp;path=20_26">PC</a>
            </li>
            <li class="custom_id27"><a class="" href="indexf345.html?route=product/category&amp;path=20_27">Mac</a>
            </li>
          </ul>
        </li>
        <li class="custom_id18 cutom-parent-li">
          <a class="" href="index7fa3.html?route=product/category&amp;path=18">Laptops &amp; Notebooks</a> <span class="down"></span>
          <span id="close-notebooks" onclick="hiddens('notebooks', 'close-notebooks', 'downs-notebooks')" class="down" style="display:none"><i style="font-size: 10px;" class="fa fa-minus" aria-hidden="true"></i></span>
          <span id="downs-notebooks" class="down" onclick="show('notebooks', 'close-notebooks', 'downs-notebooks')"><i style="font-size: 10px;" class="fa fa-plus" aria-hidden="true"></i></span>
          <ul id="notebooks" style="display:none;  padding: 10px;">
            <li class="custom_id46 cutom-parent-li"><a class="" href="index9f41.html?route=product/category&amp;path=18_46">Macs</a></li>
            <li class="custom_id45"><a class="" href="index8470.html?route=product/category&amp;path=18_45">Windows</a></li>
          </ul>
        </li>
        <li class="custom_id25 cutom-parent-li">
          <a class="" href="index1647.html?route=product/category&amp;path=25">Components</a> <span class="down"></span>
          <span id="close-Components" onclick="hiddens('Components', 'close-Components', 'downs-Components')" class="down" style="display:none"><i style="font-size: 10px;" class="fa fa-minus" aria-hidden="true"></i></span>
          <span id="downs-Components" class="down" onclick="show('Components', 'close-Components', 'downs-Components')"><i style="font-size: 10px;" class="fa fa-plus" aria-hidden="true"></i></span>
          <ul id="Components" style="display:none; padding-left: 10px">
            <li class="custom_id29 cutom-parent-li"><a class="" href="indexc219.html?route=product/category&amp;path=25_29">Mice and Trackballs</a></li>
            <li class="custom_id28 cutom-parent-li">
              <a class="" href="indexe177.html?route=product/category&amp;path=25_28">Monitors</a> <span class="down"></span>
              <span id="close-Monitors" onclick="hiddens('Monitors', 'close-Monitors', 'downs-Monitors')" class="down" style="display:none"><i style="font-size: 10px;" class="fa fa-minus" aria-hidden="true"></i></span>
              <span id="downs-Monitors" class="down" onclick="show('Monitors', 'close-Monitors', 'downs-Monitors')"><i style="font-size: 10px;" class="fa fa-plus" aria-hidden="true"></i></span>
              <ul id="Monitors" style="display:none; padding-left: 10px">
                <li class="custom_id35 cutom-parent-li"><a class="" href="index0b4e.html?route=product/category&amp;path=25_28_35">test 1</a></li>
                <li class="custom_id36"><a class="" href="index6d46.html?route=product/category&amp;path=25_28_36">test 2</a></li>
              </ul>
            </li>
            <li class="custom_id30 cutom-parent-li"><a class="" href="index68a7.html?route=product/category&amp;path=25_30">Printers</a></li>
            <li class="custom_id31 cutom-parent-li"><a class="" href="indexf3db.html?route=product/category&amp;path=25_31">Scanners</a></li>
            <li class="custom_id32"><a class="" href="index955a.html?route=product/category&amp;path=25_32">Web Cameras</a></li>
          </ul>
        </li>
        <li class="custom_id24 cutom-parent-li"><a class="" href="indexc957.html?route=product/category&amp;path=24">Phones &amp; PDAs</a></li>
        <li class="custom_id33 cutom-parent-li"><a class="" href="index68ea.html?route=product/category&amp;path=33">Cameras</a></li>
        <li class="custom_id34 cutom-parent-li" style="border:none !important">
          <a class="" href="index8122.html?route=product/category&amp;path=34">MP3 Players</a> <span class="down"></span>
          <span id="close-MP3Players" onclick="hiddens('MP3Players', 'close-MP3Players', 'downs-MP3Players')" class="down" style="display:none"><i style="font-size: 10px;" class="fa fa-minus" aria-hidden="true"></i></span>
          <span id="downs-MP3Players" class="down" onclick="show('MP3Players', 'close-MP3Players', 'downs-MP3Players')"><i style="font-size: 10px;" class="fa fa-plus" aria-hidden="true"></i></span>

          <ul id="MP3Players" style="display:none; padding-left: 10px">
            <li class="custom_id43 cutom-parent-li"><a class="" href="index22d5.html?route=product/category&amp;path=34_43">test 11</a></li>
            <li class="custom_id44 cutom-parent-li"><a class="" href="indexa632.html?route=product/category&amp;path=34_44">test 12</a></li>
            <li class="custom_id47 cutom-parent-li"><a class="" href="index509a.html?route=product/category&amp;path=34_47">test 15</a></li>
            <li class="custom_id48 cutom-parent-li"><a class="" href="index7e21.html?route=product/category&amp;path=34_48">test 16</a></li>
            <li class="custom_id49 cutom-parent-li"><a class="" href="index0e62.html?route=product/category&amp;path=34_49">test 17</a></li>
            <li class="custom_id50 cutom-parent-li"><a class="" href="indexf762.html?route=product/category&amp;path=34_50">test 18</a></li>
            <li class="custom_id51 cutom-parent-li"><a class="" href="index6f52.html?route=product/category&amp;path=34_51">test 19</a></li>
            <li class="custom_id52 cutom-parent-li">
              <a class="" href="indexbe11.html?route=product/category&amp;path=34_52">test 20</a> <span class="down"></span>
              <span id="close-test" onclick="hiddens('test', 'close-test', 'downs-test')" class="down" style="display:none"><i style="font-size: 10px;" class="fa fa-minus" aria-hidden="true"></i></span>
              <span id="downs-test" class="down" onclick="show('test', 'close-test', 'downs-test')"><i style="font-size: 10px;" class="fa fa-plus" aria-hidden="true"></i></span>

              <ul id="test" style="display:none; padding-left: 10px">
                <li class="custom_id58"><a class="" href="indexcc97.html?route=product/category&amp;path=34_52_58">test 25</a></li>
              </ul>
            </li>
            <li class="custom_id53 cutom-parent-li"><a class="" href="indexb234.html?route=product/category&amp;path=34_53">test 21</a></li>
            <li class="custom_id54 cutom-parent-li"><a class="" href="indexcd03.html?route=product/category&amp;path=34_54">test 22</a></li>
            <li class="custom_id55 cutom-parent-li"><a class="" href="index000c.html?route=product/category&amp;path=34_55">test 23</a></li>
            <li class="custom_id56 cutom-parent-li"><a class="" href="indexfee0.html?route=product/category&amp;path=34_56">test 24</a></li>
            <li class="custom_id38 cutom-parent-li"><a class="" href="indexd86f.html?route=product/category&amp;path=34_38">test 4</a></li>
            <li class="custom_id37 cutom-parent-li"><a class="" href="index9716.html?route=product/category&amp;path=34_37">test 5</a></li>
            <li class="custom_id39 cutom-parent-li"><a class="" href="index2bab.html?route=product/category&amp;path=34_39">test 6</a></li>
            <li class="custom_id40 cutom-parent-li"><a class="" href="index6493.html?route=product/category&amp;path=34_40">test 7</a></li>
            <li class="custom_id41 cutom-parent-li"><a class="" href="index7fe6.html?route=product/category&amp;path=34_41">test 8</a></li>
            <li class="custom_id42 "><a class="" href="indexd7cc.html?route=product/category&amp;path=34_42">test 9</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
</body>

</html>