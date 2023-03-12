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
	<title>Preguntas 211-240</title>
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
						Preguntas 211-240
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_241-270.php">
             <!--Pregunta 211-->
             <p>Me han sugerido una forma de vida basada en el deber y desde entonces la he seguido cuidadosamente</p>
             <input type="radio" value="true" name="Q[1]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[1]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 212-->
             <p>A veces traté de que alguien no hiciera algo, porque eso estaba en contra de mis principios</p>
             <input type="radio" value="true" name="Q[2]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[2]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 213-->
             <p>Me enojo fácilmente, pero se me pasa pronto</p>
             <input type="radio" value="true" name="Q[3]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[3]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 214-->
             <p>He vivivo bastante libre e independiente de las normas familiares</p>
             <input type="radio" value="true" name="Q[4]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[4]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 215-->
             <p>Me preocupo muchísimo</p>
             <input type="radio" value="true" name="Q[5]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[5]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 216-->
             <p>Alguien ha tratado de robarme</p>
             <input type="radio" value="true" name="Q[6]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[6]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 217-->
             <p>Casi todos mis familiares simpatizan conmigo</p>
             <input type="radio" value="true" name="Q[7]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[7]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 218-->
             <p>Hay momentos en que estoy tan nervioso que no puedo estar sentado mucho tiempo</p>
             <input type="radio" value="true" name="Q[8]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[8]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 219-->
             <p>He tenido desengaños amorosos</p>
             <input type="radio" value="true" name="Q[9]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[9]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 220-->
             <p>Nunca me preocupo por mi apariencia</p>
             <input type="radio" value="true" name="Q[10]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[10]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 221-->
             <p>Sueño frecuentemente con cosas que es mejor guardarlas para mí mismo</p>
             <input type="radio" value="true" name="Q[11]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[11]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 222-->
             <p>Debería enseñarse a los niños lo principal ac erca de la vida sexual</p>
             <input type="radio" value="true" name="Q[12]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[12]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 223-->
             <p>Creo que no soy más nervioso que la mayoría</p>
             <input type="radio" value="true" name="Q[13]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[13]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 224-->
             <p>Tengo pocos o ningún dolor</p>
             <input type="radio" value="true" name="Q[14]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[14]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 225-->
             <p>Mi modo de hacer las cosas tiende a ser mal interpreado por los demás</p>
             <input type="radio" value="true" name="Q[15]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[15]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 226-->
             <p>Algunas veces, sin razón alguna, incluso cuando las cosas van mal, me siento feliz, "flotando entre las nubes"</p>
             <input type="radio" value="true" name="Q[16]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[16]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 227-->
             <p>No culpo a nadie por tratar de apoderarse de todo lo que pueda en este mundo</p>
             <input type="radio" value="true" name="Q[17]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[17]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 228-->
             <p>Hay personas que están intentando apoderarse de mis ideas y proyectos</p>
             <input type="radio" value="true" name="Q[18]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[18]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 229-->
             <p>He tenido momentos de nerviosismo que interrumpieron mis actividades, y en los que no sabía que ocurría a mi alrededor</p>
             <input type="radio" value="true" name="Q[19]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[19]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 230-->
             <p>Puedo mostrarme amistoso con la gente que hace cosas que yo considero incorrectas</p>
             <input type="radio" value="true" name="Q[20]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[20]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 231-->
             <p>Me gusta estar en un grupo en el que se hacen bromas mutuamente</p>
             <input type="radio" value="true" name="Q[21]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[21]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 232-->
             <p>En las elecciones,algunas veces, voto candidatos que conozco muy poco</p>
             <input type="radio" value="true" name="Q[22]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[22]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 233-->
             <p>Me cuesta empezar a hacer cualquier cosa</p>
             <input type="radio" value="true" name="Q[23]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[23]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 234-->
             <p>Siento que soy una persona condenada</p>
             <input type="radio" value="true" name="Q[24]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[24]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 235-->
             <p>En el colegio era lento para aprender</p>
             <input type="radio" value="true" name="Q[25]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[25]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 236-->
             <p>Si fuera artista me gustaría dibujar flores</p>
             <input type="radio" value="true" name="Q[26]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[26]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 237-->
             <p>No me molesta ser poco elegante</p>
             <input type="radio" value="true" name="Q[27]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[27]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 238-->
             <p>Transpiro muy fácilmente, incluso en días fríos</p>
             <input type="radio" value="true" name="Q[28]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[28]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 239-->
             <p>Soy una persona plenamente segura de sí misma</p>
             <input type="radio" value="true" name="Q[29]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[29]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 240-->
             <p>A veces me es imposible vencer la tentación de robar</p>
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