<?php
session_start();
?>

<html>
    <head>
        <title>A00992565 Mathgame</title>
    </head>
    <body>
        <?php
        $operator = rand(0,1);
        $sign;
        $left = rand(0,20);
        $right = rand(0,20);
        $total =  $_SESSION["total"];
        $correct =  $_SESSION["correct"];
        if ($operator == 0){
            $answer = $left + $right;
            $sign = "+";
        }else {
            $answer = $left - $right;
            $sign = "-";
        }

        echo "the math: $left $sign $right";
        echo '<form method="post" action="validate.php">';
        echo '<input type="text" name="input" />';
        echo '<input type="submit" value="Check Answer" />';
        echo '</form>';
        echo "$correct / $total";

        ?>
    </body>
</html>