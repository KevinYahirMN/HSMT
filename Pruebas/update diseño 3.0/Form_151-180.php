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
	<title>Preguntas 151-180</title>
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
						Preguntas 151-180
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_181-210.php">
            <!--Pregunta 151-->
            <p>Me molesta que alguien se haya burlado tan inteligentemente de mi que yo haya tenido que admitir que lo logró </p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 152-->
            <p>No me canso facilmente</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 153-->
            <p>Me gusta conocer alguna gente importante porque esto me hace sentir importante</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            <hr>

            <!--Pregunta 154-->
            <p>Siento miedo cuando miro hacia abajo desde un lugar alto</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            <hr>

            <!--Pregunta 155-->
            <p>No me sentiría nervioso si algún familiar tuviera problemas con la ley</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            <hr>

            <!--Pregunta 156-->
            <p>Solo me siento feliz cuando viajo de un lado para otro</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            <hr>

            <!--Pregunta 157-->
            <p>Me es indiferente lo que los demás piensen de mí</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 158-->
            <p>Me siento incómodo cuando tengo que hacer una payasada en una reunión, incluso aunque otros estén haciendo</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 159-->
            <p>Nunca he tenido un desmayo o desvanecimiento</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 160-->
            <p>Me gustaba ir al colegio</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 161-->
            <p>Frecuentemente tengo que esforzarme para no demostrar que soy tímido</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 162-->
            <p>Alguien ha intentado envenenarme</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 163-->
            <p>Las serpientes no me dan mucho miedo</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 164-->
            <p>Nunca o rara vez tengo mareos</p>
            <input type="radio" value="true" name="Q[14">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 165-->
            <p>Mi memoria parece ser normal</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 166-->
            <p>Me preocupan los temas sexuales</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            <hr>

            <!--Pregunta 167-->
            <p>Me es difícil entablar una conversación cuando recién conozco a alguien</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 168-->
            <p>He tenido épocas durante las cuales he realizado actividades que luego no recordaba haber hecho</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 169-->
            <p>Cuando estoy aburrido me gusta promover algo excitante</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 170-->
            <p>Tengo miedo de volverme loco</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 171-->
            <p>Estoy en contra de dar dinero a los mendigos</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 172-->
            <p>Frecuentemente noto temblar mis manos cuando intento hacer algo</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 173-->
            <p>Puedo leer mucho tiempo sin que se me canse la vista</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            <hr>

            <!--Pregunta 174-->
            <p>Me gusta leer y estudiar acerca de lo que estoy trabajando</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            <hr>

            <!--Pregunta 175-->
            <p>Siento debilidad general la mayor parte del tiempo</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            <hr>

            <!--Pregunta 176-->
            <p>Muy pocas veces me duele la cabeza</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            <hr>

            <!--Pregunta 177-->
            <p>Mis manos siguen siendo habiles</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 178-->
            <p>A veces, cuando estoy preocupado, comienzo a sudar, lo que me molesta mucho</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 179-->
            <p>No he tenidzo dificultades para mantener el equilibrio al caminar</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 180-->
            <p>Algo no anda bien en mi cabeza</p>
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