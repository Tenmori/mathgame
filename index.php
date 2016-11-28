<?php
session_start();
?>

<html>
    <head>
        <title>A00992565 Mathgame</title>
    </head>
    <body>
        <?php
        $operarors = array( '+', '-');
        $operator = $operarors[rand(0,1)];
        $left = rand(0,20);
        $right = rand(0,20);

        echo "the math: $left $operator $right";
        echo "<form>";
        echo '<input type="text" name="answer" />';
        echo '<input type="submit" value="Check Answer" />';
        ?>
    </body>
</html>