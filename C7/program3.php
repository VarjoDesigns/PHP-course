<?php

// Your code here!

    function newvalue(&$str) {
        echo "String value: $str";
        $str = "New string";
        $return $str;
    }

//

    $str = "Default string\n";
    newvalue($str);
    echo "Value at the end: $str\n";

?>