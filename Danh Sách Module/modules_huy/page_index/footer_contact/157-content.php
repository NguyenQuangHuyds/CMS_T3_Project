 <?php
  $url_host = 'http://' . $_SERVER['HTTP_HOST'];
  $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
  $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

  preg_match_all($pattern_uri, __DIR__, $matches);
  $url_path = $url_host . $matches[1][0];
  $url_path = str_replace('\\', '/', $url_path);
  ?>


 <div class="type-157">
   <footer id="footer">
     <div class="fpart-second">
       <div id="powered" class="clearfix">
         <div class="custom-text">
           <p>This is a CMS block edited from theme admin panel. You can insert any content (HTML, Text, Images) Here. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
         </div>
       </div>
     </div>
   </footer>
 </div>