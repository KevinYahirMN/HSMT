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
        <form method="post" action="Form_211-240.php">
            <!--Pregunta 181-->
            <br><p>No tengo accesos de alergia o asma</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            
            <!--Pregunta 182-->
            <br><p>He tenvalueo ataques en los que perdía el control de mis
                 movimientos o de la palabra, pero sabía lo que pasaba a
                  mí alrededor</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            
            <!--Pregunta 183-->
            <br><p>Me desagradan algunas personas que conozco</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 184-->
            <br><p>Muy pocas veces sueño despierto</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            
            <!--Pregunta 185-->
            <br><p>Me gustaría ser menos tímvalueo</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>

            <!--Pregunta 186-->
            <br><p>No me da miedo manejar dinero</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 187-->
            <br><p>Si fuera periodista me gustartía mucho
                 informar sobre teatro</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>

            <!--Pregunta 188-->
            <br><p>Disfruto con muy diferentes clases de
                 juegos o diversiones</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>

            <!--Pregunta 189-->
            <br><p>Me gusta flirtear (coquetear)</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label><br>

             <!--Pregunta 190-->
             <br><p>Los niños me tratan más como a un niño que como a un adulto</p>
             <input type="radio" value="true" name="Q[10]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[10]">
             <label>falso</label>
 
             <!--Pregunta 191-->
             <br><p>Me gustaría ser periodista</p>
             <input type="radio" value="true" name="Q[11]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[11]">
             <label>falso</label>
 
             <!--Pregunta 192-->
             <br><p>Mi madre es una buena mujer,(o si lo fue, falleció)</p>
             <input type="radio" value="true" name="Q[12]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[12]">
             <label>falso</label>
             
             <!--Pregunta 193-->
             <br><p>Cuando camino por la vereda evito cuvalueadosamente pisar las baldosas flojas</p>
             <input type="radio" value="true" name="Q[13]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[13]">
             <label>falso</label>
 
             <!--Pregunta 194-->
             <br><p>Nunca he tenvalueo erupciones en la piel que me hayan preocupado</p>
             <input type="radio" value="true" name="Q[14]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[14]">
             <label>falso</label>
 
             <!--Pregunta 195-->
             <br><p>comparado con otros hogares, en el mío hay poco amor o unión</p>
             <input type="radio" value="true" name="Q[15]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[15]">
             <label>falso</label>
 
             <!--Pregunta 196-->
             <br><p>Con frecuencia, estoy preocupado por algo</p>
             <input type="radio" value="true" name="Q[16]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[16]">
             <label>falso</label>
 
             <!--Pregunta 197-->
             <br><p>Creo que me gustaría el trabajo de contratista de obras</p>
             <input type="radio" value="true" name="Q[17]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[17]">
             <label>falso</label>
 
             <!--Pregunta 198-->
             <br><p>Normalmente oigo voces sin saber de donde vienen</p>
             <input type="radio" value="true" name="Q[18]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[18]">
             <label>falso</label>
 
             <!--Pregunta 199-->
             <br><p>Me gusta la ciencia</p>
             <input type="radio" value="true" name="Q[19]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[19]">
             <label>falso</label>
 
             <!--Pregunta 200-->
             <br><p>No me cuesta pedir ayuda a mis amigos, incluso aunque no pueda devolverles el favor</p>
             <input type="radio" value="true" name="Q[20]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[20]">
             <label>falso</label>
 
             <!--Pregunta 201-->
             <br><p>Me gusta mucho cazar</p>
             <input type="radio" value="true" name="Q[21]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[21]">
             <label>falso</label>
 
             <!--Pregunta 202-->
             <br><p>A menudo a mis padres les molestó el tipo de amigos que tenía</p>
             <input type="radio" value="true" name="Q[22]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[22]">
             <label>falso</label>
 
             <!--Pregunta 203-->
             <br><p>A veces soy un poco chismoso</p>
             <input type="radio" value="true" name="Q[23]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[23]">
             <label>falso</label>
 
             <!--Pregunta 204-->
             <br><p>Escucho tan bien como las demás personas</p>
             <input type="radio" value="true" name="Q[24]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[24]">
             <label>falso</label>
 
             <!--Pregunta 205-->
             <br><p>Alguno de mis familiares tiene costumbres que me molestan y fastvalueian muchísimo</p>
             <input type="radio" value="true" name="Q[25]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[25]">
             <label>falso</label>
 
             <!--Pregunta 206-->
             <br><p>A veces me siento capaz de tomar decisiones con extraordinaria facilvaluead</p>
             <input type="radio" value="true" name="Q[26]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[26]">
             <label>falso</label>
 
             <!--Pregunta 207-->
             <br><p>Me gustaría pertenecer a variuos clubes o asociaciones</p>
             <input type="radio" value="true" name="Q[27]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[27]">
             <label>falso</label>
 
             <!--Pregunta 208-->
             <br><p>Raramente noto los latvalueos de mi corazón y pocas veces se me corta la respiración</p>
             <input type="radio" value="true" name="Q[28]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[28]">
             <label>falso</label>
 
             <!--Pregunta 209-->
             <br><p>Me gusta hablar sobre temas sexuales</p>
             <input type="radio" value="true" name="Q[29]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[29]">
             <label>falso</label>
 
             <!--Pregunta 210-->
             <br><p>Me gusta visitar lugares donde nunca he estado</p>
             <input type="radio" value="true" name="Q[30]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[30]">
             <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>