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
	<title>Preguntas 361-391</title>
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
						Preguntas 361-391
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_392-422.php">
       
       <!--Pregunta 361-->
       <p>Alguien ha tratado de influenciar mi mente</p>
       <input type="radio" value="true" name="Q[1]">
       <label>verdadero</label>      <br>      
       <input type="radio" value="false" name="Q[1]">
       <label>falso</label>
       <hr>
   
       <!--Pregunta 362-->            
       <p>He fingido "estar enfermo" para evitar hacer algo</p>
       <input type="radio" value="true" name="Q[2]">
       <label>verdadero</label>   <br>         
       <input type="radio" value="false" name="Q[2]">
       <label>falso</label>
       <hr>
 
       <!--Pregunta 363-->
       <p>Mis preocupaciones tienden a desaparecer cuando me junto con amigos</p>
       <input type="radio" value="true" name="Q[3]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[3]">
       <label>falso</label>
       <hr>
                                   
       <!--Pregunta 364-->
       <p>Tiendo a abandonar lo que estoy haciendo si me sale mal</p>
       <input type="radio" value="true" name="Q[4]">
       <label>verdadero</label>   <br>         
       <input type="radio" value="false" name="Q[4]">
       <label>falso</label>
       <hr>
                                                             
       <!--Pregunta 365-->            
       <p>Me gusta que la gente conozca lo que realmente pienso</p>
       <input type="radio" value="true" name="Q[5]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[5]">
       <label>falso</label>
       <hr>                   
                                           
       <!--Pregunta 366-->
       <p>He tenido períodos en los que me sentí tan lleno de fuerzas que no necesitaba dormir</p>
       <input type="radio" value="true" name="Q[6]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[6]">
       <label>falso</label>
       <hr>
                      
       <!--Pregunta 367-->
       <p>Siempre que se vea posible evito estar en una multitud</p>
       <input type="radio" value="true" name="Q[7]">
       <label>verdadero</label>      <br>      
       <input type="radio" value="false" name="Q[7]">
       <label>falso</label>
       <hr>                             
                                           
       <!--Pregunta 368-->
       <p>Trato de evitar situaciones de crisis o dificultad</p>
       <input type="radio" value="true" name="Q[8]">
       <label>verdadero</label>      <br>      
       <input type="radio" value="false" name="Q[8]">
       <label>falso</label>
       <hr>
                                                                     
       <!--Pregunta 369-->
       <p>Me considero capaz de lograr lo que me propongo cuando otros creen que no vale la pena</p>
       <input type="radio" value="true" name="Q[9]">
       <label>verdadero</label>     <br>       
       <input type="radio" value="false" name="Q[9]">
       <label>falso</label>
       <hr>                       
                                          
       <!--Pregunta 370-->
       <p>Me gustan las fiestas y reuniones sociales</p>
       <input type="radio" value="true" name="Q[10]">
       <label>verdadero</label>     <br>       
       <input type="radio" value="false" name="Q[10]">
       <label>falso</label>
       <hr>
          
       <!--Pregunta 371-->
       <p>Muchas veces desee pertenecer al sexo opuesto</p>
       <input type="radio" value="true" name="Q[11]">
       <label>verdadero</label>   <br>         
       <input type="radio" value="false" name="Q[11]">
       <label>falso</label>
       <hr>
 
       <!--Pregunta 372-->
       <p>No me enojo fácilmente</p>
       <input type="radio" value="true" name="Q[12]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[12]">
       <label>falso</label>
       <hr>
 
 
                                               
                                           
       <!--Pregunta 373-->
       <p>He hecho algunas cosas malas en el pasado que no se las conté a nadie</p>
       <input type="radio" value="true" name="Q[13]">
       <label>verdadero</label>       <br>     
       <input type="radio" value="false" name="Q[13]">
       <label>falso</label>
       <hr>
                                             
 
                                               
                                          
       <!--Pregunta 374-->
       <p>La mayoria de la gente puede hacer cosas incorrectas con tal de lograr su propósito</p>
       <input type="radio" value="true" name="Q[14]">
       <label>verdadero</label>       <br>     
       <input type="radio" value="false" name="Q[14]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 375-->
       <p>Me pongo nervioso cuando la gente me hacer preguntas personales</p>
       <input type="radio" value="true" name="Q[15]">
       <label>verdadero</label>       <br>     
       <input type="radio" value="false" name="Q[15]">
       <label>falso</label> 
       <hr>                        
                                          
       <!--Pregunta 376-->
       <p>Me siento incapaz de planificar mi futuro</p>
       <input type="radio" value="true" name="Q[16]">
       <label>verdadero</label>      <br>      
       <input type="radio" value="false" name="Q[16]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 377-->
       <p>Me desagrada mi forma de ser</p>
       <input type="radio" value="true" name="Q[17]">
       <label>verdadero</label>   <br>         
       <input type="radio" value="false" name="Q[17]">
       <label>falso</label>
       <hr>
 
       <!--Pregunta 378-->
       <p>Generalmente me enojo cuando amigos o familiares me dan consejos</p>
       <input type="radio" value="true" name="Q[18]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[18]">
       <label>falso</label>
       <hr>
 
       <!--Pregunta 379-->
       <p>Me golpearon mucho cuando era chico</p>
       <input type="radio" value="true" name="Q[19]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[19]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 380-->
       <p>Me molesto cuando la gente me elogia</p>
       <input type="radio" value="true" name="Q[20]">
       <label>verdadero</label>  <br>          
       <input type="radio" value="false" name="Q[20]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 381-->
       <p>Me disgusta escuchar a la gente que da sus opiniones acerca de la vida</p>
       <input type="radio" value="true" name="Q[21]">
       <label>verdadero</label>     <br>       
       <input type="radio" value="false" name="Q[21]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 382-->
       <p>A menudo he tenido desacuerdos serios con gente amiga</p>
       <input type="radio" value="true" name="Q[22]">
       <label>verdadero</label>  <br>          
       <input type="radio" value="false" name="Q[22]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 383-->
       <p>Se que puedo contar con la ayuda de mi familia cuando las cosas me van mal</p>
       <input type="radio" value="true" name="Q[23]">
       <label>verdadero</label>      <br>      
       <input type="radio" value="false" name="Q[23]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 384-->
       <p>Me gustaba jugar "a la mamá" o "al papá" cuando era niño</p>
       <input type="radio" value="true" name="Q[24]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[24]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 385-->
       <p>No le tengo miedo al fuego</p>
       <input type="radio" value="true" name="Q[25]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[25]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 386-->
       <p>Muchas veces me he alejado de alguna persona por temor de decir 
         o hacer algo de lo que después podría arrepentirme</p>
       <input type="radio" value="true" name="Q[26]">
       <label>verdadero</label>   <br>         
       <input type="radio" value="false" name="Q[26]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 387-->
       <p>Sólo puedo expresar lo que realmente siento cuando bebo</p>
       <input type="radio" value="true" name="Q[27]">
       <label>verdadero</label>  <br>          
       <input type="radio" value="false" name="Q[27]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 388-->
       <p>Rara vez tengo momentos de depresión (de bajoneo)</p>
       <input type="radio" value="true" name="Q[28]">
       <label>verdadero</label>   <br>         
       <input type="radio" value="false" name="Q[28]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 389-->
       <p>Me han dicho con frecuencia que tengo mal carácter</p>
       <input type="radio" value="true" name="Q[29]">
       <label>verdadero</label>  <br>          
       <input type="radio" value="false" name="Q[29]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 390-->
       <p>Desearia haber podido dejar de preocuparme por cosas que dije 
         y que pudieron lastimar los sentimientos de algunas personas</p>
       <input type="radio" value="true" name="Q[30]">
       <label>verdadero</label>     <br>       
       <input type="radio" value="false" name="Q[30]">
       <label>falso</label>
       <hr>
       
       <!--Pregunta 391-->
       <p>Me siento incapaz de contarle a alguien todas mis cosas</p>
       <input type="radio" value="true" name="Q[31]">
       <label>verdadero</label>    <br>        
       <input type="radio" value="false" name="Q[31]">
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