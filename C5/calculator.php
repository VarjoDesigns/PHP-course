<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    // Probably good to use Case here?

    if (!$num1 || !$num2) {
        echo "You didn't input both numbers!";
    } else {
        $add = $num1 + $num2;
        $subtract = $num1 - $num2;
        $multiply = $num1 * $num2;
        $divide = $num1 / $num2;

        switch ($operator) {
            case 1:
                echo $num1 . " + " . $num2 . " = " . $add;
                break;
            case 2:
                echo $num1 . " - " . $num2 . " = " . $subtract;
                break;
            case 3:
                echo $num1 . " * " . $num2 . " = " . $multiply;
                break;
            case 4:
                echo $num1 . " / " . $num2 . " = " . $divide;
                break;
            default:
                echo "error";
                    break;
        }
    } 
?>

<?php
    $number = 5;
    $variable = 3 * 4 + 8 / 2 + $number++;
    echo $variable;
?>