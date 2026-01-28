<?php
    // DataBase Connection
    include("../../database.php");
?>

<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
    foreach($_POST as $key => $value){
        echo "{$key} : {$value}";
    }
    if(empty($_POST)){
        echo "POST is Empty <br>";
    }
    

    $sql = "INSERT INTO users( fname, lname, password, email)
             VALUES ('$fname','$lname', '$password', '$email');";

    if (mysqli_query($conn, $sql)){
        echo "Sucessfully Registered! <br>";

        foreach($_POST as $key => $value){
            echo "{$key} : {$value} <br>";
        }

    }else{
        echo "Insertion Failed!";
    }
?>
