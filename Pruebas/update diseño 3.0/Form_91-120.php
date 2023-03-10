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
	<title>Preguntas 91-120</title>
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
						Preguntas 91-120
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_121-150.php">
            <!--Pregunta 91-->
            <p>Tengo pocas o ninguna molestia a causa de espasmos o contracciones musculares</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            <hr>

            
            <!--Pregunta 92-->
            <p>No parece importarme lo que me suceda</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 93-->
            <p>A veces, cuando no me siento bien, estoy irritable</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 94-->
            <p>La mayor parte del tiempo me parece haber hecho algo malo o equivocado</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 95-->
            <p>Soy feliz la mayor parte del tiempo</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 96-->
            <p>Veo a mi alrededor cosas, animales o personas que otros no ven</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 97-->
            <p>Parece como si la mayor parte del tiempo tuviera la cabeza cargada o llena de ruidos</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 98-->
            <p>Hay algunas personas tan mandonas que me dan ganas de hacer lo contrario de lo que quieren, aunque sepa que tiene raz??n</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 99-->
            <p>Alguien me la tiene jurada</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 100-->
            <p>Nunca he hecho algo peligroso solo por el placer de hacerlo</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 101-->
            <p>A menudo siento como si tuviera una venda puesta fuertemente alrededor de mi cabeza</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 102-->
            <p>Alguna vez me enojo</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 103-->
            <p>Me divierte m??s un juego cuando apuesto</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 104-->
            <p>La mayor??a de la gente es honrada por temor a ser descubierta</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 105-->
            <p>En el colegio, algunas veces, fui enviado al director a causa de mi mala conducta</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 106-->
            <p>Mi manera de hablar es como siempre (ni m??s r??pida, ni m??s lenta, ni m??s atropellada, no tengo carraspera)</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 107-->
            <p>Mis modales en la mesa no son tan correctos en mi casa como cuando salgo a comer afuera</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 108-->
            <p>Cualquier persona capacitada y dispuesta a trabajar fuerte, tiene muchas probabiliades de tener ??xito</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 109-->
            <p>Me parece ser tan capaz y despierto como la mayor parte de los que me rodean</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 110-->
            <p>Para no perder un beneficio o ventaja, la mayor??a de la gente est?? dispuesta a hacer cualquier cosa</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 111-->
            <p>Tengo bastantes trastornos digestivos</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 112-->
            <p>Me gusta el teatro y el cine</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            <hr>

            <!--Pregunta 113-->
            <p>Se quien es el responsable de muchos de mis problemas</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 114-->
            <p>A veces me siento tan atra??do por las cosas de otros (zapatos, reloj), que tengo ganas de robarlas</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 115-->
            <p>Ver sangre no me da miedo ni me hace mal</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 116-->
            <p>Frecuentemente no puedo comprender porque he estado tan gru????n y malhumorado</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 117-->
            <p>Nunca he vomitado sangre, ni sangrado al toser</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 118-->
            <p>No me preocupa contraer una enfermedad</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 119-->
            <p>Me gusta recoger flores o cultivar plantas en casa</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 120-->
            <p>Frecuentemente encuentro necesario defender lo que es justo</p>
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
				Lea con atenci??n cada pregunta y responda <strong>Verdadero</strong> o <strong>Falso</strong> seg??n corresponda.<br><br> Por favor, responda las preguntas con total honestidad.
			</div>
		</div>

	</div>
   
</body>

</html>