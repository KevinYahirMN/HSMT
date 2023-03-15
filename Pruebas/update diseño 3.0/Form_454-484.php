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
	<title>Preguntas 454-484</title>
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
						Preguntas 454-484
					</span>
				</h4>
			</div>
			<div class="card-body">

          <form method="post" action="Form_485-515.php">
          
          <!--Pregunta 454-->
          <p>Para mí el futuro carece de esperanza</p>
          <input type="radio" id="true" name="Q[1]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[1]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 455-->
          <p>Mis familiares y parientes más cercanos se llevan bastante bien</p>
          <input type="radio" id="true" name="Q[2]">
          <label>verdadero</label>     <br>       
          <input type="radio" id="false" name="Q[2]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 456-->
          <p>Me gustaría tener ropa cara</p>
          <input type="radio" id="true" name="Q[3]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[3]">
          <label>falso</label>
          <hr>
                                                                          
          <!--Pregunta 457-->
          <p>La gente puede hacerme cambiar de opinión muy fácilmente, incluso en materias en las que creía tener ya un criterio firme</p>
          <input type="radio" id="true" name="Q[4]">
          <label>verdadero</label>  <br>          
          <input type="radio" id="false" name="Q[4]">
          <label>falso</label>
          <hr>
                                 
          <!--Pregunta 458-->
          <p>Ciertos animales me ponen nervioso</p>
          <input type="radio" id="true" name="Q[5]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[5]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 459-->
          <p>Puedo soportar tanto dolor como los demás</p>
          <input type="radio" id="true" name="Q[6]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[6]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 460-->
          <p>Varias veces he sido el último en darme por vencido al tratar de hacer algo</p>
          <input type="radio" id="true" name="Q[7]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[7]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 461-->
          <p>Me pone de mal humor que la gente me apure</p>
          <input type="radio" id="true" name="Q[8]">
          <label>verdadero</label>  <br>          
          <input type="radio" id="false" name="Q[8]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 462-->
          <p>No tengo miedo a los ratones</p>
          <input type="radio" id="true" name="Q[9]">
          <label>verdadero</label>    <br>        
          <input type="radio" id="false" name="Q[9]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 463-->
          <p>Varias veces a la semana siento como si fuera a suceder algo espantoso</p>
          <input type="radio" id="true" name="Q[10]">
          <label>verdadero</label>      <br>      
          <input type="radio" id="false" name="Q[10]">
          <label>falso</label>
          <hr>
          
          <!--Pregunta 464-->
          <p>Me siento cansado una buena parte del tiempo</p>
          <input type="radio" id="true" name="Q[11]">
          <label>verdadero</label>      <br>      
          <input type="radio" id="false" name="Q[11]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 465-->
          <p>Me gusta arreglar las cerraduras de las puertas</p>
          <input type="radio" id="true" name="Q[12]">
          <label>verdadero</label>        <br>    
          <input type="radio" id="false" name="Q[12]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 466-->
          <p>Algunas veces estoy seguro de que otro puede decir lo que estoy pensando</p>
          <input type="radio" id="true" name="Q[13]">
          <label>verdadero</label>         <br>   
          <input type="radio" id="false" name="Q[13]">
          <label>falso</label>
          <hr>
           
          <!--Pregunta 467-->
          <p>Me gusta leer temas científicos</p>
          <input type="radio" id="true" name="Q[14]">
          <label>verdadero</label>       <br>     
          <input type="radio" id="false" name="Q[14]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 468-->
          <p>Temo estar solo en lugares amplios y abiertos</p>
          <input type="radio" id="true" name="Q[15]">
          <label>verdadero</label>    <br>        
          <input type="radio" id="false" name="Q[15]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 469-->
          <p>Algunas veces me siento al borde de uan crisis nerviosa</p>
          <input type="radio" id="true" name="Q[16]">
          <label>verdadero</label>     <br>       
          <input type="radio" id="false" name="Q[16]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 470-->
          <p>Muchas personas tienen mala conducta sexual</p>
          <input type="radio" id="true" name="Q[17]">
          <label>verdadero</label>    <br>        
          <input type="radio" id="false" name="Q[17]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 471-->
          <p>A menudo he sentido miedo en plena noche</p>
          <input type="radio" id="true" name="Q[18]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[18]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 472-->
          <p>Me molesta mucho olvidarme donde pongo las cosas</p>
          <input type="radio" id="true" name="Q[19]">
          <label>verdadero</label>        <br>    
          <input type="radio" id="false" name="Q[19]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 473-->
          <p>La persona hacia quien sentía más afecto y admiración cuando era niño, fue una mujer (madre, hermana tía u otra mujer)</p>
          <input type="radio" id="true" name="Q[20]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[20]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 474-->
          <p>Me gustan más las historias de aventuras que las románticas</p>
          <input type="radio" id="true" name="Q[21]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[21]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 475-->
          <p>A veces me confundo y no sé que decir</p>
          <input type="radio" id="true" name="Q[22]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[22]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 476-->
          <p>Soy una persona poco agradable</p>
          <input type="radio" id="true" name="Q[23]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[23]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 477-->
          <p>Me gustan los deportes fuertes como el fútbol o rugby</p>
          <input type="radio" id="true" name="Q[24]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[24]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 478-->
          <p>Detesto a mi familia</p>
          <input type="radio" id="true" name="Q[25]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[25]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 479-->
          <p>Algunas personas piensan que es difícil conocerme, saber como soy</p>
          <input type="radio" id="true" name="Q[26]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[26]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 480-->
          <p>Paso mucho tiempo a solas</p>
          <input type="radio" id="true" name="Q[27]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[27]">
          <label>falso</label>
          <hr>
          <!--Pregunta 481-->
          <p>Me gusta que la gente conozca mi punto de vista cuando hacen cosas que me enojan</p>
          <input type="radio" id="true" name="Q[28]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[28]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 482-->
          <p>Me cuesta tomar decisiones</p>
          <input type="radio" id="true" name="Q[29]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[29]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 483-->
          <p>Soy una persona poca atractiva</p>
          <input type="radio" id="true" name="Q[30]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[30]">
          <label>falso</label>
          <hr>
            
          <!--Pregunta 484-->
          <p>La gente es poco amable conmigo</p>
          <input type="radio" id="true" name="Q[31]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[31]">
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
					
			
					  
