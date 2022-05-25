<?php

require 'page.php';

$content = '';

// without . and ..
$files = array_diff(scandir('../uploads'), ['..', '.']);
$table_columns = ['Filename', 'Filetype'];

$content .= '
<table style="border: 1px solid black; border-collapse: collapse;">
    <tr>';
    foreach ($table_columns as $column) {
        $content .= '<th>'.$column.'</th>';
    }
    $content .= '
    </tr>';
    if (isset($files)) {
        foreach ($files as $file) {
            $content .= '
                <tr>
                    <td>'.$file.'</td>
                    <td>'.pathinfo($file, PATHINFO_EXTENSION).'</td>
                </tr>
            ';
        }
    }
    $content .= '
</table>
';

$o_index_page = new Page();
$index_html = $o_index_page->create_page('Files', $content);
echo $index_html;