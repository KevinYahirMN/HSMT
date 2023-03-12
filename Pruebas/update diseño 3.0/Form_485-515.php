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
	<title>Preguntas 485-515</title>
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
						Preguntas 485-515
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_516-546.php">
        <!--Pregunta 485-->
        <p>A veces siento que no soy tan bueno como los demás</p>
        <input type="radio" id="true" name="Q[1]">
        <label>verdadero</label> <br>
        <input type="radio" id="false" name="Q[1]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 486-->
        <p>Soy "Cabeza dura"</p>
        <input type="radio" id="true" name="Q[2]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[2]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 487-->
        <p>Me gustó fumar marihuana</p>
        <input type="radio" id="true" name="Q[3]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[3]">
        <label>falso</label>
        <hr>

        <!--Pregunta 488-->
        <p>La enfermedad mental es signo de debilidad</p>
        <input type="radio" id="true" name="Q[4]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[4]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 489-->
        <p>Tengo problemas con la droga o el alcohol</p>
        <input type="radio" id="true" name="Q[5]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[5]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 490-->
        <p>Los fantasmas o espíritus influyen en la vida de las personas, para bien o para mal</p>
        <input type="radio" id="true" name="Q[6]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[6]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 491-->
        <p>Me siento desamparado cuando tengo que decidir algo importante</p>
        <input type="radio" id="true" name="Q[7]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[7]">
        <label>falso</label>
        <hr>
                                                    
                                                
        <!--Pregunta 492-->
        <p>Trato de ser paciente aún cuando me critican</p>
        <input type="radio" id="true" name="Q[8]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[8]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 493-->
        <p>Cuando tengo un problema me ayuda el contárselo a otra persona</p>
        <input type="radio" id="true" name="Q[9]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[9]">
        <label>falso</label>
        <hr>

        <!--Pregunta 494-->
        <p>Creo que puedo lograr concretar mis proyectos</p>
        <input type="radio" id="true" name="Q[10]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[10]">
        <label>falso</label>
        <hr>

        <!--Pregunta 495-->
        <p>Creo que la gente debe "guardarse" sus problemas personales</p>
        <input type="radio" id="true" name="Q[11]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[11]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 496-->
        <p>En esta etapa de mi vida me siento poco tenso o estresado</p>
        <input type="radio" id="true" name="Q[12]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[12]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 497-->
        <p>Me molesta pensar en hacer cambios en mi vida</p>
        <input type="radio" id="true" name="Q[13]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[13]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 498-->
        <p>Mis mayores problemas son causados por la forma de ser de alguien con quien convivo</p>
        <input type="radio" id="true" name="Q[14]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[14]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 499-->
        <p>Detesto ir al médico aún cuando estoy enfermo</p>
        <input type="radio" id="true" name="Q[15]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[15]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 500-->
        <p>Aunque soy poco feliz, no puedo hacer nada para modificarlo</p>
        <input type="radio" id="true" name="Q[16]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[16]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 501-->
        <p>Conversar acerca de los problemas es más útil que tomar remedios para resolverlos</p>
        <input type="radio" id="true" name="Q[17]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[17]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 502-->
        <p>Tengo tan arraigados uno o varios malos hábitos que es inútil luchar contra ellos</p>
        <input type="radio" id="true" name="Q[18]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[18]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 503-->
        <p>Si hay que resolver un problema, le dejo la iniciativa a los demás</p>
        <input type="radio" id="true" name="Q[19]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[19]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 504-->
        <p>Reconozco que cometo errores pero no puedo cambiar</p>
        <input type="radio" id="true" name="Q[20]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[20]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 505-->
        <p>Me disgusta tanto lo que hago diariamente que quisiera dejar de hacerlo</p>
        <input type="radio" id="true" name="Q[21]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[21]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 506-->
        <p>He pensado en suicidarme</p>
        <input type="radio" id="true" name="Q[22]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[22]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 507-->
        <p>Realmente me enojo cuando interrumpen mi trabajo</p>
        <input type="radio" id="true" name="Q[23]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[23]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 508-->
        <p>A menudo siento que puedo leer lo que otros están pensando</p>
        <input type="radio" id="true" name="Q[24]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[24]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 509-->
        <p>Me pongo nervioso cuando tengo que tomar una decisión importante</p>
        <input type="radio" id="true" name="Q[25]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[25]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 510-->
        <p>Dicen que como muy rápido</p>
        <input type="radio" id="true" name="Q[26]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[26]">
        <label>falso</label>
        <hr>
        <!--Pregunta 511-->
        <p>Por lo menos una vez por semana me emborracho o me drogo.</p>
        <input type="radio" id="true" name="Q[27]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[27]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 512-->
        <p>Tuve una pérdida afectiva importante en mi vida que no puedo olvidar</p>
        <input type="radio" id="true" name="Q[28]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[28]">
        <label>falso</label>
        <hr>

        <!--Pregunta 513-->
        <p>A veces me enojo tanto que no sé lo que digo o hago.</p>
        <input type="radio" id="true" name="Q[29]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[29]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 514-->
        <p>Me cuesta decir que "no" cuando me piden que haga algo.</p>
        <input type="radio" id="true" name="Q[30]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[30]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 515-->
        <p>Sólo soy feliz cuando estoy solo</p>
        <input type="radio" id="true" name="Q[31]">
        <label>verdadero</label><br>
        <input type="radio" id="false" name="Q[31]">
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