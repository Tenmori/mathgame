<?php session_start(); ?>

<?php
    $input = $_POST["input"];
    $answer = $_SESSION["$answer"];

    if(!isset($_SESSION["correct"])){
        $_SESSION["correct"] = 0;
    }
    if (!isset($_SESSION["total"])){
        $_SESSION["total"] = 0;
    }

    if ($input == $answer){
        $correct = $correct + 1;
        $total = $total + 1;
        header("Location: index.php");
    }else {
        $total = $total + 1;
        header("Location: index.php");
    }
?>