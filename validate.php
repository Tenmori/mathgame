<?php session_start(); ?>

<?php
    $input = $_POST["input"];
    $answer = $_SESSION["$answer"];

    if ($input == $answer){
        $correct = $correct + 1;
        $total = $total + 1;
        header("Location: index.php");
    }else {
        $total = $total + 1;
        header("Location: index.php");
    }
?>