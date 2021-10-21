<?php

$string = $_GET["string"];
$mode = $_GET["mode"];

switch ($mode) {
	case 1:
		// spaced lowercase
        $temp = str_split($string);
        $temp = strtolower(implode(' ',$temp));
        echo $temp;
		break;
	case 2:
		// spaced uppercase
        $temp = str_split($string);
        $temp = strtoupper(implode(' ',$temp));
        echo $temp;
		break;
	case 3:
		// reversed lowercase
        echo strrev(strtolower($string));
		break;
	case 4:
		// reversed uppercase
        echo strrev(strtoupper($string));
		break;
	default:
		echo "error";
		break;
}

?>