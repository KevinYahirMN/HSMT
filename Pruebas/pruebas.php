<?php

session_start();
$answer = $_SESSION['answer'];

$respuesta = $_POST['Q'];

for($i = 1; $i < 31; $i++){
   //array_push($answer, $respuesta[$i]);
}

//Ruta a pruebas ../../Pruebas/pruebas.php
//$answer = $_POST['Q'];

foreach ($answer as $key => $value) {
   echo $value."<br>";
}

/*
function scale_L($answer){
   $this->calif_False($answer);
   return $this->c;
}
*/
?>