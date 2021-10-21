<!--

Your task is to write a PHP script, which reads grades from the file grades.txt, 
raises all of them by one, writes the raised grades into the file results.txt, 
and finally prints the raised grades from the file results.txt.

If a grade is 5, it won't be raised. In grades.txt, each grade is on its own line,
and the amount of grades may vary. Each grade is 0-5. The grades have to be
 written on their own lines to results.txt as well.

-->

<?php
	// READ
	
    echo "New grades: \n";
	$myfile = fopen("grades.txt", "r") or die("Unable to open file!");
    while ($line = fgets($myfile)){
		
	// MODIFY
		$temp = $line +1 . "\n"; 
		if ($temp == 6) {$temp = 5 . "\n";}
		$list = $list . $temp;
    }

    fclose($myfile);

	// WRITE

echo $list;

    $ref = fopen("results.txt",'w');
    $wfile = fwrite($ref, $list);
    fclose($ref);
?>