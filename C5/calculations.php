<?php
    $num1 = (int) strip_tags($_GET["num1"]);
    $num2 = (int) strip_tags($_GET["num2"]);

    echo "Product: " . $num1 * $num2 . "<br />";
    if ($num2 == 0) {
        echo "Quotient: can't divide by zero";
    } else {
        echo "Quotient: " . $num1 / $num2;
    }
?>