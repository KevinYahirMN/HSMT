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
					<p>Se le ha asignado un puesto en una gran empresa. 
                    La mejor forma de establecer relaciones amistosas y cordiales con sus nuevos compañeros será:</p>  
					<input type="radio" value="a" name="Q" onclick="enable()">
					<label>A) Evitando tomar nota de los errores en que incurran. </label><br>
					<input type="radio" value="b" name="Q" onclick="enable()">
					<label>B) Hablando bien de ellos al jefe.</label><br>
					<input type="radio" value="c" name="Q" onclick="enable()">
					<label>C) Mostrando interés en el trabajo de ellos.</label><br>
					<input type="radio" value="d" name="Q" onclick="enable()">
					<label>D) Pidiéndoles les permitan hacer los trabajos que usted puede hacer mejor.</label>
					<hr>				

							
					  <br><br>
					  <div class="text-center">
					  
						<button type="submit" id="boton" disabled class="btn btn-success">Siguiente</button>
					  </div>
				</form>
				
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
