<?php session_start(); ?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap.min.css" media="screen" />
    </head>
    <body>
        <div class="container">
            <h1 class="col-sm-9 col-sm-offset-3">Please Login To Play</h1>
            <div class="col-sm-9 col-sm-offset-3">
                <form method="post" action="loginValidate.php">
                    <input type="text" id="email" name="email" placeholder="Email" />
                    <input type="password" id="password" name="password" placeholder="Password" />
                    <input type="submit" name ="submit" value="login" class="btn btn-primary"/>
                </form>
            </div>
            <?php
                echo $_SESSION["failValidate"];
            ?>
        </div>
    </body>
</html>
