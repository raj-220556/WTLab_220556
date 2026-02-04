<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['username'])){
            echo "Enter Username";
        }
        if(empty($_POST['password'])){
            echo "Enter Password";
        }
    }
?>