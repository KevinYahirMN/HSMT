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
	<title>Preguntas 61-90</title>
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
						Preguntas 61-90
					</span>
				</h4>
			</div>
			<div class="card-body">

			<form method="post" action="Form_91-120.php">
            <!--Pregunta 61-->
            <p>Soy una persona importante</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 62-->
            <p>A menudo he deseado ser mujer. (O si usted es mujer: nunca me ha molestado 
                ser mujer)</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
			<hr>

            <!--Pregunta 63-->
            <p>Mis sentimientos no son heridos con facilidad</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
			<hr>

            <!--Pregunta 64-->
            <p>Me gusta leer novelas de amor</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
			<hr>

            <!--Pregunta 65-->
            <p>La mayor parte del tiempo siento melancolía</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 66-->
            <p>Se viviría mejor sin leyes</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
			<hr>

            <!--Pregunta 67-->
            <p>Me gusta la poesía</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 68-->
            <p>A veces hago rabiar (jugando) a los animales</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 69-->
            <p>Creo que me gustaría el trabajo de guardabosques</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 70-->
            <p>En una discusión o debate, me dejo vencer facilmente</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <hr>

            <!--Pregunta 71-->
            <p>En el momento actual me es difícil tener la esperanza de 
                llegar a ser alguien</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 72-->
            <p>A veces mi alma abandona mi cuerpo</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 73-->
            <p>Decididamente no tengo confianza en mí mismo</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 74-->
            <p>Me gustaría ser florista</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 75-->
            <p>Normalmente siento que la vida vale la pena vivirla</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 76-->
            <p>Se necesita discutir mucho para convencer a la mayor parte de 
                la gente de la verdad</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 77-->
            <p>De vez en cuando dejo para mañana lo que debería hacer hoy</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 78-->
            <p>Le agrado a la mayor parte de la gente que me conoce</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 79-->
            <p>No me importa que se diviertan haciéndome bromas</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 80-->
            <p>Me gustaría ser enfermero</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 81-->
            <p>Creo que la mayor parte de la gente mentiría para conseguir 
                lo que busca</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 82-->
            <p>Hago muchas cosas de las que me arrepiento luego. (Me arrepiento de 
                más cosas o con más frecuencia que otras personas)</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 83-->
            <p>Tengo pocas peleas con las personas de mi familia</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 84-->
            <p>Siendo joven me echaron de clase, una o más veces, por portarme mal</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 85-->
            <p>A veces siento grandes deseos de hacer algo dañino o chocante</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 86-->
            <p>Me gustaría asistir a reuniones o fiestas donde haya mucha alegría 
                y ruido
            </p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 87-->
            <p>Me he encontrado con problemas tan llenos de posibilidades, que no he 
                podido llegar a una decisión
            </p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 88-->
            <p>Creo que las mujeres deben tener tanta libertad sexual como los hombres</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 89-->
            <p>Las luchas más encarnizadas las tengo conmigo mismo</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
			<hr>
            
            <!--Pregunta 90-->
            <p>Yo quiero mucho a mi padre. (O lo quise, si falleció)</p>
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