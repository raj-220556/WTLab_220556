<?php
    // DataBase Connection
    include("../../database.php");
?>

<?php

    // Form Input Validation
    $flag = 1;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST["username"])){
            $flag = 0;
            die("Enter Username!! <br>");
        }
        if(empty($_POST["name"])){
            $flag = 0;
            die("Enter Name!! <br>");            
        }
        if(empty($_POST["email"])){
            $flag = 0;
            die("Enter Email!! <br>");            
        }
        if(empty($_POST["password"])){
            $flag = 0;
            die("Enter PAssword!! <br>");            
        }

        if($flag){
            $username = trim(strtolower($_POST["username"]));
            $name = trim(ucwords(strtolower($_POST["name"])));
            $email = $_POST["email"];
            $password = $_POST["password"];

            if(strlen($password) < 8){
                die("Password Must conatin greather than 8 characters..");
            }
            if(!strpos($email, '@')){
                die("Enter a valid email");
            }
            
            $sql = "INSERT INTO users( username, name, password, email)
             VALUES ('$username','$name', '$password', '$email');";


        }

    }
    
    echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
    foreach($_POST as $key => $value){
        echo "{$key} : {$value}";
    }
    if(empty($_POST)){
        echo "POST is Empty <br>";
    }
    


    if (mysqli_query($conn, $sql)){
        echo "Sucessfully Registered! <br>";

        foreach($_POST as $key => $value){
            echo "{$key} : {$value} <br>";
        }

    }else{
        echo "Insertion Failed!";
    }
?>
