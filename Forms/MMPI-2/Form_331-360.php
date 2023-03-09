<?php
session_start();
$answer = $_SESSION['answer'];

$postanswer = $_POST['Q'];

for($i = 1; $i < 31; $i++){
   array_push($answer, $postanswer[$i]);
}

$_SESSION['answer'] = $answer;
?>


<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
   <head>
    <title>Preguntas 331-360</title>
    <link rel="shortcut icon" href="ico.ico" />
   </head>
   <body>
    <header>
        <h1 id="titulo"> Cuestionario </h1>
        <h2> Responda las siguientes preguntas </h2>
      </header>
      
      <main id="principal">
        <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
        
        <form method="post" action="Form_361-391.php">
            <!--Pregunta 331-->            
            <p>Me inclino a tomar las cosas muy en serio</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>  <br>          
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>

            <!--Pregunta 332-->
            <p>A veces me ha gustado ser heriido por una persona querida</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>

            <!--Pregunta 333-->
            <p>La gente dice de mi cosas insultantes y vulgares</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 334-->
            <p> Me siento incomodo cuando estoy "bajo techo” (dentro de un edificio o habitación)</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>       <br>      
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>

            <!--Pregunta 335-->
           <p>Soy poco conciente de mi mísmo</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>

            <!--Pregunta 336-->            
            <p>Estoy seguro de que alguien controla mi mente</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 337-->
            <p>En las fiestas y reuniones, en vez de unirme al grupo, es más probable que me siente solo o con otra persona</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>         <br>    
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>

            <!--Pregunta 338-->
            <p>La gente me decepciona con frecuencia</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>        <br>     
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>

            <!--Pregunta 339-->            
            <p>frecuentemente mis proyectos me han parecido tan llenos de dificultades que he tenido que abandonarlos</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>        <br>     
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>

            <!--Pregunta 340-->
            <p>Me gusta mucho ir a bailar</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>        <br>     
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>

            <!--Pregunta 341-->
            <p>Durante ciertos periodos mi mente parece trabajar más despacio que de costumbre</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            
            <!--Pregunta 342-->            
            <p>En micros, trenes, suelo conversar con extraños</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>

            <!--Pregunta 343-->
          <p>Me gustan los niños</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
      
            <!--Pregunta 344-->
            <p>Me gusta jugar y apostar</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>       <br>      
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            
            <!--Pregunta 345-->            
            <p>Si me dieran la oportunidad, podria hacer cosas que beneficiarian mucho al mundo</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>

            <!--Pregunta 346-->
           <p>Con frecuencia me he encontrado con personas con reputación de expertas, pero que no eran mejores que yo</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>

            <!--Pregunta 347-->
            <p>Me siento fracasado cuando hablan del éxito de alguien que conozco bien</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>

            <!--Pregunta 348-->
            <p>Con frecuencia pienso "Me gustaría volver a ser niño"</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>

            <!--Pregunta 349-->            
            <p>Nada me hace más feliz que estar solo</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>     <br>    
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>

            <!--Pregunta 350-->
            <p>Si me dieran la oportunidad podría ser un buen lider</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>      <br>       
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>

            <!--Pregunta 351-->
           <p>Me molestan las anécdotas indecentes</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>   <br>          
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>

            <!--Pregunta 352-->            
            <p>Normalmente la gente pide para sus propios derechos más respeto que el que da a los de otras personas</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>  <br>           
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>

            <!--Pregunta 353-->
            <p>Me gustan las reuniones sociales porque puedo estar con gente</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>  <br>           
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>

            <!--Pregunta 354-->
            <p>Trato de memorizar los cuentos divertidos para poder contárselos a otros</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>

            <!--Pregunta 355-->
           <p>Una o más veces en mi vida sentí que alguien me obligó a hacer cosas hipnotizándome</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>

            <!--Pregunta 356-->            
            <p>Me resulta difícil abandonar una tarea una vez que la empecé</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>   <br>          
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>

            <!--Pregunta 357-->
            <p>Generalmente no me involucro en los chismes que cuentan los que me rodean</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>   <br>          
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
      
            <!--Pregunta 358-->
            <p>A menudo han sentido celos de mis ideas porque no las pensaron antes</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label>     <br>        
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>

            <!--Pregunta 359-->            
            <p>Me encanta estar con mucha gente (recitales, manifestaciones)</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>    <br>         
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>

            <!--Pregunta 360-->
            <p>No me preocupa encontrarme con extraños</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>   <br>          
            <input type="radio" value="false" name="Q[30]">
            <label>falso</label>

        

       
            
   
      
          
          <div>
            <button type="submit" id="boton" class="submit-button">
              <strong> Finalizar </strong>
            </button>
          </div>
      
        </form>
      </main>
      
      <footer>
        <h3> <strong> Presione el siguiente botón para continuar </strong></h3>
        Hecho por estudiantes del ITT
      </footer>


   </body>
</html>




        
