<?php
session_start();
if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == ''){
    header("Location: index.html");
    die();
}
?>

<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ITT residencia">
	<link rel="icon" href="ico.ico">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Menú de opciones</title>
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
					<img src="logo-big.png" class="img-fluid" style="max-height: 150px;">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a href="salir.php" class="btn btn-danger">Salir </a> 
				</div>
			</div>
		</header>
		<div class="card">
			<div class="card-header text-center">
				<h4>
					
					
						<p ><b>Bienvenido de nuevo</b></p>
					
				</h4>
			</div>
			<div class="card-body">
              
			<div class="wrapper">
	<ul>
		<li class="lista1"><a href="http://en.wikipedia.org/wiki/Rugby_football" style="text-decoration:none">Haga click aquí para acceder a los resultados de test previamente realizados</a></li>
		<li class="lista2"><a href="http://en.wikipedia.org/wiki/Rugby_football" style="text-decoration:none">Presione aquí para realizar una prueba desde 0. Se le pedirá que coloque la información del aplicante</a></li>
		
	</ul>
</div>
			    
		


			
					
					 
				
				<br>
			</div>
			<div class="card-footer text-muted text-center">
			<b>	Seleccione la acción que desea realizar a continuación</b>
			</div>
		</div>

	</div>
   
</body>

</html>