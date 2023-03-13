<?php
session_start();
$answer = $_SESSION['answer'];

$postanswer = $_POST['Q'];

for($i = 1; $i < 32; $i++){
   array_push($answer, $postanswer[$i]);
}

$_SESSION['answer'] = $answer;
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
	<title>Preguntas 516-546</title>
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
					<a href="//" class="btn btn-danger"><i class="fa fa-power-off"></i> </a>
				</div>
			</div>
		</header>
		<div class="card">
			<div class="card-header text-center">
				<h4>
					
					<span class="badge badge-success">
						Preguntas 516-546
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_547-567.php">

             <!--Pregunta 516-->
             <p> Mi vida es vacía y sin sentido</p>
             <input type="radio" id="true" name="Q[1]">
             <label>verdadero</label> <br>
             <input type="radio" id="false" name="Q[1]">
             <label>falso</label>
             <hr>


			 <!--Pregunta 517-->
			 <p> Me cuesta conservar un trabajo</p>
			 <input type="radio" id="true" name="Q[2]">
			 <label>verdadero</label><br>
			 <input type="radio" id="false" name="Q[2]">
			 <label>falso</label>
			 <hr>

             <!--Pregunta 518-->
             <p>Cometí muchos errores en mi vida.</p>
             <input type="radio" id="true" name="Q[3]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[3]">
             <label>falso</label>
             <hr>

             <!--Pregunta 519-->
             <p>Me enojo conmigo mismo por ser tan generoso con los demás</p>
             <input type="radio" id="true" name="Q[4]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[4]">
             <label>falso</label>
             <hr>

             <!--Pregunta 520-->
             <p> Últimamente he pensado mucho en quitarme la vida.</p>
             <input type="radio" id="true" name="Q[5]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[5]">
             <label>falso</label>
             <hr>

             <!--Pregunta 521-->
             <p>Me agrada ayudar a los demás</p>
             <input type="radio" id="true" name="Q[6]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[6]">
             <label>falso</label>
             <hr>

             <!--Pregunta 522-->
             <p>Aunque me quedara sin familia siempre hay alguien que puede ayudarme.</p>
             <input type="radio" id="true" name="Q[7]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[7]">
             <label>falso</label>
             <hr>

             <!--Pregunta 523-->
             <p>Me disgusta tener que hacer colas en cines teatros o restaurantes</p>
             <input type="radio" id="true" name="Q[8]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[8]">
             <label>falso</label>
             <hr>

             <!--Pregunta 524-->
             <p> Nadie sabe que intenté suicidarme</p>
             <input type="radio" id="true" name="Q[9]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[9]">
             <label>falso</label>
             <hr>

             <!--Pregunta 525-->
             <p> Todo pasa muy rápido a mi alrededor</p>
             <input type="radio" id="true" name="Q[10]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[10]">
             <label>falso</label>
             <hr>

             <!--Pregunta 526-->
             <p> Sé que le resulto "pesado" a la gente</p>
             <input type="radio" id="true" name="Q[11]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[11]">
             <label>falso</label>
             <hr>

             <!--Pregunta 527-->
             <p> Después de un mal dia, necesito tomar unos tragos para poder relajarme.</p>
             <input type="radio" id="true" name="Q[12]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[12]">
             <label>falso</label>
             <hr>

             <!--Pregunta 528-->
             <p>Muchos de mis problemas se deben a mi mala suerte.</p>
             <input type="radio" id="true" name="Q[13]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[13]">
             <label>falso</label>
             <hr>

             <!--Pregunta 529-->
             <p>A veces me resulta dificil dejar de hablar</p>
             <input type="radio" id="true" name="Q[14]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[14]">
             <label>falso</label>
             <hr>

             <!--Pregunta 530-->
             <p>A veces me hago daño a mi mismo sin saber por qué.</p>
             <input type="radio" id="true" name="Q[15]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[15]">
             <label>falso</label>
             <hr>

             <!--Pregunta 531-->
             <p> Trabajo muchas horas sin que ello sea necesario</p>
             <input type="radio" id="true" name="Q[16]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[16]">
             <label>falso</label>
             <hr>

             <!--Pregunta 532-->
             <p>Generalmente me siento mejor después de llorar</p>
             <input type="radio" id="true" name="Q[17]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[17]">
             <label>falso</label>
             <hr>

             <!--Pregunta 533-->
             <p> Me olvido donde dejo las cosas</p>
             <input type="radio" id="true" name="Q[18]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[18]">
             <label>falso</label>
             <hr>

             <!--Pregunta 534-->
             <p>Si volviera a nacer haría las cosas de la misma manera.</p>
             <input type="radio" id="true" name="Q[19]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[19]">
             <label>falso</label>
             <hr>

             <!--Pregunta 535-->
             <p>Me pone de mal humor que la gente con la que trabajo no haga las cosas a tiempo.</p>
             <input type="radio" id="true" name="Q[20]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[20]">
             <label>falso</label>
             <hr>

             <!--Pregunta 536-->
             <p>Cuando estoy enojado me duele la cabeza</p>
             <input type="radio" id="true" name="Q[21]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[21]">
             <label>falso</label>
             <hr>
  
             <!--Pregunta 537-->
             <p>Me gusta manejar autos viejos</p>
             <input type="radio" id="true" name="Q[22]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[22]">
             <label>falso</label>
             <hr>         
                              
             <!--Pregunta 538-->
             <p>Muchos hombres son infieles a sus parejas.</p>
             <input type="radio" id="true" name="Q[23]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[23]">
             <label>falso</label>
             <hr>

             <!--Pregunta 539-->
             <p>Últimamente perdí las ganas de preocuparme de mis problemas</p>
             <input type="radio" id="true" name="Q[24]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[24]">
             <label>falso</label>
             <hr>

             <!--Pregunta 540-->
             <p>Hubo ocasiones en las que me enojé y romp cosas por haber bebido mucho</p>
             <input type="radio" id="true" name="Q[25]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[25]">
             <label>falso</label>
             <hr>

             <!--Pregunta 541-->
             <p> Trabajo mejor cuando tengo plazos bien definidos</p>
             <input type="radio" id="true" name="Q[26]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[26]">
             <label>falso</label>
             <hr>

             <!--Pregunta 542-->
             <p>He llegado a enfurecerme tanto con alguien que crei que iba a estallar</p>
             <input type="radio" id="true" name="Q[27]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[27]">
             <label>falso</label>
             <hr>

             <!--Pregunta 543-->
             <p> A veces tengo malos pensamientos sobre mi familia.</p>
             <input type="radio" id="true" name="Q[28]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[28]">
             <label>falso</label>
             <hr>

             <!--Pregunta 544-->
             <p> La gente me dice que tengo problemas con el alcohol, pero yo no estoy de acuerdo</p>
             <input type="radio" id="true" name="Q[29]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[29]">
             <label>falso</label>
             <hr>

             <!--Pregunta 545-->
             <p> Tengo poco tiempo para poder hacer las cosas que debo</p>
             <input type="radio" id="true" name="Q[30]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[30]">
             <label>falso</label>
             <hr>

             <!--Pregunta 546-->
             <p>Últimamente, pienso mucho en la muerte y "el más allá"</p>
             <input type="radio" id="true" name="Q[31]">
             <label>verdadero</label><br>
             <input type="radio" id="false" name="Q[31]">
             <label>falso</label>
             <hr>
                
	
					  <br><br>
					  <div class="text-center">
						<button type="submit" id="boton" class="btn btn-success">Siguiente</button>
					  </div>

				<br>
			</div>
			<div class="card-footer text-muted text-center">
				Lea con atención cada pregunta y responda <strong>Verdadero</strong> o <strong>Falso</strong> según corresponda.<br><br> Por favor, responda las preguntas con total honestidad.
			</div>
		</div>

	</div>
   
</body>

</html>

