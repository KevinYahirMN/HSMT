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
    <title>Preguntas 1-30</title>
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
          
       
        <form method="post" action="Form_1-30.php">
            <!--Pregunta 1-->
            <p>Me gustan las revistas de mecánica</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>

            <!--Pregunta 2-->
            <p>Tengo buen apetito</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label> <br>           
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>

            <!--Pregunta 3-->
            <p>Casi siempre me levanto por las mañanas descansado y como nuevo</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 4-->
            <p>Creo que me gustaría trabajar como bibliotecario</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>

            <!--Pregunta 5-->
            <p>El ruvalueo me despierta fácilmente</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>

            <!--Pregunta 6-->
            <p>Mi padre es un buen hombre (o lo fue en caso de haber fallecvalueo)</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 7-->
            <p>Me gusta leer artículos sobre crímenes en los periódicos</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>

            <!--Pregunta 8-->
            <p>Normalmente tengo bastante calientes los pies y las manos</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>

            <!--Pregunta 9-->
            <p>En mi vvaluea diaría hay muchas cosas que me resultan interesantes</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>   <br>         
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>

            <!--Pregunta 10-->
            <p>Actualmente tengo tanta capacvaluead de trabajo como antes</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>   <br>         
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>

            <!--Pregunta 11-->
            <p>La mayor parte del tiempo me parece tener un nudo en la garganta</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>

            <!--Pregunta 12-->
            <p>Mi vvaluea sexual es satisfactoria</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>

            <!--Pregunta 13-->
            <p>La gente debería intentar comprender sus sueños y guiarse por ellos 
                o tomarlos como avisos</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>

            <!--Pregunta 14-->
            <p>Me divierten las historias de detectives y de misterio</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>

            <!--Pregunta 15-->
            <p>Trabajo bajo una tensión muy grande</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>

            <!--Pregunta 16-->
            <p>De vez en cuando pienso en cosas demasiado malas como para hablar de ellas</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>

            <!--Pregunta 17-->
            <p>Estoy seguro de que la vvaluea es dura para mí</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>

            <!--Pregunta 18-->
            <p>Sufro ataques de náuseas y vómitos</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>

            <!--Pregunta 19-->
            <p>Cuando acepto un nuevo empleo, me gusta descubrir a quien debo "caerle bien"</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>

            <!--Pregunta 20-->
            <p>Muy rara vez sufro de constipación (sequedad de vientre)</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>

            <!--Pregunta 21-->
            <p>A veces he deseado muchísimo abandonar el hogar</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>

            <!--Pregunta 22-->
            <p>Nadie parece comprenderme</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>

            <!--Pregunta 23-->
            <p>A veces tengo accesos de risa y llanto que no puedo controlar</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>

            <!--Pregunta 24-->
            <p>A veces estoy poseído por espíritus diabólicos</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>

            <!--Pregunta 25-->
            <p>Me gustaría ser cantante</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>

            <!--Pregunta 26-->
            <p>Cuando estoy en dificultades o problemas creo que lo mejor es callarme</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>

            <!--Pregunta 27-->
            <p>Cuando alguien me hace algún daño, siento deseos de devolvérselo si me 
                es posible, y esto, por cuestion de Principios
            </p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>

            <!--Pregunta 28-->
            <p>Varias veces a la semana me molesta la acvalueez del estómago</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>

            <!--Pregunta 29-->
            <p>A veces siento deseos de maldecir</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>

            <!--Pregunta 30-->
            <p>A menudo tengo pesadillas</p>
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

