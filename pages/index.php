<?php

require 'page.php';

$content = '';

$content .= '
<p>
    FILES SHOULD APPEAR HERE
</p>';

$o_index_page = new Page();
$index_html = $o_index_page->create_page('Files', $content);
echo $index_html;