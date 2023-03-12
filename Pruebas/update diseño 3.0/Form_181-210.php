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
	<title>Preguntas 181-210</title>
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
						Preguntas 181-210
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_211-240.php">
            <!--Pregunta 181-->
            <p>No tengo accesos de alergia o asma</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label> <br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 182-->
            <p>He tenido ataques en los que perdía el control de mis
                 movimientos o de la palabra, pero sabía lo que pasaba a
                  mí alrededor</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 183-->
            <p>Me desagradan algunas personas que conozco</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            <hr>

            <!--Pregunta 184-->
            <p>Muy pocas veces sueño despierto</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 185-->
            <p>Me gustaría ser menos tímido</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            <hr>

            <!--Pregunta 186-->
            <p>No me da miedo manejar dinero</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            <hr>

            <!--Pregunta 187-->
            <p>Si fuera periodista me gustartía mucho
                 informar sobre teatro</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            <hr>

            <!--Pregunta 188-->
            <p>Disfruto con muy diferentes clases de
                 juegos o diversiones</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            <hr>

            <!--Pregunta 189-->
            <p>Me gusta flirtear (coquetear)</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label><br>
            <hr>

             <!--Pregunta 190-->
             <p>Los niños me tratan más como a un niño que como a un adulto</p>
             <input type="radio" value="true" name="Q[10]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[10]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 191-->
             <p>Me gustaría ser periodista</p>
             <input type="radio" value="true" name="Q[11]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[11]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 192-->
             <p>Mi madre es una buena mujer,(o si lo fue, falleció)</p>
             <input type="radio" value="true" name="Q[12]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[12]">
             <label>falso</label>
             <hr>
             
             <!--Pregunta 193-->
             <p>Cuando camino por la vereda evito cuidadosamente pisar las baldosas flojas</p>
             <input type="radio" value="true" name="Q[13]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[13]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 194-->
             <p>Nunca he tenido erupciones en la piel que me hayan preocupado</p>
             <input type="radio" value="true" name="Q[14]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[14]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 195-->
             <p>comparado con otros hogares, en el mío hay poco amor o unión</p>
             <input type="radio" value="true" name="Q[15]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[15]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 196-->
             <p>Con frecuencia, estoy preocupado por algo</p>
             <input type="radio" value="true" name="Q[16]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[16]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 197-->
             <p>Creo que me gustaría el trabajo de contratista de obras</p>
             <input type="radio" value="true" name="Q[17]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[17]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 198-->
             <p>Normalmente oigo voces sin saber de donde vienen</p>
             <input type="radio" value="true" name="Q[18]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[18]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 199-->
             <p>Me gusta la ciencia</p>
             <input type="radio" value="true" name="Q[19]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[19]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 200-->
             <p>No me cuesta pedir ayuda a mis amigos, incluso aunque no pueda devolverles el favor</p>
             <input type="radio" value="true" name="Q[20]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[20]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 201-->
             <p>Me gusta mucho cazar</p>
             <input type="radio" value="true" name="Q[21]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[21]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 202-->
             <p>A menudo a mis padres les molestó el tipo de amigos que tenía</p>
             <input type="radio" value="true" name="Q[22]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[22]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 203-->
             <p>A veces soy un poco chismoso</p>
             <input type="radio" value="true" name="Q[23]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[23]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 204-->
             <p>Escucho tan bien como las demás personas</p>
             <input type="radio" value="true" name="Q[24]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[24]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 205-->
             <p>Alguno de mis familiares tiene costumbres que me molestan y fastidian muchísimo</p>
             <input type="radio" value="true" name="Q[25]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[25]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 206-->
             <p>A veces me siento capaz de tomar decisiones con extraordinaria facilidad</p>
             <input type="radio" value="true" name="Q[26]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[26]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 207-->
             <p>Me gustaría pertenecer a variuos clubes o asociaciones</p>
             <input type="radio" value="true" name="Q[27]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[27]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 208-->
            <p>Raramente noto los latidos de mi corazón y pocas veces se me corta la respiración</p>
             <input type="radio" value="true" name="Q[28]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[28]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 209-->
             <p>Me gusta hablar sobre temas sexuales</p>
             <input type="radio" value="true" name="Q[29]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[29]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 210-->
             <p>Me gusta visitar lugares donde nunca he estado</p>
             <input type="radio" value="true" name="Q[30]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[30]">
             <label>falso</label>
             <hr>
                
			
				
					
			
					  
					  <br><br>
					  <div class="text-center">
						<button type="button" class="btn btn-success">Siguiente</button>
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