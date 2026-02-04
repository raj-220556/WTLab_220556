<?php
    echo "Demonstration of Data type <br>";

    $food = "pizza";
    $age = 18;
    $prize = 2.5;
    $avaliable = TRUE;

    $items_prize = array("pizza" => 2.5, "dosa" => 1.5, "idly" => 1);
    // print_r($items_prize);   

    echo var_dump($food) . "<br>";
    echo var_dump($age) . "<br>";
    echo var_dump($prize) . "<br>";
    echo var_dump($avaliable) . "<br>";
    echo var_dump($items_prize) . "<br>";



    // Local Scope
    function totalprize($f, int $qunatity){
        static $count = 0; // local variable
        global $items_prize;  // using global variable
        $prize = $items_prize[$f]; // here $prize is local variable

        global $total;  // Declaring local variable as global variable
        $total = $prize * $qunatity;
        $count++;

        return $count;
    }

    totalprize($food, 4);
    totalprize($food, 4);
    totalprize($food, 4);
    $fcount = totalprize($food, 4);
    echo $total . "<br>"; // global variable from function
    echo $fcount;

    
?>
