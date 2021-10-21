<?php
	$vote = $_GET["nominee"];

// connect
    $myfile = "results.txt";

// read line
    $lines = file($myfile);
    $interest = $lines[$vote-1];
    echo $interest . "\n";

// extract current votes
    $split = explode("|",$interest);
    $currentvote = $split[1];

// add a vote
    $newvote = $currentvote + 1;
    echo $newvote . "\n";

// create new line
    $newline = $vote ."|" . $newvote;
    echo $newline;

// replace line in file

// print total votes
?>