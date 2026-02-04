<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="string_function.php" method="POST">
        Name:<br>
        <input type = "text" name="name" > <br>

        <input type = "submit">
    </form>
    
</body>
</html>

<?php

    if(!empty($_POST["name"])){
        $name = $_POST['name'];
        echo "<h1>Performing String Functions</h1>";

        echo "<h2> Basic String functions </h2>";
        echo "String: '$name' <br>";
        echo "Length: " . strlen($name) . "<br>";
        echo "Word Count: " . str_word_count($name) . "<br>";
        echo "Reverse String: " . strrev($name) . "<br>";

        echo "<h2> Case Conversion </h2>";
        echo "Uppercase: " . strtoupper($name) . "<br>";
        echo "Lowercase: " . strtolower($name) . "<br>";
        echo "ucfirst: " . ucfirst($name) . "<br>";
        echo "ucwords: " . ucwords($name) . "<br>";
        
        echo "<h2> Search & Replace </h2>";
        echo "strpos(a): " . strpos($name,"a") . "<br>";
        echo "str_replace('a','A'): " . str_replace('a','A', $name) . "<br>";

        echo "<h2> Substring & Trimming </h2>";
        echo "substring: " . substr($name, 0,5) . "<br>";
        echo "trim: " . trim($name) . "<br>";
        echo "ltrim: " . ltrim($name) . "<br>";
        echo "rtrim: " . rtrim($name) . "<br>";
        
        echo "<h2> String Comparision </h2>";
        echo "strcmp: " . strcmp($name, 'hi') . "<br>";
        echo "strcasecmp: " . strcasecmp($name, "hi") . "<br>";

        echo "<h2> Special Characters & Security </h2>";
        echo "htmlspecialchars: " . htmlspecialchars($name) . "<br>";
        echo "addslashes: " . addslashes($name) . "<br>";


    }else{
        echo "Enter the Name... <br>";
    }


?>
r