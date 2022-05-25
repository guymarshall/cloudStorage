<?php
// without . and ..
$files = array_diff(scandir('uploads'), ['..', '.']);
$table_columns = ['Filename', 'Filetype'];
?>
<table style="border: 1px solid black; border-collapse: collapse;">
    <tr>
        <?php foreach ($table_columns as $column): ?>
            <th><?php echo $column ?></th>
        <?php endforeach; ?>
    </tr>
    <?php if (isset($files)): ?>
        <?php foreach ($files as $file): ?>
        <tr>
            <td><?php echo $file; ?></td>
            <td><?php echo pathinfo($file, PATHINFO_EXTENSION) ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>