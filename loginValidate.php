<?php session_start(); ?>

<?php
$_SESSION["message"] = "";
    if(isset($_POST["submit"])) {
        if ($_POST["password"] != "aaa" || $_POST["email"] != "a@a.a"){
            $_SESSION["message"] = "Invalid login";
            header("Location: login.php");
            die();
        }
    }else {
        $_SESSION["valid"] = true;
        header("Location: index.php");
        die();
    }
?>