<?php
session_start();
$c = $_SESSION["counter"];
$p = $_SESSION["pointer"];
$temp = $_SESSION["answer"];

if($p == 14){
	$p++;
	$c++;
	$get = $_POST["Q"];
	array_push($temp, $get);
	$_SESSION["pointer"] = $p;
	$_SESSION["counter"] = $c;
	$_SESSION["answer"] = $temp;
}else{	
	if($c == 14){
		$get = $_POST["Q"];
		$temp[14] = $get;
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
	<title>Pregunta #16</title>
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
						Pregunta #16
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_17.php">

			       
					<!--Pregunta 16-->
					<p>¿Qué definición de estas expresa más exactamente lo que es un reloj?</p>  
					<input type="radio" value="A" name="Q" onclick="enable()">
					<label><B>A)  Una cosa redonda que hace tic-tac</B></label><br>
					<input type="radio" value="B" name="Q" onclick="enable()">
					<label><B>B) Un aparato que se coloca en las torres</B></label><br>
					<input type="radio" value="C" name="Q" onclick="enable()">
					<label><B>C) Un instrumento redondo con una cadena</B></label><br>
					<input type="radio" value="D" name="Q" onclick="enable()">
					<label><B>D) Un instrumento que mide el tiempo</B></label><br>
					<input type="radio" value="E" name="Q" onclick="enable()">
					<label><B>E) Una cosa que tiene aguja y un cristal</B></label>
					<hr>

			     
            
        	  
					<br><br>
					  <div class="text-center">
					    <button type="button" id="boton_atras" onClick="history.back();" class="btn btn-success">Anterior</button>
						<button type="submit" id="boton" disabled class="btn btn-success">Siguiente</button>
					  </div>

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
