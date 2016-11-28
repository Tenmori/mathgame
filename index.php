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
        $leftop = $rand(0,20);
        $rightop = $rand(0,20);

        echo "the math: $leftop $operator $rightop = ??";
        ?>
    </body>
</html>