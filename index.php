<html>

    <head>
        <<title></title>
    </head>

    <body>
        <?php
        $operarors = array( '+', '-', '*' );
        $operator = $operarors[rand(0,2)];
        $leftop = rand(0,20);
        $rightop = $rand(0,20);

        echo "the math: $leftop $operator $rightop = ??";
        ?>

    </body>
</html>