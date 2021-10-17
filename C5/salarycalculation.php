<?php
    $hours = $_GET["hours"];
    $hourlypay = $_GET["hourlypay"];
    $taxperc = $_GET["taxperc"];

    if (!$hours || !$hourlypay || !$taxperc) {
        echo "Not all fields filled!";
    } else {
        $gross = $hours * $hourlypay;
        $taxes = $gross * $taxperc / 100;
        $netpay = $gross - $taxes;
        
        echo "Salary without taxes: " . $gross;
        echo "Amount of tax: " . $taxes;
        echo "Salary after taxes: " . $netpay;
    }
?>