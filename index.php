<?php
session_start();
?>

<html>
    <head>
        <title>A00992565 Mathgame</title>
        <link rel="stylesheet" href="bootstrap.min.css" media="screen" />
    </head>
    <body>
        <div class="container">
            <div class="col-sm-9 col-offset-3">
                <?php
                if (!isset($_SESSION["valid"]) || $_SESSION["valid"] != "true"){
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
                echo "<h1>Math Game</h1>";
                echo "$left $sign $right";
                echo '<form method="post" action="validate.php">';
                echo '<input type="text" name="input" />';
                echo '<br/><br/><input type="submit" value="Check Answer" class="btn btn-primary"/>';
                echo '</form>';
                echo "0$correct / 0$total";
                echo '<br /><br /><br />';
                echo '<form method="post" action="logout.php">';
                echo '<input type="submit" name="logout" value="Logout" class="btn btn-primary"/>';

                ?>
            </div>
        </div>
    </body>
</html>