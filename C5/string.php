<?php
    $str1 = trim($_GET["string1"]);
    $str2 = trim($_GET["string2"]);
    $length = strlen($str1) + strlen($str2);

    if (!$str1 ||!$str2) {
        echo "You didn't give both strings!";
    } else {
        echo 'The passed strings were "' . $str1 . '" and "'  . $str2 . '". Their combined length is ' . $length . " characters!";
    }
    
?>