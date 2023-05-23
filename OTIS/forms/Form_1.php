<?php
session_start();
//REVISAR CODIGO
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION["pointer"] = 0;
$_SESSION["counter"] = 0;
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
	<title>Pregunta #1 </title>
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
						Pregunta #1
					</span>
				</h4>
			</div>
			<div class="card-body">
			

				<form method="post" action="Form_2.php">
					<!--Pregunta 1-->            
					<p>¿Qué expresa mejor qué es un martillo?</p>  
					<input type="radio" value="A" name="Q" onclick="enable()">
					<label>A) Cosa</label><br>
					<input type="radio" value="B" name="Q" onclick="enable()">
					<label>B) Mueble</label><br>
					<input type="radio" value="C" name="Q" onclick="enable()">
					<label>C) Arma</label><br>
					<input type="radio" value="D" name="Q" onclick="enable()">
					<label>D) Herramienta</label><br>
					<input type="radio" value="E" name="Q" onclick="enable()">
					<label>E) Máquina</label>
					<hr>				

							
					  <br><br>
					  <div class="text-center">
					  
						<button type="submit" id="boton" disabled class="btn btn-success">Siguiente</button>
					  </div>
				</form>
				
				<br>
			</div>
			<div class="card-footer text-muted text-center">
			Favor de responder las siguientes preguntas de manera correcta.<br><br>
			Seleccione una <strong>opción</strong> de los incisos mostrados o escriba en el <strong>recuadro</strong> según se le indique.
			</div>
		</div>

	</div>
   
</body>
<script type="text/javascript" src="js/function.js"></script>
</html>
