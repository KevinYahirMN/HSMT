<?php
session_start();
$c = $_SESSION["counter"];
$p = $_SESSION["pointer"];
$temp = $_SESSION["answer"];

if($p == 12){
	$p++;
	$c++;
	$get = $_POST["Q"];
	array_push($temp, $get);
	$_SESSION["pointer"] = $p;
	$_SESSION["counter"] = $c;
	$_SESSION["answer"] = $temp;
}else{	
	if($c == 12){
		$get = $_POST["Q"];
		$temp[12] = $get;
		$_SESSION["answer"] = $temp;
		$c++;
	}else{
		$c--;
	}
	$_SESSION["counter"] = $c;
}

?>

<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ITT residencia">
	<link rel="icon" href="media/ico.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Pregunta #14</title>
	<style>
		.btn-group.respuestas {
			margin: 0 auto;
			display: block;
			width: 100%;
			text-align: center;
		}
		
		.btn-group.respuestas .btn {
			min-width: 100px;
		}
		.banterior:hover{
			cursor:pointer;
		}
	</style>
</head>

<body>
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					
				</div>
				<div class="col-4 text-center">
					<img src="media/logo-big.png" class="img-fluid" style="max-height: 150px;">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a href="registro.php" id="exit_Button" onclick="return exit_Form()" class="btn btn-danger"><i class="fa fa-power-off"></i> </a>
				</div>
			</div>
		</header>
		<div class="card">
			<div class="card-header text-center">
				<h4>
					
					<span class="badge badge-success">
						Pregunta #14
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_15.php">

			       
					<!--Pregunta 14-->
					<p>Un joven de 24 años gasta bastante tiempo y dinero en diversiones, solo ha hecho
						ver que así no logrará al éxito en el trabajo. 
						Probablemente cambie sus costumbres si: </p>  
					<input type="radio" value="a" name="Q" onclick="enable()">
					<label>A) Sus hábitos nocturnos lesionan su salud.</label><br>
					<input type="radio" value="b" name="Q" onclick="enable()">
					<label>B) Sus amigos enfatizan el daño que se hace a sí mismo.</label><br>
					<input type="radio" value="c" name="Q" onclick="enable()">
					<label>C) Su jefe se da cuenta y lo previene.</label><br>
					<input type="radio" value="d" name="Q" onclick="enable()">
					<label>D) Se interesa en el desarrollo de alguna fase de su trabajo.</label>
					<hr>

			     
            
					<br><br>
					  <div class="text-center">
					    <button type="button" id="boton_atras" onClick="history.back();" class="btn btn-success">Anterior</button>
						<button type="submit" id="boton" disabled class="btn btn-success">Siguiente</button>
					  </div>

				<br>
			</div>
			<div class="card-footer text-muted text-center">
			Para cada uno de los problemas siguientes, se sugieren cuatro respuestas.<br><br>
			Seleccione una <strong>opción</strong> de los incisos mostrados según la <strong>solución</strong> que considere más acertada.
			</div>
		</div>

	</div>
   
</body>
<script type="text/javascript" src="js/function.js"></script>
</html>