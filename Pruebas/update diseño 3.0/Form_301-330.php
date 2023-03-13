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
	<title>Preguntas 301-330</title>
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
						Preguntas 301-330
					</span>
				</h4>
			</div>
			<div class="card-body">

            <form method="post" action="Form_331-360.php">
            <!--Pregunta 301-->
            <p>Casi todo el tiempo siento ansiedad a causa de algo o alguien</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            <hr>

            <!--Pregunta 302-->            
            <p>Me impaciento fácilmente con la gente</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            <hr>

            <!--Pregunta 303-->
            <p>Muchísimas veces me gustaría estar muerto</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            <hr>

            <!--Pregunta 304-->
            <p>Muchísimas veces me excito tanto que me cuesta dormirme por las noches</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            <hr>

            <!--Pregunta 305-->            
            <p>Sin duda he tenido que preocuparme por más cosas que las que me correspondían</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            <hr>

            <!--Pregunta 306-->
            <p>Nadie parece comprenderme</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            <hr>

            <!--Pregunta 307-->
            <p>A veces oigo tan bien que me molesta</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            <hr>
            
            <!--Pregunta 308-->            
            <p>Olvido enseguida lo que la gente me dice</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            <hr>

            <!--Pregunta 309-->
            <p>Normalmente tengo que pararme a pensar antes de actuar, incluso en asuntos sin importancia</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>   <br>         
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            <hr>
      
            <!--Pregunta 310-->
            <p>A menudo cruzo la calle para no encontrarme con alguna persona</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <hr>

            <!--Pregunta 311-->            
            <p>Con frecuencia siento como si las cosas no fueran reales</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label>          <br>  
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            <hr>

            <!--Pregunta 312-->
            <p>La única parte interesante de los diarios es las paginas de los chistes</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label>         <br>   
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            <hr>

            <!--Pregunta 313-->
            <p>Tengo la costumbre de contar con objetos sin importancia, como las bombillas de un letrero luminoso o cosas similares</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            <hr>

            <!--Pregunta 314-->
            <p>Carezco de enemigos cuando que deseen realmente hacerme daño</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            <hr>

            <!--Pregunta 315-->            
            <p>Tiendo a ponerme en guardia con aquellos que se muestran algo más amables de lo que yo esperaba</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>    <br>    
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            <hr>

            <!--Pregunta 316-->
            <p>Tengo pensamientos extraños y originales</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            <hr>

            <!--Pregunta 317-->
            <p>Tengo pensamientos extraños y originales</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            <hr>

            <!--Pregunta 318-->            
            <p>Normalmente espero que éxito en las cosas que hago</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            <hr>

            <!--Pregunta 319-->
            <p>Oigo cosas mas extrañas cuando estoy solo</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            <hr>

            <!--Pregunta 320-->
            <p>He tenido miedo de cosas o personas que sabía que no podían hacerme daño</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>   <br>         
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            <hr>

            <!--Pregunta 321-->
            <p>No me dan miedo entrar solo a una habitación donde hay gente reunida hablando</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>   <br>         
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            <hr>

            <!--Pregunta 322-->            
            <p>Me da miedo utilizar cuchillos u objetos muy afilados o puntiagudos</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            <hr>

            <!--Pregunta 323-->
            <p>Algunas veces gozo con herir a personas que amo</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            <hr>
      
            <!--Pregunta 324-->
            <p>Me resulta fácil lograr que la gente me tenga miedo y eso me divierte</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>   <br>         
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            <hr>

            <!--Pregunta 325-->            
            <p>Tengo más dificultad para concetrarme que la que otros parecen tener</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            <hr>

            <!--Pregunta 326-->
            <p>Varias veces he dejado de hacer algo por considerar insuficiente mi habilidad</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            <hr>

            <!--Pregunta 327-->
            <p>Se me ocurren palabras feas, a veces horribles, y no puedo dejarlas de lado.</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            <hr>

            <!--Pregunta 328-->            
            <p>Algunas veces me ronda en la cabeza un pensamiento sin Importancia y me molesta durante días</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            <hr>

            <!--Pregunta 329-->
            <p>Casi a diario ocurre algo que me asusta</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            <hr>

            <!--Pregunta 330-->
            <p>A veces siento que me sobran energías</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>        <br>    
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