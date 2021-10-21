<?php
	$first = $_GET['first'];
	$second = $_GET['second'];
	$third = $_GET['third'];

    //
	
    function greatest($first, $second, $third) {
        if ($first > $second) {
            $result = $first;
        } else {
            $result = $second;
        }

        if ($result < $third) {
            $result = $third;
        } 

        return $result;
    }

    function lowest($first, $second, $third) {

        if ($first < $second) {
            $result = $first;
        } else {
            $result = $second;
        }

        if ($result > $third) {
            $result = $third;
        }  

        return $result;
    }


    //

    $greatest_num = greatest($first, $second, $third);
    $lowest_num = lowest($first, $second, $third);

    echo "out of the given numbers, the greatest was $greatest_num";
    echo " and the lowest $lowest_num ";
?>