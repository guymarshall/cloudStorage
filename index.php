<!DOCTYPE html>
<html lang="en-UK">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Practice</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit" name="submit" id="submit">Upload</button>
    </form>
</body>
</html>

<?php
$files = scandir('uploads');
$table_columns = ['Filename', 'Filetype', 'Filesize'];
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
            <td><?php echo get_file_extension($file) ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

<?php
function get_file_extension($file) {
    return explode('.', $file);
}
?>