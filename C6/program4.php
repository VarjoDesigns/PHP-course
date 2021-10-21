<!--  Fill in the missing code -->
<?php

    $numbers = $_GET['numbers'];
    $arr = explode(',',$numbers);

    echo "Order in the beginning: $numbers\n";


$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    for ($j = $i + 1; $j < $count; $j++) {
        if ($arr[$i] < $arr[$j]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}

$greatest_lowest = $arr[0];
for ($i = 1; $i < $count; $i++) {
	$greatest_lowest = $greatest_lowest . "," . $arr[$i]; 
}

$lowest_greatest = $arr[$count-1];
for ($i = 1; $i < $count; $i++) {
	$lowest_greatest = $lowest_greatest . "," . $arr[$count-$i-1]; 
}

echo "From greatest to lowest: $greatest_lowest\n";
echo "From lowest to greatest: $lowest_greatest\n";

?>