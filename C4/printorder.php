
<!-- 
    VARIABLES
    Variables are declared with $
    We can improve security by removing possbile html tags from inputs with "strip_tags" function
-->
<p>
<?php
    $drink = strip_tags($_GET["drink"]);
    $sugar = strip_tags($_GET["sugar"]);
?>

<?php
    if ($drink == "coffee") {
        echo "Coffee";
    } else {
        echo "Tea";
    }

    if ($sugar == 1) {
        echo " with sugar!";
    } else {
        echo " without sugar.";
    }
?>
</p>