<?php session_start(); ?>

<?php
    $input = $_POST["input"];
    

    if(!isset($_SESSION["correct"])){
        $_SESSION["correct"] = 0;
    }
    if (!isset($_SESSION["total"])){
        $_SESSION["total"] = 0;
    }

    if ($input == $_SESSION["answer"]){
        $_SESSION["correct"] = $_SESSION["correct"] + 1;
        $_SESSION["total"] = $_SESSION["total"] + 1;
        header("Location: index.php");
    }else {
        $_SESSION["total"] = $_SESSION["total"] + 1;
        header("Location: index.php");
    }
?>