<?php
session_start();
$c = $_SESSION["counter"];
$p = $_SESSION["pointer"];
$temp = $_SESSION["answer"];

if($p == 0){
	echo "siguiente";
	$p++;
	$c++;
	$temp = $_SESSION["answer"];
	$get = $_POST["Q"];
	array_push($temp, $get);
	$_SESSION["pointer"] = $p;
	$_SESSION["counter"] = $c;
	$_SESSION["answer"] = $temp;
}else{
	if($c == 0){
		echo "modifica";
		$get = $_POST["Q"];
		$temp[0] = $get;
		$_SESSION["answer"] = $temp;
		$c++;
	}else{
		echo "anterior";
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
	<title>Pregunta #2</title>
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
					<a href="//" class="btn btn-danger"><i class="fa fa-power-off"></i> </a>
				</div>
			</div>
		</header>
		<div class="card">
			<div class="card-header text-center">
				<h4>
					
					<span class="badge badge-success">
						Pregunta #2
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_3.php">

			       
					
					<!--Pregunta 2-->
					<p>Tengo buen apetito</p>
					<input type="radio" value="true" name="Q">
					<label>verdadero</label>      <br>      
					<input type="radio" value="false" name="Q">
					<label>falso</label>
					<hr>

			     
            
        	  
					  <br><br>
					  <div class="text-center">
						<button type="submit" id="boton" class="btn btn-success">Siguiente</button>
					  </div>
					  </form>
			<form action="Form_1.php">
			<button type="submit" id="boton" class="btn btn-success">Anterior</button>
			</form>
				<br>
			</div>
			<div class="card-footer text-muted text-center">
				Lea con atención cada pregunta y responda <strong>Verdadero</strong> o <strong>Falso</strong> según corresponda.<br><br> Por favor, responda las preguntas con total honestidad.
			</div>
		</div>

	</div>
   
</body>

</html>