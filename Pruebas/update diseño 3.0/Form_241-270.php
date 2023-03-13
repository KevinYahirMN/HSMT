<?php
session_start();
$answer = $_SESSION['answer'];

$postanswer = $_POST['Q'];

for($i = 1; $i < 31; $i++){
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
	<title>Preguntas 241-270</title>
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
						Preguntas 241-270
					</span>
				</h4>
			</div>
			<div class="card-body">
                
          <form method="post" action="Form_271-300.php">
          <!--Pregunta 241-->
          <p>Es más seguro no confiar en nadie</p>
          <input type="radio" value="true" name="Q[1]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[1]">
          <label>falso</label>
          <hr>

          <!--Pregunta 242-->
          <p>Me excito mucho una vez por semana o con más frecuencia</p>
          <input type="radio" value="true" name="Q[2]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[2]">
          <label>falso</label>
          <hr>

          <!--Pregunta 243-->
          <p>Cuando estoy con un grupo de gente, me altera tener que pensar en temas adecuados de conversación</p>
          <input type="radio" value="true" name="Q[3]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[3]">
          <label>falso</label>
          <hr>

          <!--Pregunta 244-->
          <p>Cuando estoy abatido (bajoneado), algo emocionante me saca casi siempre de ese estado</p>
          <input type="radio" value="true" name="Q[4]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[4]">
          <label>falso</label>
          <hr>

          <!--Pregunta 245-->
          <p>Cuando salgo de casa no me preocupa si la puerta y las ventanas quedan bien cerradas</p>
          <input type="radio" value="true" name="Q[5]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[5]">
          <label>falso</label>
          <hr>

          <!--Pregunta 246-->
          <p>Creo que mis pecados son imperdonables</p>
          <input type="radio" value="true" name="Q[6]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[6]">
          <label>falso</label>
          <hr>

          <!--Pregunta 247-->
          <p>Tengo entumecimientos en una o más partes de mi piel</p>
          <input type="radio" value="true" name="Q[7]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[7]">
          <label>falso</label>
          <hr>

          <!--Pregunta 248-->
          <p>No culpo a aquel que se aprovecha de otro que deja que se aprovechen de él</p>
          <input type="radio" value="true" name="Q[8]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[8]">
          <label>falso</label>
          <hr>

          <!--Pregunta 249-->
          <p>Mi vista es tan buena como lo ha sido durante años</p>
          <input type="radio" value="true" name="Q[9]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[9]">
          <label>falso</label>
          <hr>

          <!--Pregunta 250-->
          <p>A veces me ha divertido tanto el ingenio de un delincuente, que he deseado que le fuera bien</p>
          <input type="radio" value="true" name="Q[10]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[10]">
          <label>falso</label>
          <hr>

          <!--Pregunta 251-->
          <p>A menudo me ha dado la sensación de que gente extraña me ha estado mirando con ojos críticos</p>
          <input type="radio" value="true" name="Q[11]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[11]">
          <label>falso</label>
          <hr>

          <!--Pregunta 252-->
          <p>Para mí todo tiene el mismo sabor o gusto</p>
          <input type="radio" value="true" name="Q[12]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[12]">
          <label>falso</label>
          <hr>

          <!--Pregunta 253-->
          <p>Todos los días tomo una cantidad excesivamente grande de agua</p>
          <input type="radio" value="true" name="Q[13]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[13]">
          <label>falso</label>
          <hr>

          <!--Pregunta 254-->
          <p>La mayor parte de la gente hace amigos porque es probable que le sean útiles</p>
          <input type="radio" value="true" name="Q[14]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[14]">
          <label>falso</label>
          <hr>

          <!--Pregunta 255-->
          <p>No noto que me zumben o me chillen los oídos frecuentemente</p>
          <input type="radio" value="true" name="Q[15]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[15]">
          <label>falso</label>
          <hr>

          <!--Pregunta 256-->
          <p>De vez en cuando siento fastidio hacia familiares que normalmente quiero</p>
          <input type="radio" value="true" name="Q[16]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[16]">
          <label>falso</label>
          <hr>

          <!--Pregunta 257-->
          <p>Si fuera periodista me gustaría mucho informar sobre deportes</p>
          <input type="radio" value="true" name="Q[17]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[17]">
          <label>falso</label>
          <hr>

          <!--Pregunta 258-->
          <p>Puedo dormir de día, pero no de noche</p>
          <input type="radio" value="true" name="Q[18]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[18]">
          <label>falso</label>
          <hr>

          <!--Pregunta 259-->
          <p>Estoy seguro de que la gente habla de mí</p>
          <input type="radio" value="true" name="Q[19]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[19]">
          <label>falso</label>
          <hr>

          <!--Pregunta 260-->
          <p>De vez en cuando me divierten las bromas o chistes "verdes"</p>
          <input type="radio" value="true" name="Q[20]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[20]">
          <label>falso</label>
          <hr>

          <!--Pregunta 261-->
          <p>Comparado con mis amigos, tengo muy pocos miedos</p>
          <input type="radio" value="true" name="Q[21]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[21]">
          <label>falso</label>
          <hr>

          <!--Pregunta 262-->
          <p>Puedo iniciar una discusión, en un grupo de personas, sobre un tema que conozco</p>
          <input type="radio" value="true" name="Q[22]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[22]">
          <label>falso</label>
          <hr>

          <!--Pregunta 263-->
          <p>Siento siempre aversión por la ley cuando un criminal sale libre gracias a la habilidad de un abogado astuto</p>
          <input type="radio" value="true" name="Q[23]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[23]">
          <label>falso</label>
          <hr>

          <!--Pregunta 264-->
          <p>He abusado del alcohol</p>
          <input type="radio" value="true" name="Q[24]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[24]">
          <label>falso</label>
          <hr>

          <!--Pregunta 265-->
          <p>Por lo general no le hablo a las personas hasta que ellas me hablan a mí</p>
          <input type="radio" value="true" name="Q[25]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[25]">
          <label>falso</label>
          <hr>

          <!--Pregunta 266-->
          <p>Nunca he tenido problemas con la ley</p>
          <input type="radio" value="true" name="Q[26]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[26]">
          <label>falso</label>
          <hr>

          <!--Pregunta 267-->
          <p>Tengo épocas en las que me he sentido más animado que de costumbre sin que exista una razón especial</p>
          <input type="radio" value="true" name="Q[27]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[27]">
          <label>falso</label>
          <hr>

          <!--Pregunta 268-->
          <p>Me gustaría no ser pertubado por pensamientos sexuales</p>
          <input type="radio" value="true" name="Q[28]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[28]">
          <label>falso</label>
          <hr>

          <!--Pregunta 269-->
          <p>Si varias personas se encuentran inculpadas, lo que mejor que pueden hacer es ponerse de acuerdo en lo que van a dceir y no cambiarlo después</p>
          <input type="radio" value="true" name="Q[29]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[29]">
          <label>falso</label>
          <hr>

          <!--Pregunta 270-->
          <p>No me molesta ver sufrir a los animales</p>
          <input type="radio" value="true" name="Q[30]">
          <label>verdadero</label><br>
          <input type="radio" value="false" name="Q[30]">
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