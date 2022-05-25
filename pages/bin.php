<?php

require 'page.php';

$content = '';

$content .= 'This is the bin! Deleted files will eventually appear here once file deletion is implemented.';

$o_bin_page = new Page();
$bin_html = $o_bin_page->create_page('Bin', $content);
echo $bin_html;
