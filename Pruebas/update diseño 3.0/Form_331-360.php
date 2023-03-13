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
	<title>Preguntas 331-360</title>
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
						Preguntas 331-360
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_361-391.php">
            <!--Pregunta 331-->            
            <p>Me inclino a tomar las cosas muy en serio</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>  <br>          
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            <hr>

            <!--Pregunta 332-->
            <p>A veces me ha gustado ser heriido por una persona querida</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            <hr>

            <!--Pregunta 333-->
            <p>La gente dice de mi cosas insultantes y vulgares</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            <hr>

            <!--Pregunta 334-->
            <p> Me siento incomodo cuando estoy "bajo techo” (dentro de un edificio o habitación)</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>       <br>      
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            <hr>

            <!--Pregunta 335-->
           <p>Soy poco conciente de mi mísmo</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            <hr>

            <!--Pregunta 336-->            
            <p>Estoy seguro de que alguien controla mi mente</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            <hr>

            <!--Pregunta 337-->
            <p>En las fiestas y reuniones, en vez de unirme al grupo, es más probable que me siente solo o con otra persona</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>         <br>    
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            <hr>

            <!--Pregunta 338-->
            <p>La gente me decepciona con frecuencia</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>        <br>     
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            <hr>

            <!--Pregunta 339-->            
            <p>frecuentemente mis proyectos me han parecido tan llenos de dificultades que he tenido que abandonarlos</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>        <br>     
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            <hr>

            <!--Pregunta 340-->
            <p>Me gusta mucho ir a bailar</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>        <br>     
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <hr>

            <!--Pregunta 341-->
            <p>Durante ciertos periodos mi mente parece trabajar más despacio que de costumbre</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 342-->            
            <p>En micros, trenes, suelo conversar con extraños</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            <hr>

            <!--Pregunta 343-->
            <p>Me gustan los niños</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            <hr>
      
            <!--Pregunta 344-->
            <p>Me gusta jugar y apostar</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>       <br>      
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 345-->            
            <p>Si me dieran la oportunidad, podria hacer cosas que beneficiarian mucho al mundo</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            <hr>

            <!--Pregunta 346-->
            <p>Con frecuencia me he encontrado con personas con reputación de expertas, pero que no eran mejores que yo</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            <hr>

            <!--Pregunta 347-->
            <p>Me siento fracasado cuando hablan del éxito de alguien que conozco bien</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            <hr>

            <!--Pregunta 348-->
            <p>Con frecuencia pienso "Me gustaría volver a ser niño"</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            <hr>

            <!--Pregunta 349-->            
            <p>Nada me hace más feliz que estar solo</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>     <br>    
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            <hr>

            <!--Pregunta 350-->
            <p>Si me dieran la oportunidad podría ser un buen lider</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            <hr>

            <!--Pregunta 351-->
           <p>Me molestan las anécdotas indecentes</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>   <br>          
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            <hr>

            <!--Pregunta 352-->            
            <p>Normalmente la gente pide para sus propios derechos más respeto que el que da a los de otras personas</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>  <br>           
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            <hr>

            <!--Pregunta 353-->
            <p>Me gustan las reuniones sociales porque puedo estar con gente</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>  <br>           
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            <hr>

            <!--Pregunta 354-->
            <p>Trato de memorizar los cuentos divertidos para poder contárselos a otros</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            <hr>

            <!--Pregunta 355-->
           <p>Una o más veces en mi vida sentí que alguien me obligó a hacer cosas hipnotizándome</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            <hr>

            <!--Pregunta 356-->            
            <p>Me resulta difícil abandonar una tarea una vez que la empecé</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>   <br>          
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            <hr>

            <!--Pregunta 357-->
            <p>Generalmente no me involucro en los chismes que cuentan los que me rodean</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>   <br>          
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            <hr>
      
            <!--Pregunta 358-->
            <p>A menudo han sentido celos de mis ideas porque no las pensaron antes</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            <hr>

            <!--Pregunta 359-->            
            <p>Me encanta estar con mucha gente (recitales, manifestaciones)</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            <hr>

            <!--Pregunta 360-->
            <p>No me preocupa encontrarme con extraños</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>   <br>          
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