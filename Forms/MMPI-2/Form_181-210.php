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
    <title>Preguntas 181-210</title>
    <link rel="shortcut icon" href="ico.ico" />
   </head>
   <body>
    <header>
        <h1 id="titulo"> Cuestionario </h1>
        <h2> Responda las siguientes preguntas </h2>
      </header>
      
      <main id="principal">
        <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
      
        <form id="formulario">

        <form method="post" action="Form_211-240.php">
            <!--Pregunta 181-->
            <p>No tengo accesos de alergia o asma</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label> <br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            
            <!--Pregunta 182-->
            <p>He tenido ataques en los que perdía el control de mis
                 movimientos o de la palabra, pero sabía lo que pasaba a
                  mí alrededor</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            
            <!--Pregunta 183-->
            <p>Me desagradan algunas personas que conozco</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 184-->
            <p>Muy pocas veces sueño despierto</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            
            <!--Pregunta 185-->
            <p>Me gustaría ser menos tímido</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>

            <!--Pregunta 186-->
            <p>No me da miedo manejar dinero</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 187-->
            <p>Si fuera periodista me gustartía mucho
                 informar sobre teatro</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>

            <!--Pregunta 188-->
            <p>Disfruto con muy diferentes clases de
                 juegos o diversiones</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>

            <!--Pregunta 189-->
            <p>Me gusta flirtear (coquetear)</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label><br>

             <!--Pregunta 190-->
             <p>Los niños me tratan más como a un niño que como a un adulto</p>
             <input type="radio" value="true" name="Q[10]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[10]">
             <label>falso</label>
 
             <!--Pregunta 191-->
             <p>Me gustaría ser periodista</p>
             <input type="radio" value="true" name="Q[11]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[11]">
             <label>falso</label>
 
             <!--Pregunta 192-->
             <p>Mi madre es una buena mujer,(o si lo fue, falleció)</p>
             <input type="radio" value="true" name="Q[12]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[12]">
             <label>falso</label>
             
             <!--Pregunta 193-->
             <p>Cuando camino por la vereda evito cuidadosamente pisar las baldosas flojas</p>
             <input type="radio" value="true" name="Q[13]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[13]">
             <label>falso</label>
 
             <!--Pregunta 194-->
             <p>Nunca he tenido erupciones en la piel que me hayan preocupado</p>
             <input type="radio" value="true" name="Q[14]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[14]">
             <label>falso</label>
 
             <!--Pregunta 195-->
             <p>comparado con otros hogares, en el mío hay poco amor o unión</p>
             <input type="radio" value="true" name="Q[15]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[15]">
             <label>falso</label>
 
             <!--Pregunta 196-->
             <p>Con frecuencia, estoy preocupado por algo</p>
             <input type="radio" value="true" name="Q[16]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[16]">
             <label>falso</label>
 
             <!--Pregunta 197-->
             <p>Creo que me gustaría el trabajo de contratista de obras</p>
             <input type="radio" value="true" name="Q[17]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[17]">
             <label>falso</label>
 
             <!--Pregunta 198-->
             <p>Normalmente oigo voces sin saber de donde vienen</p>
             <input type="radio" value="true" name="Q[18]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[18]">
             <label>falso</label>
 
             <!--Pregunta 199-->
             <p>Me gusta la ciencia</p>
             <input type="radio" value="true" name="Q[19]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[19]">
             <label>falso</label>
 
             <!--Pregunta 200-->
             <p>No me cuesta pedir ayuda a mis amigos, incluso aunque no pueda devolverles el favor</p>
             <input type="radio" value="true" name="Q[20]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[20]">
             <label>falso</label>
 
             <!--Pregunta 201-->
             <p>Me gusta mucho cazar</p>
             <input type="radio" value="true" name="Q[21]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[21]">
             <label>falso</label>
 
             <!--Pregunta 202-->
             <p>A menudo a mis padres les molestó el tipo de amigos que tenía</p>
             <input type="radio" value="true" name="Q[22]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[22]">
             <label>falso</label>
 
             <!--Pregunta 203-->
             <p>A veces soy un poco chismoso</p>
             <input type="radio" value="true" name="Q[23]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[23]">
             <label>falso</label>
 
             <!--Pregunta 204-->
             <p>Escucho tan bien como las demás personas</p>
             <input type="radio" value="true" name="Q[24]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[24]">
             <label>falso</label>
 
             <!--Pregunta 205-->
             <p>Alguno de mis familiares tiene costumbres que me molestan y fastidian muchísimo</p>
             <input type="radio" value="true" name="Q[25]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[25]">
             <label>falso</label>
 
             <!--Pregunta 206-->
             <p>A veces me siento capaz de tomar decisiones con extraordinaria facilidad</p>
             <input type="radio" value="true" name="Q[26]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[26]">
             <label>falso</label>
 
             <!--Pregunta 207-->
             <p>Me gustaría pertenecer a variuos clubes o asociaciones</p>
             <input type="radio" value="true" name="Q[27]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[27]">
             <label>falso</label>
 
             <!--Pregunta 208-->
            <p>Raramente noto los latidos de mi corazón y pocas veces se me corta la respiración</p>
             <input type="radio" value="true" name="Q[28]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[28]">
             <label>falso</label>
 
             <!--Pregunta 209-->
             <p>Me gusta hablar sobre temas sexuales</p>
             <input type="radio" value="true" name="Q[29]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[29]">
             <label>falso</label>
 
             <!--Pregunta 210-->
             <p>Me gusta visitar lugares donde nunca he estado</p>
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












     
            

      