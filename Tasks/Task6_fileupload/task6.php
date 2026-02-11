<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task6.php" method="POST" enctype='multipart/form-data'>
        FileName:<br>
        <input type="text" name="filename"><br>
        <input type="file" name="file"><br>
        <input type="submit" placeholder="Submit"><br>
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $temppath = $_FILES['file']['tmp_name'];
        $name = $_POST['filename'];
        $extension = '.txt';
        
        $destpath = 'uploads/' . $name . $extension;
        if (move_uploaded_file($temppath, $destpath)){
            echo "File Uploaded Sucessfull at $destpath <br>" ;
            $pwd = getcwd();
            echo "<a href = 'download.php?file=\"". urlencode($destpath) ."\"'> <button> Download file </button> </a> ";

        }else{
            echo "something goes wrong";
        }
    }

?>