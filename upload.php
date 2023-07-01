<?php
if(isset($_POST['submit_img'])){
    $file = $_FILES['file'];

    $filename = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileEXT = explode();

}