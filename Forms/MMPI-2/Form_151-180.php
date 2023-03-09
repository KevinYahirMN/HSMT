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
    <title>Preguntas 151-180</title>
    <link rel="shortcut icon" href="ico.ico" />
   </head>
   <body>
    <header>
        <h1 id="titulo"> Cuestionario </h1>
        <h2> Responda las siguientes preguntas </h2>
      </header>
      
      <main id="principal">
        <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
        
        <form method="post" action="Form_181-210.php">
            <!--Pregunta 151-->
            <p>Me molesta que alguien se haya burlado tan inteligentemente 
                de mi que yo haya tenido que admitir que lo logró </p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            
            <!--Pregunta 152-->
            <p>No me canso facilmente</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            
            <!--Pregunta 153-->
            <p>Me gusta conocer alguna gente importante porque esto me hace 
                sentir importante</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 154-->
            <p>Siento miedo cuando miro hacia abajo desde un lugar alto</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>

            <!--Pregunta 155-->
            <p>No me sentiría nervioso si algún familiar tuviera problemas 
                con la ley</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>

            <!--Pregunta 156-->
            <p>Solo me siento feliz cuando viajo de un lado para otro</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 157-->
            <p>Me es indiferente lo que los demás piensen de mí</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            
            <!--Pregunta 158-->
            <p>Me siento incómodo cuando tengo que hacer una payasada 
                en una reunión, incluso aunque otros estén haciendo</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            
            <!--Pregunta 159-->
            <p>Nunca he tenido un desmayo o desvanecimiento</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            
            <!--Pregunta 160-->
            <p>Me gustaba ir al colegio</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            
            <!--Pregunta 161-->
            <p>Frecuentemente tengo que esforzarme para no demostrar 
                que soy tímido</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            
            <!--Pregunta 162-->
            <p>Alguien ha intentado envenenarme</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            
            <!--Pregunta 163-->
            <p>Las serpientes no me dan mucho miedo</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            
            <!--Pregunta 164-->
            <p>Nunca o rara vez tengo mareos</p>
            <input type="radio" value="true" name="Q[14">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            
            <!--Pregunta 165-->
            <p>Mi memoria parece ser normal</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            
            <!--Pregunta 166-->
            <p>Me preocupan los temas sexuales</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>

            <!--Pregunta 167-->
            <p>Me es difícil entablar una conversación cuando 
                recién conozco a alguien</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            
            <!--Pregunta 168-->
            <p>He tenido épocas durante las cuales he realizado
                 actividades que luego no recordaba haber hecho</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            
            <!--Pregunta 169-->
            <p>Cuando estoy aburrido me gusta promover algo excitante</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            
            <!--Pregunta 170-->
            <p>Tengo miedo de volverme loco</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            
            <!--Pregunta 171-->
            <p>Estoy en contra de dar dinero a los mendigos</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            
            <!--Pregunta 172-->
            <p>Frecuentemente noto temblar mis manos cuando intento
                 hacer algo</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            
            <!--Pregunta 173-->
            <p>Puedo leer mucho tiempo sin que se me canse la vista</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>

            <!--Pregunta 174-->
            <p>Me gusta leer y estudiar acerca de lo que estoy trabajando</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>

            <!--Pregunta 175-->
            <p>Siento debilidad general la mayor parte del tiempo</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>

            <!--Pregunta 176-->
            <p>Muy pocas veces me duele la cabeza</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>

            <!--Pregunta 177-->
            <p>Mis manos siguen siendo habiles</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            
            <!--Pregunta 178-->
            <p>A veces, cuando estoy preocupado, comienzo a sudar, lo que
                 me molesta mucho</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            
            <!--Pregunta 179-->
            <p>No he tenidzo dificultades para mantener el equilibrio al
                 caminar</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            
            <!--Pregunta 180-->
            <p>Algo no anda bien en mi cabeza</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label><br>
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












     
            

       