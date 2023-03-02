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
        <form method="post" action="Form_331-360.php">
             <!--Pregunta 301-->
            <br><p>Casi todo el tiempo siento ansiedad a causa de algo o alguien</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>

            <!--Pregunta 302-->            
            <p>Me impaciento fácilmente con la gente</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>

            <!--Pregunta 303-->
            <br><p>Muchísimas veces me gustaría estar muerto</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 304-->
            <br><p>Muchísimas veces me excito tanto que me cuesta dormirme por las noches</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>

            <!--Pregunta 305-->            
            <p>Sin duda he tenvalueo que preocuparme por más cosas que las que me correspondían</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>

            <!--Pregunta 306-->
            <br><p>Nadie parece comprenderme</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 307-->
            <br><p>A veces oigo tan bien que me molesta</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            
            <!--Pregunta 308-->            
            <br><p>Olvvalueo enseguvaluea lo que la gente me dice</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>

            <!--Pregunta 309-->
            <br><p>Normalmente tengo que pararme a pensar antes de actuar, incluso en asuntos sin importancia</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
      
            <!--Pregunta 310-->
            <br><p>A menudo cruzo la calle para no encontrarme con alguna persona</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            <!--Pregunta 311-->            
            <p>Con frecuencia siento como si las cosas no fueran reales</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>

            <!--Pregunta 312-->
            <br><p>La única parte interesante de los diarios es las paginas de los chistes</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>

            <!--Pregunta 313-->
            <br><p>Tengo la costumbre de contar con objetos sin importancia, como las bombillas de un letrero luminoso o cosas similares</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>

            <!--Pregunta 314-->
            <br><p>Carezco de enemigos cuando que deseen realmente hacerme daño</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>

            <!--Pregunta 315-->            
            <p>Tiendo a ponerme en guardia con aquellos que se muestran algo más amables de lo que yo esperaba</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>        
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>

            <!--Pregunta 316-->
            <br><p>Tengo pensamientos extraños y originales</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>

            <!--Pregunta 317-->
            <br><p>Tengo pensamientos extraños y originales</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>

            <!--Pregunta 318-->            
            <p>Normalmente espero que éxito en las cosas que hago</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>

            <!--Pregunta 319-->
            <br><p>Oigo cosas mas extrañas cuando estoy solo</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>

            <!--Pregunta 320-->
            <br><p>He tenvalueo miedo de cosas o personas que sabía que no podían hacerme daño</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>

            <!--Pregunta 321-->
            <br><p>No me dan miedo entrar solo a una habitación donde hay gente reunvaluea hablando</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>

            <!--Pregunta 322-->            
            <p>Me da miedo utilizar cuchillos u objetos muy afilados o puntiagudos</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>

            <!--Pregunta 323-->
            <br><p>Algunas veces gozo con herir a personas que amo</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
      
            <!--Pregunta 324-->
            <br><p>Me resulta fácil lograr que la gente me tenga miedo y eso me divierte</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>

            <!--Pregunta 325-->            
            <p>Tengo más dificultad para concetrarme que la que otros parecen tener</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>

            <!--Pregunta 326-->
            <br><p>Varias veces he dejado de hacer algo por consvalueerar insuficiente mi habilvaluead</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>

            <!--Pregunta 327-->
            <br><p>Se me ocurren palabras feas, a veces horribles, y no puedo dejarlas de lado.</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>

            <!--Pregunta 328-->            
            <p>Algunas veces me ronda en la cabeza un pensamiento sin Importancia y me molesta durante días</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>

            <!--Pregunta 329-->
            <br><p>Casi a diario ocurre algo que me asusta</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>

            <!--Pregunta 330-->
            <br><p>A veces siento que me sobran energías</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>            
            <input type="radio" value="false" name="Q[30]">
            <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>