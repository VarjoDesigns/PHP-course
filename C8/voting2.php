<?php
    $file = "results.txt";
	$nominee = $_GET["nominee"];

// load file as array
    $contents = file($file);

// read the votes for the line that was voted
    $interest = $contents[$nominee-1];
    $split = explode("|",$interest);
    $currentvote = $split[1];

// add a vote
    $newvote = $currentvote + 1;

// create new line
    $newline = $nominee ."|" . $newvote;
    
// replace line
    $contents[$nominee-1] = $newline;

// Implode + save
    file_put_contents($file, implode('',$contents));


// count total
    $sum = 0;
    foreach ($contents as $row) {
        $count = explode("|",$row);
        $sum = $sum + $count[1];
    }
    echo "Total votes: $sum.";
?>