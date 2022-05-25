<?php

require 'page.php';

$content = '';

$content .= '
<form action="upload_controller.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file" id="file">
  <button type="submit" name="submit" id="submit">Upload</button>
</form>';


$o_upload_page = new Page();
$upload_html = $o_upload_page->create_page('Upload', $content);
echo $upload_html;