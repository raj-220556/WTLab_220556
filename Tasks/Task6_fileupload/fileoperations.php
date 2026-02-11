<?php
    $filename = 'uploads/test.txt';
    $f = fopen($filename, 'a+');

    // r
    // w
    // a
    // x
    // r+
    // w+
    // a+
    // x+

    if($f){
        // $text = fread($f, filesize($filename));
        // fseek($f, 0, SEEK_END);
        // echo $text . "<br>";

        $data = "\nThis is extra data into the file";
        // fwrite($f,$data);

        // rewind($f);  // cursor to top position
        // clearstatcache();
        // $text2 = fread($f, filesize($filename));

        // echo $text2 . "<br>";

        // echo file_get_contents($filename);
        // echo file_put_contents($filename, $data);
        // echo file_get_contents($filename);  //overwrites
        // print_r(file($filename));
        // echo file_exists($filename);
        // echo filesize($filename);
        // echo filetype($filename);  //file
        // echo filetype("uploads");  //dir
        // echo fileatime($filename); // Access time (Fro 1970)
        // echo filemtime($filename); // Modification time
        // echo filectime($filename);
        // echo fileperms($filename);
        // echo fileowner($filename);  //uid
        // echo filegroup($filename);  //gid
        // echo fileinode($filename);


        // copy($filename, "new.txt");
        // rename('new.txt',"new2.txt");
        // unlink("new2.txt");  //deletes file
        // mkdir("newdir");
        // rmdir("newdir");
        // echo is_file($filename);
        // echo is_dir("uploads);

        // echo scandir("uploads");
        // $dir=opendir("uploads");
        // $data=readdir($dir);
        // closedir($dir);
        // echo getcwd();
        // flock($filename);


    }else{
        echo "File Error";
    }
    fclose($f);
?>
