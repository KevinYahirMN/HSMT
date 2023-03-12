
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
	<title>Preguntas 271-300</title>
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
						Preguntas 271-300
					</span>
				</h4>
			</div>
			<div class="card-body">
                
			
            <form method="post" action="Form_301-330.php">
             <!--Pregunta 271-->
             <p>Creo que mi sensibilidad es más intensa que la de la mayor parte de la gente</p>
             <input type="radio" value="true" name="Q[1]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[1]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 272-->
             <p>En ningún momento de mi vida me ha gustado jugar con muñecos</p>
             <input type="radio" value="true" name="Q[2]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[2]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 273-->
             <p>Para mí, la vida es tensión la mayor parte del tiempo</p>
             <input type="radio" value="true" name="Q[3]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[3]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 274-->
             <p>Soy tan susceptible en algunos asuntos que no puedo hablar de ellos</p>
             <input type="radio" value="true" name="Q[4]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[4]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 275-->
             <p>Me costaba mucho hablar delante de todos en el colegio</p>
             <input type="radio" value="true" name="Q[5]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[5]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 276-->
             <p>Quiero a mi madre (o la quise si falleció)</p>
             <input type="radio" value="true" name="Q[6]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[6]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 277-->
             <p>Incluso cuando estoy con gente, me siento solo la mayor parte del tiempo</p>
             <input type="radio" value="true" name="Q[7]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[7]">
             <label>falso</label>
             <hr>
 
 
             <!--Pregunta 278-->
             <p>Consigo todas las simpatías que debería</p>
             <input type="radio" value="true" name="Q[8]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[8]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 279-->
             <p>Me niego a participar en algunos juegos porque no soy hábil en ellos</p>
             <input type="radio" value="true" name="Q[9]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[9]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 280-->
             <p>Me parece que hago amigos tan rápido como los demás</p>
             <input type="radio" value="true" name="Q[10]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[10]">
             <label>falso</label>
             <hr>
 
             <!--Pregunta 281-->
             <p>Me desagrada tener gente a mi alrededor</p>
             <input type="radio" value="true" name="Q[11]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[11]">
             <label>falso</label>
             <hr>
 
 
             <!--Pregunta 282-->
             <p>Dicen que hablo cuando duermo</p>
             <input type="radio" value="true" name="Q[12]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[12]">
             <label>falso</label>
             <hr>
 
 
             <!--Pregunta 283-->
             <p>Quien provoca la tentación dejando una cosa valiosa sin protegerla es tan culpable del robo como quien la roba</p>
             <input type="radio" value="true" name="Q[13]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[13]">
             <label>falso</label>
             <hr>

            <!--Pregunta 284-->            
            <p>Pienso que casi todo el mundo diria una mentira para evitar problemas</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            <hr>

            <!--Pregunta 285-->
            <p>Soy mas sensible que la mayoria de la gente</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            <hr>
      
            <!--Pregunta 286-->
            <p>A la mayor parte de la gente le desagrada interiormente dejar lo suyo para ayudar a los demás</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>  <br>          
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            <hr>

            <!--Pregunta 287-->            
            <p>Muchos de mis sueños son sobre temas sexuales</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>  <br>          
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            <hr>

            <!--Pregunta 288-->
            <p>Mis padres y familiares encuentran mas defectos en mi de lo que deberían</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            <hr>

            <!--Pregunta 289-->
            <p>Me aturdo fácilmente</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            <hr>

            <!--Pregunta 290-->            
            <p>Me preocupan el dinero y los negocios</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            <hr>

            <!--Pregunta 291-->
            <p>Nunca he estado enamorado de alguien</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            <hr>

            <!--Pregunta 292-->
            <p>Me han asustado ciertas cosas que han hecho algunos de mis familiares</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            <hr>

            <!--Pregunta 293-->            
            <p>Casi nunca sueño</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            <hr>

            <!--Pregunta 294-->
            <p>A menudo me salen manchas rojas en el cuello</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            <hr>

            <!--Pregunta 295-->
            <p>Nunca he tenido parálisis ni sufrido una debilidad desacostumbrada en algunos de mis músculos</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>        <br>    
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            <hr>

            <!--Pregunta 296-->            
            <p>Algunas veces pierdo o se me cambia la voz, incluso sin estar resfriado</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            <hr>

            <!--Pregunta 297-->
            <p>Mi padre o mi padre me obligaron frecuentemente a obedecer, incluso cuando yo pensaba que ello no era razonable</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            <hr>
      
            <!--Pregunta 298-->
            <p>A veces percibo olores extraños</p>
            <input type="radio" value="true" name="[Q28]">
            <label>verdadero</label>        <br>    
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            <hr>

            <!--Pregunta 299-->            
            <p>No puedo concentrarme en una sola cosa</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            <hr>

            <!--Pregunta 300-->
            <p>Tengo razones para sentirme celoso de uno o más de mis familiares</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>          <br>  
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