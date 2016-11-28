<?php
session_start();
?>

<html>
    <head>
        <title>A00992565 Mathgame</title>
    </head>
    <body>
        <?php
        if (!isset($_SESSON["valid"]) || $_SESSION["valid"] != "true"){
            header("Location: login.php");
            die();
        }
        $operator = rand(0,1);
        $sign;
        $left = rand(0,20);
        $right = rand(0,20);
        $total =  $_SESSION["total"];
        $correct =  $_SESSION["correct"];
        if ($operator == 0){
            $_SESSION["answer"] = $left + $right;
            $sign = "+";
        }else {
            $_SESSION["answer"] = $left - $right;
            $sign = "-";
        }

        echo "$left $sign $right";
        echo '<form method="post" action="validate.php">';
        echo '<input type="text" name="input" />';
        echo '<input type="submit" value="Check Answer" />';
        echo '</form>';
        echo "0$correct / 0$total";
        echo '<br /><br /><br />';
        echo '<form method="post" action="logout.php">';
        echo '<input type="submit" name="logout" />';

        ?>
    </body>
</html>