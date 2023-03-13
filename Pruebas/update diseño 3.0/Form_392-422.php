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
	<title>Preguntas 392-422</title>
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
						Preguntas 392-422
					</span>
				</h4>
			</div>
			<div class="card-body">

       <form method="post" action="Form_423-453.php">
        
        <!--Pregunta 392-->
        <p>Le tengo miedo a los relámpagos</p>
        <input type="radio" value="true" name="Q[1]">
        <label>verdadero</label><br>        
        <input type="radio" value="false" name="Q[1]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 393-->
        <p>Me gusta que los demás estén intrigados acerca de lo que voy a hacer</p>
        <input type="radio" value="true" name="Q[2]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[2]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 394-->
        <p>Algunas veces me ha parecido que las dificultades se acumulaban de tal modo que no podia superarlas</p>
        <input type="radio" value="true" name="Q[3]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[3]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 395-->
        <p>Me da miedo estar solo en la oscuridad</p>
        <input type="radio" value="true" name="Q[4]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[4]">
        <label>falso</label>
        <hr>

        <!--Pregunta 396-->
        <p>Muchas veces me ha caido mal ser incomprendido cuando trataba de evitar que alguien se equivocara</p>
        <input type="radio" value="true" name="Q[5]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[5]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 397-->
        <p>Le tengo miedo a las tormentas con mucho viento</p>
        <input type="radio" value="true" name="Q[6]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[6]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 398-->
        <p>frecuentemente pido consejos a otras personas</p>
        <input type="radio" value="true" name="Q[7]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[7]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 399-->
        <p>El futuro es demasiado incierto para que una persona haga planes importantes</p>
        <input type="radio" value="true" name="Q[8]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[8]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 400-->
        <p>A menudo, incluso cuando todo me sale bien, siento que nada me importa</p>
        <input type="radio" value="true" name="Q[9]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[9]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 401-->
        <p>No le tengo miedo al agua</p>
        <input type="radio" value="true" name="Q[10]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[10]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 402-->
        <p>A menudo tengo que "consultar con la almohada" antes de tomar una decisión</p>
        <input type="radio" value="true" name="Q[11]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[11]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 403-->
        <p>A menudo la gente ha interpretado mal mis intenciones cuando trataba de ayudarla</p>
        <input type="radio" value="true" name="Q[12]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[12]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 404-->
        <p>No tengo dificultad al tragar</p>
        <input type="radio" value="true" name="Q[13]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[13]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 405-->
        <p>Soy una persona tranquila y no me altero fácilmente</p>
        <input type="radio" value="true" name="Q[14]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[14]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 406-->
        <p>Me gusta combatir a los criminales con sus propias armas</p>
        <input type="radio" value="true" name="Q[15]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[15]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 407-->
        <p>Merezco un castigo severo por mis pecados</p>
        <input type="radio" value="true" name="Q[16]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[16]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 408-->
        <p>Me tomo tan en serio las preocupaciones que me cuesta sacármelas de la cabeza</p>
        <input type="radio" value="true" name="Q[17]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[17]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 409-->
        <p>Me molesta que alguien me observe cuando trabajo aunque sepa que lo hago bien</p>
        <input type="radio" value="true" name="Q[18]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[18]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 410-->
        <p>A menudo me molesta tanto que alguien trate de "colarse" delante de mí en una cola, que tengo que decirle algo</p>
        <input type="radio" value="true" name="Q[19]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[19]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 411-->
        <p>A veces pienso que no valgo para nada</p>
        <input type="radio" value="true" name="Q[20]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[20]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 412-->
        <p>Cuando era chico me hacia "la rabona" en la escuela</p>
        <input type="radio" value="true" name="Q[21]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[21]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 413-->
        <p>Uno o varios de mis familiares son muy nerviosos</p>
        <input type="radio" value="true" name="Q[22]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[22]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 414-->
        <p>A veces he tenvalueo que ser duro con personas groseras o inoportunas</p>
        <input type="radio" value="true" name="Q[23]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[23]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 415-->
        <p>Me preocupo bastante por posibles desgracias</p>
        <input type="radio" value="true" name="Q[24]">
        <label>verdadero</label>      <br>       
        <input type="radio" value="false" name="Q[24]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 416-->
        <p>Tengo opiniones políticas muy definvalueas</p>
        <input type="radio" value="true" name="Q[25]">
        <label>verdadero</label>    <br>         
        <input type="radio" value="false" name="Q[25]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 417-->
        <p>Me gustaria ser corredor de automovilismo</p>
        <input type="radio" value="true" name="Q[26]">
        <label>verdadero</label>      <br>       
        <input type="radio" value="false" name="Q[26]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 418-->
        <p>Es correcto bordear los límites de la Ley con tal de no violarla claramente</p>
        <input type="radio" value="true" name="Q[27]">
        <label>verdadero</label>  <br>           
        <input type="radio" value="false" name="Q[27]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 419-->
        <p>Me desagradan tanto algunas personas, que me alegro interiormente cuando les llaman la atención por algo que han hecho</p>
        <input type="radio" value="true" name="Q[28]">
        <label>verdadero</label>   <br>          
        <input type="radio" value="false" name="Q[28]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 420-->
        <p>Me pone nervioso tener que esperar</p>
        <input type="radio" value="true" name="Q[29]">
        <label>verdadero</label>    <br>         
        <input type="radio" value="false" name="Q[29]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 421-->
        <p>Tiendo a dejar algo que deseo hacer porque otros piensan que lo encaro incorrectamente</p>
        <input type="radio" value="true" name="Q[30]">
        <label>verdadero</label>   <br>          
        <input type="radio" value="false" name="Q[30]">
        <label>falso</label>
        <hr>
        
        <!--Pregunta 422-->
        <p>Cuando era joven me apasionaba lo emocionante</p>
        <input type="radio" value="true" name="Q[31]">
        <label>verdadero</label>   <br>          
        <input type="radio" value="false" name="Q[31]">
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