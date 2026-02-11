<?php
    $file = $_GET['file'];

    if (file_exists($file)){
        // 1. Set headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream'); // Forces download for most types
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        // 2. Clear output buffer to prevent file corruption
        flush(); 

        // 3. Read the file and write it to the output stream
        readfile($file);
        exit;   

    }else{
        echo "File Not Found";
    }
?>
