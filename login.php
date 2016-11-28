<?php session_start(); ?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Please Login To Play</h1>
        <form method="post" action="loginValidate.php">
            <input type="text" id="email" name="email" placeholder="Email" />
            <input type="password" id="password" name="password" placeholder="Password" />
            <input type="submit" value="login" />
        </form>

        <?php
            echo $_SESSION["failValidate"];
        ?>
    </body>
</html>
