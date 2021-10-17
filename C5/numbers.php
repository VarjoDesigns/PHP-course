<?php
    $num = $_GET["num"];
    if ($num >= 0) {
        $i = $num;
        while ($i >= 0) {
            echo $i;
            $i--;
        }
    } else {
        echo "The number has to be at least zero!";
    }
?>