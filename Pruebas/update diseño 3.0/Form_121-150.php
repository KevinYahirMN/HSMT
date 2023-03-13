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
	<title>Preguntas 121-150</title>
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
						Preguntas 121-150
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_151-180.php">
            <!--Pregunta 121-->
            <p>Nunca me he entregado a prácticas sexuales fuera de lo común</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 122-->
            <p>A veces mi pensamiento ha ido más rápido y delante de mis palabras</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 123-->
            <p>Si pudiera entrar en un espectáculo sin pagar y estuviera seguro de no ser visto, probablmente lo haría</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 124-->
            <p>Generalmente me pregunto que razón oculta puede tener otra persona cuando me hace un favor</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            <hr>

            <!--Pregunta 125-->
            <p>Creo que mi vida hogareña es tan agradable como la de mucha gente que conozco</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 126-->
            <p>Es necesario reforzar las leyes vigentes</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 127-->
            <p>Me hieren profundamente las críticas y los retos</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 128-->
            <p>Me gusta cocinar</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            <hr>

            <!--Pregunta 129-->
            <p>Mi conducta es ampliamente controlada por las costumbres que me rodean</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            <hr>

            <!--Pregunta 130-->
            <p>A veces siento que verdaderamente soy un inútil</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 131-->
            <p>Cuando era pertenecia a una banda que intentaba mantenerse unida como "carne y uña"</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            <hr>

            <!--Pregunta 132-->
            <p>Creo en la vida del allá</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            <hr>

            <!--Pregunta 133-->
            <p>Me gustaría ser soldado</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            <hr>

            <!--Pregunta 134-->
            <p>A veces siento deseos de tomarme a puñetazos con alguien</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            <hr>

            <!--Pregunta 135-->
            <p>Frecuentemente he perdido o desaprovechado cosas por no saber decidirme a tiempo</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            <hr>

            <!--Pregunta 136-->
            <p>Me molesta que me pidan consejo o que me interrumpan cuando estoy trabajando en algo importante</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            <hr>

            <!--Pregunta 137-->
            <p>Solía llevar un diario personal</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            <hr>

            <!--Pregunta 138-->
            <p>Creo que se trama algo contra mí</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            <hr>

            <!--Pregunta 139-->
            <p>En un juego o partida suelo más ganar que perder</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            <hr>

            <!--Pregunta 140-->
            <p>Casi todas las noches me duermo con ideas o pensamientos molestos</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            <hr>

            <!--Pregunta 141-->
            <p>Durante los últimos años he estado sano casi siempre</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            <hr>

            <!--Pregunta 142-->
            <p>Nunca he tenido un ataque o convulsión</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            <hr>

            <!--Pregunta 143-->
            <p>Ahora no estoy subiendo o bajando de peso</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 144-->
            <p>Creo que me siguen</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            <hr>

            <!--Pregunta 145-->
            <p>Creo que frecuentemente he sido castigado sin causa</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            <hr>

            <!--Pregunta 146-->
            <p>Lloro con facilidad</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            <hr>

            <!--Pregunta 147-->
            <p>Actualmente no comprendo lo que leo con la facilidad que tenía antes</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 148-->
            <p>Nunca me he sentido mejor que ahora</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            <hr>

            <!--Pregunta 149-->
            <p>A veces siento dolores en la parte superior de la cabeza</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            <hr>

            <!--Pregunta 150-->
            <p>A veces siento que tengo que hacerme daño a mi mismo o alguien</p>
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