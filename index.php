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
    // get files list
    $files = [
        0 => [
            'filename' => 'tree',
            'filetype' => '.jpg',
            'filesize' => '243KB'
        ],
        1 => [
            'filename' => 'backup',
            'filetype' => '.zip',
            'filesize' => '24MB'
        ]
    ];
    // iterate through and generate a table, one row for each file
    $table_columns = ['filename', 'filetype', 'filesize'];
?>
<table style="border: 1px solid black; border-collapse: collapse;">
    <tr>
        <th>Filename</th>
        <th>Filetype</th>
        <th>Filesize</th>
    </tr>
    <?php if (isset($files)): ?>
        <?php foreach ($files as $file): ?>
        <tr>
            <td><?php echo $file['filename']; ?></td>
            <td><?php echo $file['filetype']; ?></td>
            <td><?php echo $file['filesize']; ?></td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>