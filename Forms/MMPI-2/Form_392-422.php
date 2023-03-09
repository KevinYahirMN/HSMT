<?php
session_start();
$answer = $_SESSION['answer'];

$postanswer = $_POST['Q'];

for($i = 1; $i < 32; $i++){
   array_push($answer, $postanswer[$i]);
}

$_SESSION['answer'] = $answer;
?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <head>
    <title>Preguntas 392-422</title>
    <link rel="shortcut icon" href="ico.ico" />
  </head>
  <body>
    <header>
      <h1 id="titulo"> Cuestionario </h1>
      <h2> Responda las siguientes preguntas </h2>
    </header>
    <main id="principal">
      <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
      <form method="post" action="Form_423-453.php">
        
        <!--Pregunta 392-->
        <p>Le tengo miedo a los relámpagos</p>
        <input type="radio" value="true" name="Q[1]">
        <label>verdadero</label><br>        
        <input type="radio" value="false" name="Q[1]">
        <label>falso</label>
        
        <!--Pregunta 393-->
        <p>Me gusta que los demás estén intrigados acerca de lo que voy a hacer</p>
        <input type="radio" value="true" name="Q[2]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[2]">
        <label>falso</label>
        
        <!--Pregunta 394-->
        <p>Algunas veces me ha parecido que las dificultades se acumulaban de tal modo que no podia superarlas</p>
        <input type="radio" value="true" name="Q[3]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[3]">
        <label>falso</label>
        
        <!--Pregunta 395-->
        <p>Me da miedo estar solo en la oscuridad</p>
        <input type="radio" value="true" name="Q[4]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[4]">
        <label>falso</label>
        
        <!--Pregunta 396-->
        <p>Muchas veces me ha caido mal ser incomprendido cuando trataba de evitar que alguien se equivocara</p>
        <input type="radio" value="true" name="Q[5]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[5]">
        <label>falso</label>
        
        <!--Pregunta 397-->
        <p>Le tengo miedo a las tormentas con mucho viento</p>
        <input type="radio" value="true" name="Q[6]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[6]">
        <label>falso</label>
        
        <!--Pregunta 398-->
        <p>frecuentemente pido consejos a otras personas</p>
        <input type="radio" value="true" name="Q[7]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[7]">
        <label>falso</label>
        
        <!--Pregunta 399-->
        <p>El futuro es demasiado incierto para que una persona haga planes importantes</p>
        <input type="radio" value="true" name="Q[8]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[8]">
        <label>falso</label>
        
        <!--Pregunta 400-->
        <p>A menudo, incluso cuando todo me sale bien, siento que nada me importa</p>
        <input type="radio" value="true" name="Q[9]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[9]">
        <label>falso</label>
        
        <!--Pregunta 401-->
        <p>No le tengo miedo al agua</p>
        <input type="radio" value="true" name="Q[10]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[10]">
        <label>falso</label>
        
        <!--Pregunta 402-->
        <p>A menudo tengo que "consultar con la almohada" antes de tomar una decisión</p>
        <input type="radio" value="true" name="Q[11]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[11]">
        <label>falso</label>
        
        <!--Pregunta 403-->
        <p>A menudo la gente ha interpretado mal mis intenciones cuando trataba de ayudarla</p>
        <input type="radio" value="true" name="Q[12]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[12]">
        <label>falso</label>
        
        <!--Pregunta 404-->
        <p>No tengo dificultad al tragar</p>
        <input type="radio" value="true" name="Q[13]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[13]">
        <label>falso</label>
        
        <!--Pregunta 405-->
        <p>Soy una persona tranquila y no me altero fácilmente</p>
        <input type="radio" value="true" name="Q[14]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[14]">
        <label>falso</label>
        
        <!--Pregunta 406-->
        <p>Me gusta combatir a los criminales con sus propias armas</p>
        <input type="radio" value="true" name="Q[15]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[15]">
        <label>falso</label>
        
        <!--Pregunta 407-->
        <p>Merezco un castigo severo por mis pecados</p>
        <input type="radio" value="true" name="Q[16]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[16]">
        <label>falso</label>
        
        <!--Pregunta 408-->
        <p>Me tomo tan en serio las preocupaciones que me cuesta sacármelas de la cabeza</p>
        <input type="radio" value="true" name="Q[17]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[17]">
        <label>falso</label>
        
        <!--Pregunta 409-->
        <p>Me molesta que alguien me observe cuando trabajo aunque sepa que lo hago bien</p>
        <input type="radio" value="true" name="Q[18]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[18]">
        <label>falso</label>
        
        <!--Pregunta 410-->
        <p>A menudo me molesta tanto que alguien trate de "colarse" delante de mí
           en una cola, que tengo que decirle algo</p>
        <input type="radio" value="true" name="Q[19]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[19]">
        <label>falso</label>
        
        <!--Pregunta 411-->
        <p>A veces pienso que no valgo para nada</p>
        <input type="radio" value="true" name="Q[20]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[20]">
        <label>falso</label>
        
        <!--Pregunta 412-->
        <p>Cuando era chico me hacia "la rabona" en la escuela</p>
        <input type="radio" value="true" name="Q[21]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[21]">
        <label>falso</label>
        
        <!--Pregunta 413-->
        <p>Uno o varios de mis familiares son muy nerviosos</p>
        <input type="radio" value="true" name="Q[22]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[22]">
        <label>falso</label>
        
        <!--Pregunta 414-->
        <p>A veces he tenvalueo que ser duro con personas groseras o inoportunas</p>
        <input type="radio" value="true" name="Q[23]">
        <label>verdadero</label><br>
        <input type="radio" value="false" name="Q[23]">
        <label>falso</label>
        
        <!--Pregunta 415-->
        <p>Me preocupo bastante por posibles desgracias</p>
        <input type="radio" value="true" name="Q[24]">
        <label>verdadero</label>      <br>       
        <input type="radio" value="false" name="Q[24]">
        <label>falso</label>
        
        <!--Pregunta 416-->
        <p>Tengo opiniones políticas muy definvalueas</p>
        <input type="radio" value="true" name="Q[25]">
        <label>verdadero</label>    <br>         
        <input type="radio" value="false" name="Q[25]">
        <label>falso</label>
        
        <!--Pregunta 417-->
        <p>Me gustaria ser corredor de automovilismo</p>
        <input type="radio" value="true" name="Q[26]">
        <label>verdadero</label>      <br>       
        <input type="radio" value="false" name="Q[26]">
        <label>falso</label>
        
        <!--Pregunta 418-->
        <p>Es correcto bordear los límites de la Ley con tal de no violarla claramente</p>
        <input type="radio" value="true" name="Q[27]">
        <label>verdadero</label>  <br>           
        <input type="radio" value="false" name="Q[27]">
        <label>falso</label>
        
        <!--Pregunta 419-->
        <p>Me desagradan tanto algunas personas, que me alegro interiormente cuando les llaman la atención por algo que han hecho</p>
        <input type="radio" value="true" name="Q[28]">
        <label>verdadero</label>   <br>          
        <input type="radio" value="false" name="Q[28]">
        <label>falso</label>
        
        <!--Pregunta 420-->
        <p>Me pone nervioso tener que esperar</p>
        <input type="radio" value="true" name="Q[29]">
        <label>verdadero</label>    <br>         
        <input type="radio" value="false" name="Q[29]">
        <label>falso</label>
        
        <!--Pregunta 421-->
        <p>Tiendo a dejar algo que deseo hacer porque otros piensan que lo encaro incorrectamente</p>
        <input type="radio" value="true" name="Q[30]">
        <label>verdadero</label>   <br>          
        <input type="radio" value="false" name="Q[30]">
        <label>falso</label>
        
        <!--Pregunta 422-->
        <p>Cuando era joven me apasionaba lo emocionante</p>
        <input type="radio" value="true" name="Q[31]">
        <label>verdadero</label>   <br>          
        <input type="radio" value="false" name="Q[31]">
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
