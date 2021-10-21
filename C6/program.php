<!--  Fill in the missing code -->
<?php

$text = 'Special characters marked with a backslash (\) can be used inside quotation marks (" and "). '; 
$count = 3;
$animal = "cat";
$a = [9,7,5];

//

$output = implode(",",$a);
echo $text;
echo "I bought $count {$animal}s.\n";
echo "Array content: $output";

?>