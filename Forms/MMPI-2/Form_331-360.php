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
<html lang="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
        Examen ejemplo jsjsjs
    </title>
    <body>
        <form method="post" action="Form_361-390.php">
            <!--Pregunta 331-->            
            <p>Me inclino a tomar las cosas muy en serio</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>

            <!--Pregunta 332-->
            <br><p>A veces me ha gustado ser herivalueo por una persona quervaluea</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>

            <!--Pregunta 333-->
            <br><p>La gente dice de mi cosas insultantes y vulgares</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 334-->
            <br> Me siento incomodo cuando estoy "bajo techo” (dentro de un edificio o habitación)<p></p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>

            <!--Pregunta 335-->
            <br><p>Soy poco conciente de mi mísmo</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>

            <!--Pregunta 336-->            
            <p>Estoy seguro de que alguien controla mi mente</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 337-->
            <br><p>En las fiestas y reuniones, en vez de unirme al grupo, es más probable que me siente solo o con otra persona</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>

            <!--Pregunta 338-->
            <br><p>La gente me decepciona con frecuencia</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>

            <!--Pregunta 339-->            
            <p>frecuentemente mis proyectos me han parecvalueo tan llenos de dificultades que he tenvalueo que abandonarlos</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>

            <!--Pregunta 340-->
            <br><p>Me gusta mucho ir a bailar</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>

            <!--Pregunta 341-->
            <br><p>Durante ciertos periodos mi mente parece trabajar más despacio que de costumbre</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            
            <!--Pregunta 342-->            
            <br><p>En micros, trenes, suelo conversar con extraños</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>

            <!--Pregunta 343-->
            <br><p>Me gustan los niños</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
      
            <!--Pregunta 344-->
            <br><p>Me gusta jugar y apostar</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            
            <!--Pregunta 345-->            
            <p>Si me dieran la oportunvaluead, podria hacer cosas que beneficiarian mucho al mundo</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>

            <!--Pregunta 346-->
            <br><p>Con frecuencia me he encontrado con personas con reputación de expertas, pero que no eran mejores que yo</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>

            <!--Pregunta 347-->
            <br><p>Me siento fracasado cuando hablan del éxito de alguien que conozco bien</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>

            <!--Pregunta 348-->
            <br><p>Con frecuencia pienso "Me gustaría volver a ser niño"</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>

            <!--Pregunta 349-->            
            <p>Nada me hace más feliz que estar solo</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>        
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>

            <!--Pregunta 350-->
            <br><p>Si me dieran la oportunvaluead podría ser un buen lvalueer</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>

            <!--Pregunta 351-->
            <br><p>Me molestan las anécdotas indecentes</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>

            <!--Pregunta 352-->            
            <p>Normalmente la gente pvaluee para sus propios derechos más respeto que el que da a los de otras personas</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>

            <!--Pregunta 353-->
            <br><p>Me gustan las reuniones sociales porque puedo estar con gente</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>

            <!--Pregunta 354-->
            <br><p>Trato de memorizar los cuentos divertvalueos para poder contárselos a otros</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>

            <!--Pregunta 355-->
            <br><p>Una o más veces en mi vvaluea sentí que alguien me obligó a hacer cosas hipnotizándome</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>

            <!--Pregunta 356-->            
            <p>Me resulta difícil abandonar una tarea una vez que la empecé</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>

            <!--Pregunta 357-->
            <br><p>Generalmente no me involucro en los chismes que cuentan los que me rodean</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
      
            <!--Pregunta 358-->
            <br><p>A menudo han sentvalueo celos de mis valueeas porque no las pensaron antes</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>

            <!--Pregunta 359-->            
            <p>Me encanta estar con mucha gente (recitales, manifestaciones)</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>

            <!--Pregunta 360-->
            <br><p>No me preocupa encontrarme con extraños</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[30]">
            <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>