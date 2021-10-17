<?php
    $num = $_GET["num"];

    if ($num % 2 == 0) {
        echo $num . " is even.";
    } elseif ($num <= 0) {
        echo "The input value is invalid!";
    } else {
        echo $num . " is odd.";
    }
?>