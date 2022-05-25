<?php

require "defines.php";

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_temporary_name = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_type = $file['type'];

    $file_extension = explode('.', $file_name);
    $file_actual_extension = strtolower(end($file_extension));

    $file_size_limit = 1000*KB;

    $allowed_extensions = ['jpg', 'jpeg', 'png'];

    if (in_array($file_actual_extension, $allowed_extensions)) {
        if ($file_error === 0) {
            if ($file_size < $file_size_limit) {
                $file_name_new = uniqid('', true).'.'.$file_actual_extension;
                $file_destination = '../uploads/'.$file_name_new;
                move_uploaded_file($file_temporary_name, $file_destination);
                header('Location: index.php?uploadsuccess');
            } else {
                echo 'Your file is larger than '.$file_size_limit.'bytes!';
            }
        } else {
            echo 'There was an error uploading your file!';
        }
    } else {
        echo 'You cannot upload '.$file_actual_extension.' files';
    }
}