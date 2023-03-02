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
        <form method="post" action="Form_271-310.php">
          <!--Pregunta 241-->
          <br><p>Es más seguro no confiar en nadie</p>
          <input type="radio" value="true" name="Q[1]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[1]">
          <label>falso</label>

          <!--Pregunta 242-->
          <br><p>Me excito mucho una vez por semana o con más frecuencia</p>
          <input type="radio" value="true" name="Q[2]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[2]">
          <label>falso</label>

          <!--Pregunta 243-->
          <br><p>Cuando estoy con un grupo de gente, me altera tener que pensar en temas adecuados de conversación</p>
          <input type="radio" value="true" name="Q[3]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[3]">
          <label>falso</label>

          <!--Pregunta 244-->
          <br><p>Cuando estoy abatvalueo (bajoneado), algo emocionante me saca casi siempre de ese estado</p>
          <input type="radio" value="true" name="Q[4]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[4]">
          <label>falso</label>

          <!--Pregunta 245-->
          <br><p>Cuando salgo de casa no me preocupa si la puerta y las ventanas quedan bien cerradas</p>
          <input type="radio" value="true" name="Q[5]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[5]">
          <label>falso</label>

          <!--Pregunta 246-->
          <br><p>Creo que mis pecados son imperdonables</p>
          <input type="radio" value="true" name="Q[6]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[6]">
          <label>falso</label>

          <!--Pregunta 247-->
          <br><p>Tengo entumecimientos en una o más partes de mi piel</p>
          <input type="radio" value="true" name="Q[7]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[7]">
          <label>falso</label>

          <!--Pregunta 248-->
          <br><p>No culpo a aquel que se aprovecha de otro que deja que se aprovechen de él</p>
          <input type="radio" value="true" name="Q[8]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[8]">
          <label>falso</label>

          <!--Pregunta 249-->
          <br><p>Mi vista es tan buena como lo ha svalueo durante años</p>
          <input type="radio" value="true" name="Q[9]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[9]">
          <label>falso</label>

          <!--Pregunta 250-->
          <br><p>A veces me ha divertvalueo tanto el ingenio de un delincuente, que he deseado que le fuera bien</p>
          <input type="radio" value="true" name="Q[10]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[10]">
          <label>falso</label>

          <!--Pregunta 251-->
          <br><p>A menudo me ha dado la sensación de que gente extraña me ha estado mirando con ojos críticos</p>
          <input type="radio" value="true" name="Q[11]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[11]">
          <label>falso</label>

          <!--Pregunta 252-->
          <br><p>Para mí todo tiene el mismo sabor o gusto</p>
          <input type="radio" value="true" name="Q[12]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[12]">
          <label>falso</label>

          <!--Pregunta 253-->
          <br><p>Todos los días tomo una cantvaluead excesivamente grande de agua</p>
          <input type="radio" value="true" name="Q[13]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[13]">
          <label>falso</label>

          <!--Pregunta 254-->
          <br><p>La mayor parte de la gente hace amigos porque es probable que le sean útiles</p>
          <input type="radio" value="true" name="Q[14]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[14]">
          <label>falso</label>

          <!--Pregunta 255-->
          <br><p>No noto que me zumben o me chillen los oídos frecuentemente</p>
          <input type="radio" value="true" name="Q[15]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[15]">
          <label>falso</label>

          <!--Pregunta 256-->
          <br><p>De vez en cuando siento fastvalueio hacia familiares que normalmente quiero</p>
          <input type="radio" value="true" name="Q[16]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[16]">
          <label>falso</label>

          <!--Pregunta 257-->
          <br><p>Si fuera periodista me gustaría mucho informar sobre deportes</p>
          <input type="radio" value="true" name="Q[17]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[17]">
          <label>falso</label>

          <!--Pregunta 258-->
          <br><p>Puedo dormir de día, pero no de noche</p>
          <input type="radio" value="true" name="Q[18]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[18]">
          <label>falso</label>

          <!--Pregunta 259-->
          <br><p>Estoy seguro de que la gente habla de mí</p>
          <input type="radio" value="true" name="Q[19]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[19]">
          <label>falso</label>

          <!--Pregunta 260-->
          <br><p>De vez en cuando me divierten las bromas o chistes "verdes"</p>
          <input type="radio" value="true" name="Q[20]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[20]">
          <label>falso</label>

          <!--Pregunta 261-->
          <br><p>Comparado con mis amigos, tengo muy pocos miedos</p>
          <input type="radio" value="true" name="Q[21]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[21]">
          <label>falso</label>

          <!--Pregunta 262-->
          <br><p>Puedo iniciar una discusión, en un grupo de personas, sobre un tema que conozco</p>
          <input type="radio" value="true" name="Q[22]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[22]">
          <label>falso</label>

          <!--Pregunta 263-->
          <br><p>Siento siempre aversión por la ley cuando un criminal sale libre gracias a la habilvaluead de un abogado astuto</p>
          <input type="radio" value="true" name="Q[23]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[23]">
          <label>falso</label>

          <!--Pregunta 264-->
          <br><p>He abusado del alcohol</p>
          <input type="radio" value="true" name="Q[24]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[24]">
          <label>falso</label>

          <!--Pregunta 265-->
          <br><p>Por lo general no le hablo a las personas hasta que ellas me hablan a mí</p>
          <input type="radio" value="true" name="Q[25]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[25]">
          <label>falso</label>

          <!--Pregunta 266-->
          <br><p>Nunca he tenvalueo problemas con la ley</p>
          <input type="radio" value="true" name="Q[26]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[26]">
          <label>falso</label>

          <!--Pregunta 267-->
          <br><p>Tengo épocas en las que me he sentvalueo más animado que de costumbre sin que exista una razón especial</p>
          <input type="radio" value="true" name="Q[27]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[27]">
          <label>falso</label>

          <!--Pregunta 268-->
          <br><p>Me gustaría no ser pertubado por pensamientos sexuales</p>
          <input type="radio" value="true" name="Q[28]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[28]">
          <label>falso</label>

          <!--Pregunta 269-->
          <br><p>Si varias personas se encuentran inculpadas, lo que mejor que pueden hacer es ponerse de acuerdo en lo que van a dceir y no cambiarlo después</p>
          <input type="radio" value="true" name="Q[29]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[29]">
          <label>falso</label>

          <!--Pregunta 270-->
          <br><p>No me molesta ver sufrir a los animales</p>
          <input type="radio" value="true" name="Q[30]">
          <label>verdadero</label>
          <input type="radio" value="false" name="Q[30]">
          <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>