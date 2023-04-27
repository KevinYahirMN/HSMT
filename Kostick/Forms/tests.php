<?php
session_start();
//se reciben los datos del registro de usuario a través de un post y se guardan en una variable de sesión para utilizarlas al generar el reporte
if(isset($_POST['button_submit'])){
    $name1=$_POST['name1'];
	$name2=$_POST['name2'];
	$name3=$_POST['name3'];
	$gender=$_POST['gender'];
	$inputAddress=$_POST['inputAddress'];
	$interior=$_POST['interior'];
	$city=$_POST['city'];
	$inputState=$_POST['inputState'];
	$zip=$_POST['zip'];
	$bday=$_POST['bday'];
    $_SESSION['name1']=$name1;
	$_SESSION['name2']=$name2;
	$_SESSION['name3']=$name3;
	$_SESSION['gender']=$gender;
	$_SESSION['inputAddress']=$inputAddress;
	$_SESSION['interior']=$interior;
	$_SESSION['city']=$city;
	$_SESSION['inputState']=$inputState;
	$_SESSION['zip']=$zip;
	$_SESSION['bday']=$bday;
}
//Se evalua la selección del examen en el registro y se redirige según la opción seleccionada
if(isset($_POST['test'])){
	$selection = $_POST['test'];
	header('Location: '.$selection);
	exit();
}
?>