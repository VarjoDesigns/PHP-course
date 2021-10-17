<?php 
    $sender = strip_tags($_GET["name"]);
    $message = strip_tags($_GET["msg"]);
    
    if (!$sender || !$message) {
        echo "You didn't fill all fields!";
    } else {
        echo $sender . ": " . $message;
    }
?>