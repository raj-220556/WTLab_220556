<?php
    $db_hostname = "localhost";
    $db_user = "root";
    $db_database = "sudoschool";
    $db_password = "";

    $conn = mysqli_connect($db_hostname, $db_user,$db_password, $db_database);

    if(!$conn){
        echo "Data Base Connection Failed <br>";
    }else{
        echo "DataBase Connected Sucessfully <br>";
    }
?>