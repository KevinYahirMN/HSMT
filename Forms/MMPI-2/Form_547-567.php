<?php
session_start();
$answer = $_SESSION['answer'];

$postanswer = $_POST['Q'];

for($i = 1; $i < 22; $i++){
   array_push($answer, $postanswer[$i]);
}

$_SESSION['answer'] = $answer;
?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="style.css">
  <head>
    <title>Preguntas 547-567</title>
    <link rel="shortcut icon" href="ico.ico" />
  </head>
  <body>
    <header>
      <h1 id="titulo"> Cuestionario </h1>
      <h2> Responda las siguientes preguntas </h2>
    </header>
    
    <main id="principal">
      <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
      
      <form method="post" action="../../Scales/Scales.php">
        <!--Pregunta 547-->
        <p>Guardo cosas que nunca uso</p>
        <input type="radio" id="true" name="Q[1]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[1]">
        <label>Falso</label>

        <!--Pregunta 548-->
        <p>He estado tan enojado que llegué a golpear y lastimar a una persona</p>
        <input type="radio" id="true" name="Q[2]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[2]">
        <label>Falso</label>

        <!--Pregunta 549-->
        <p>En todo lo que hago, siento que me están tomando</p>
        <input type="radio" id="true" name="Q[3]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[3]">
        <label>Falso</label>

        <!--Pregunta 550-->
        <p>Estoy bastante alejado de mis familiares actualmente.</p>
        <input type="radio" id="true" name="Q[4]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[4]">
        <label>Falso</label>

        <!--Pregunta 551-->
        <p> A veces siento que escuchan lo que estoy pensando</p>
        <input type="radio" id="true" name="Q[5]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[5]">
        <label>Falso</label>

        <!--Pregunta 552-->
        <p>Cuando estoy triste, me hace bien visitar amigos</p>
        <input type="radio" id="true" name="Q[6]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[6]">
        <label>Falso</label>

        <!--Pregunta 553-->
        <p>Siento que lo que me está pasando ahora ya me sucedió</p>
        <input type="radio" id="true" name="Q[7]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[7]">
        <label>Falso</label>
        
        <!--Pregunta 554-->
        <p>Cuando tengo problemas serios,siento ganas de salir corriendo</p>
        <input type="radio" id="true" name="Q[8]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[8]">
        <label>Falso</label>

        <!--Pregunta 555-->
        <p>Me da miedo entrar a una habitación oscura en mi propia casa</p>
        <input type="radio" id="true" name="Q[9]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[9]">
        <label>Falso</label>
         
        <!--Pregunta 556-->
        <p>Me preocupo mucho por el dinero</p>
        <input type="radio" id="true" name="Q[10]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[10]">
        <label>Falso</label>

        <!--Pregunta 557-->
        <p>El hombre debe ser la cabeza de la familia</p>
        <input type="radio" id="true" name="Q[11]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[11]">
        <label>Falso</label>

        <!--Pregunta 558-->
        <p>Sólo me siento relajado en mi casa</p>
        <input type="radio" id="true" name="Q[12]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[12]">
        <label>Falso</label>

        <!--Pregunta 559-->
        <p>Mis compañeros de trabajo entienden muy poco mis problemas</p>
        <input type="radio" id="true" name="Q[13]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[13]">
        <label>Falso</label>

        <!--Pregunta 560-->
        <p>Estoy conforme con el dinero que gano</p>
        <input type="radio" id="true" name="Q[14]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[14]">
        <label>Falso</label>

        <!--Pregunta 561-->
        <p>Generalmente tengo suficiente energia para cumplir con mis tareas</p>
        <input type="radio" id="true" name="Q[15]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[15]">
        <label>Falso</label>

        <!--Pregunta 562-->
        <p>Me resulta dificil aceptar elogios</p>
        <input type="radio" id="true" name="Q[16]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[16]">
        <label>Falso</label>

        <!--Pregunta 563-->
        <p>En la mayoría de los matrimonios, una de las personas o ambas son poco felices.</p>
        <input type="radio" id="true" name="Q[17]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[17]">
        <label>Falso</label>
        
        <!--Pregunta 564-->
        <p>Casi nunca pierdo el control</p>
        <input type="radio" id="true" name="Q[18]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[18]">
        <label>Falso</label>

        <!--Pregunta 565-->
        <p>Me cuesta mucho esfuerzo recordar lo que me dicen</p>
        <input type="radio" id="true" name="Q[19]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[19]">
        <label>Falso</label>

        <!--Pregunta 566-->
        <p>Si me siento triste, trabajo mal</p>
        <input type="radio" id="true" name="Q[20]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[20]">
        <label>Falso</label>

        <!--Pregunta 567-->
        <p>La mayor parte de los matrimonios no muestran que están enamorados uno del otro</p>
        <input type="radio" id="true" name="Q[21]">
        <label>Verdadero</label><br>
        <input type="radio" id="false" name="Q[21]">
        <label>Falso</label>
        
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