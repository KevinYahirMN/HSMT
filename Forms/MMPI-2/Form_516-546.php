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
    <title>Preguntas 516-546</title>
    <link rel="shortcut icon" href="ico.ico" />
   </head>
   <body>
    <header>
        <h1 id="titulo"> Cuestionario </h1>
        <h2> Responda las siguientes preguntas </h2>
      </header>
      
      <main id="principal">
        <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
      
          <form method="post" action="Form_547-567.php">

          <!--Pregunta 516-->
          <p> Mi vida es vacía y sin sentido</p>
          <input type="radio" id="true" name="Q[1]">
          <label>verdadero</label> <br>
          <input type="radio" id="false" name="Q[1]">
          <label>falso</label>
          
          <!--Pregunta 517-->
          <p> Me cuesta conservar un trabajo</p>
          <input type="radio" id="true" name="Q[2]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[2]">
          <label>falso</label>
          
          <!--Pregunta 518-->
          <p>Cometí muchos errores en mi vida.</p>
          <input type="radio" id="true" name="Q[3]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[3]">
          <label>falso</label>
          
          <!--Pregunta 519-->
          <p>Me enojo conmigo mismo por ser tan generoso con los demás</p>
          <input type="radio" id="true" name="Q[4]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[4]">
          <label>falso</label>

          <!--Pregunta 520-->
          <p> Últimamente he pensado mucho en quitarme la vida.</p>
          <input type="radio" id="true" name="Q[5]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[5]">
          <label>falso</label>
          
          <!--Pregunta 521-->
          <p>Me agrada ayudar a los demás</p>
          <input type="radio" id="true" name="Q[6]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[6]">
          <label>falso</label>
          
          <!--Pregunta 522-->
          <p>Aunque me quedara sin familia siempre hay alguien que puede ayudarme.</p>
          <input type="radio" id="true" name="Q[7]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[7]">
          <label>falso</label>
          
          <!--Pregunta 523-->
          <p>Me disgusta tener que hacer colas en cines teatros o restaurantes</p>
          <input type="radio" id="true" name="Q[8]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[8]">
          <label>falso</label>
          
          <!--Pregunta 524-->
          <p> Nadie sabe que intenté suicidarme</p>
          <input type="radio" id="true" name="Q[9]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[9]">
          <label>falso</label>
          <!--Pregunta 525-->
          <p> Todo pasa muy rápido a mi alrededor</p>
          <input type="radio" id="true" name="Q[10]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[10]">
          <label>falso</label>
          
          <!--Pregunta 526-->
          <p> Sé que le resulto "pesado" a la gente</p>
          <input type="radio" id="true" name="Q[11]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[11]">
          <label>falso</label>
          
          <!--Pregunta 527-->
          <p> Después de un mal dia, necesito tomar unos tragos para poder relajarme.</p>
          <input type="radio" id="true" name="Q[12]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[12]">
          <label>falso</label>
          
          <!--Pregunta 528-->
          <p>Muchos de mis problemas se deben a mi mala suerte.</p>
          <input type="radio" id="true" name="Q[13]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[13]">
          <label>falso</label>
          
          <!--Pregunta 529-->
          <p>A veces me resulta dificil dejar de hablar</p>
          <input type="radio" id="true" name="Q[14]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[14]">
          <label>falso</label>
          
          <!--Pregunta 530-->
          <p>A veces me hago daño a mi mismo sin saber por qué.</p>
          <input type="radio" id="true" name="Q[15]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[15]">
          <label>falso</label>
          
          <!--Pregunta 531-->
          <p> Trabajo muchas horas sin que ello sea necesario</p>
          <input type="radio" id="true" name="Q[16]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[16]">
          <label>falso</label>
          
          <!--Pregunta 532-->
          <p>Generalmente me siento mejor después de llorar</p>
          <input type="radio" id="true" name="Q[17]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[17]">
          <label>falso</label>
          
          <!--Pregunta 533-->
          <p> Me olvido donde dejo las cosas</p>
          <input type="radio" id="true" name="Q[18]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[18]">
          <label>falso</label>
          
          <!--Pregunta 534-->
          <p>Si volviera a nacer haría las cosas de la misma manera.</p>
          <input type="radio" id="true" name="Q[19]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[19]">
          <label>falso</label>
          
          <!--Pregunta 535-->
          <p>Me pone de mal humor que la gente con la que trabajo no haga las cosas a tiempo.</p>
          <input type="radio" id="true" name="Q[20]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[20]">
          <label>falso</label>
          
          <!--Pregunta 536-->
          <p>Cuando estoy enojado me duele la cabeza</p>
          <input type="radio" id="true" name="Q[21]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[21]">
          <label>falso</label>
            
          <!--Pregunta 537-->
          <p>Me gusta manejar autos viejos</p>
          <input type="radio" id="true" name="Q[22]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[22]">
          <label>falso</label>           
                                        
          <!--Pregunta 538-->
          <p>Muchos hombres son infieles a sus parejas.</p>
          <input type="radio" id="true" name="Q[23]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[23]">
          <label>falso</label>
          
          <!--Pregunta 539-->
          <p>Últimamente perdí las ganas de preocuparme de mis problemas</p>
          <input type="radio" id="true" name="Q[24]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[24]">
          <label>falso</label>
          
          <!--Pregunta 540-->
          <p>Hubo ocasiones en las que me enojé y romp cosas por haber bebido mucho</p>
          <input type="radio" id="true" name="Q[25]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[25]">
          <label>falso</label>
          
          <!--Pregunta 541-->
          <p> Trabajo mejor cuando tengo plazos bien definidos</p>
          <input type="radio" id="true" name="Q[26]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[26]">
          <label>falso</label>
          
          <!--Pregunta 542-->
          <p>He llegado a enfurecerme tanto con alguien que crei que iba a estallar</p>
          <input type="radio" id="true" name="Q[27]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[27]">
          <label>falso</label>
          
          <!--Pregunta 543-->
          <p> A veces tengo malos pensamientos sobre mi familia.</p>
          <input type="radio" id="true" name="Q[28]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[28]">
          <label>falso</label>
          <!--Pregunta 544-->
          <p> La gente me dice que tengo problemas con el alcohol, pero yo no estoy de acuerdo</p>
          <input type="radio" id="true" name="Q[29]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[29]">
          <label>falso</label>
          
          <!--Pregunta 545-->
          <p> Tengo poco tiempo para poder hacer las cosas que debo</p>
          <input type="radio" id="true" name="Q[30]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[30]">
          <label>falso</label>
          
          <!--Pregunta 546-->
          <p>Últimamente, pienso mucho en la muerte y "el más allá"</p>
          <input type="radio" id="true" name="Q[31]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[31]">
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

