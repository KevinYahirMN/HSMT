<?php
session_start();
$temp = $_SESSION["answer"];
$get = $_POST["Q"];

array_push($temp, $get);

foreach ($temp as $key => $value){
    echo $value."<br>";
}

$_SESSION["answer"] = array();
$_POST["Q"] = 0;
$_SESSION["counter"] = 0;
$_SESSION["pointer"] = 0;
?>