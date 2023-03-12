<?php
session_start();
$_SESSION["answer"] = $_POST["Q"];
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
	<title>Preguntas 31-60</title>
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
						Preguntas 31-60
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_61-90.php">
         <!--Pregunta 31-->
         <p>Me cuesta bastante concentrarme en una tarea o trabajo</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label> <br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            <hr>

            <!--Pregunta 32-->
            <p>He tenido muy peculiares y extrañas experiencias</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            <hr>

            <!--Pregunta 33-->
            <p>Raras veces me preocupo por mi salud</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            <hr>

            <!--Pregunta 34-->
            <p>Nunca me he visto en dificultades a causa de mi conducta sexual</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            <hr>

            <!--Pregunta 35-->
            <p>Durante algún tiempo, cuando era joven, participé en pequeños robos</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            <hr>

            <!--Pregunta 36-->
            <p>Tengo tos la mayor parte del tiempo</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 37-->
            <p>A veces siento deseos de romper cosas</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 38-->
            <p>He tenido períodos de días, semanas o meses en los que no podía 
                preocuparme por las cosas, porque no tenía ánimo de nada
            </p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 39-->
            <p>Mi sueño es irregular, inquieto</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 40-->
            <p>La mayor parte del tiempo parece dolerme la cabeza por todas partes</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 41-->
            <p>No digo siempre la verdad</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 42-->
            <p>Si los demás no se la hubieran tomado conmigo, hubiese tenido más éxito</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 43-->
            <p>Mis razonamientos son ahora mejores que nunca</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 44-->
            <p>Una vez a la semana o más a menudo, siento calor por todo el cuerpo sin 
                causa aparente
            </p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 45-->
            <p>Tengo tan buena salud física como la mayor parte de mis amigos</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 46-->
            <p>Prefiero hacerme el desentendido con amigos del colegio, o personas 
                conocidas que no veo desde hace tiempo, a menos que ellos me hablen 
                primero
            </p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 47-->
            <p>Casi nunca he sufrido de doleres en el pecho o en el corazón</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 48-->
            <p>En muchas ocasiones me gustaría más sentarme y soñar despierto 
                que hacer cualquier cosa
            </p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 49-->
            <p>Soy una persona sociable</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 50-->
            <p>A menudo he recibido órdenes de alguien que no sabía tanto como yo</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 51-->
            <p>No leo diariamente todos los artículos principales del diario</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            <hr>

            <!--Pregunta 52-->
            <p>No he llevado un tipo de vida adecuado y normal</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 53-->
            <p>A menudo algunas partes de mi cuerpo tienen sensaciones de hormigueo, 
                quemazón, picazón o bien de quedarse "dormidas"
            </p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 54-->
            <p>A mi familia no le gusta el trabajo que he elegido (o el trabajo que 
                pienso elegir para mi futuro)</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 55-->
            <p>Algunas veces persisto en una cosa o tema hasta que los demás pierden 
                la pasciencia conmigo
            </p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 56-->
            <p>Me gustaría ser tan feliz como parecen los otros</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 57-->
            <p>Muy raras veces siento dolor en la nuca</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 58-->
            <p>Pienso que una gran mayoría de la gente exagera sus desgracias para 
                lograr la simpatía y ayuda de los demás
            </p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 59-->
            <p>Tengo molestias en la boca del estómago casi a diario</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 60-->
            <p>Cuando estoy con gente escucho cosas entrañas</p>
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
