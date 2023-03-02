<?php

session_start();

$respuesta = $_POST['Q'];
$answer = $_SESSION['answer'];

for($i = 0; $i < 2; $i++){
   array_push($answer, $respuesta[$i]);
}

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