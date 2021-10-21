<!--  Fill in the missing code -->
<?php

    $numbers = $_GET['numbers'];
    $numarray = explode(',',$numbers);

//

$points = "";
$sum = 0;
$rounds = 0;

foreach ($numarray as $value) {
	$points = $points . $value . " "; 
	$sum += $value;
	$rounds += 1;
}

$avg = $sum / $rounds;

//

    echo "The points were: $points\n";
    echo "The sum of points: $sum\n";
    echo "Average of points: $avg";
?>