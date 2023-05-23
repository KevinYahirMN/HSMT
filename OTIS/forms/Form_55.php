<?php
session_start();
$c = $_SESSION["counter"];
$p = $_SESSION["pointer"];
$temp = $_SESSION["answer"];

if($p == 53){
	$p++;
	$c++;
	$get = $_POST["Q"];
	array_push($temp, $get);
	$_SESSION["pointer"] = $p;
	$_SESSION["counter"] = $c;
	$_SESSION["answer"] = $temp;
}else{	
	if($c == 53){
		$get = $_POST["Q"];
		$temp[53] = $get;
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
	<title>Pregunta #55</title>
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
						Pregunta #55
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_56.php">

			       
					<!--Pregunta 55-->
					<p>Hay un refrán que dice: "A hierro caliente, batir de repente", y esto significa:</p>  
					<input type="radio" value="A" name="Q" onclick="enable()">
					<label>A)  El hierro batido en frío es malo</label><br>
					<input type="radio" value="B" name="Q" onclick="enable()">
					<label>B) No se pueden hacer varias cosas al mismo tiempo</label><br>
					<input type="radio" value="C" name="Q" onclick="enable()">
					<label>C) Hay que saber aprovechar el momento oportuno</label><br>
					<input type="radio" value="D" name="Q" onclick="enable()">
					<label>D) Los herreros han de trabajar siempre de prisa</label><br>
					<input type="radio" value="E" name="Q" onclick="enable()">
					<label>E) El trabajo del hierro es cansado</label>
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
