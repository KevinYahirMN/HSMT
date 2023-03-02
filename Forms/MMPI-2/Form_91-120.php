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
        <form method="post" action="Form_121-150.php">
            <!--Pregunta 91-->
            <br><p>Tengo pocas o ninguna molestia a causa de espasmos o contracciones musculares</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            
            <!--Pregunta 92-->
            <br><p>No parece importarme lo que me suceda</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            
            <!--Pregunta 93-->
            <br><p>A veces, cuando no me siento bien, estoy irritable</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            
            <!--Pregunta 94-->
            <br><p>La mayor parte del tiempo me parece haber hecho algo malo o equivocado</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>
            
            <!--Pregunta 95-->
            <br><p>Soy feliz la mayor parte del tiempo</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            
            <!--Pregunta 96-->
            <br><p>Veo a mi alrededor cosas, animales o personas que otros no ven</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            
            <!--Pregunta 97-->
            <br><p>Parece como si la mayor parte del tiempo tuviera la cabeza cargada o 
                llena de ruvalueos
            </p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            
            <!--Pregunta 98-->
            <br><p>Hay algunas personas tan mandonas que me dan ganas de hacer lo contrario 
                de lo que quieren, aunque sepa que tiene razón
            </p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            
            <!--Pregunta 99-->
            <br><p>Alguien me la tiene jurada</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            
            <!--Pregunta 100-->
            <br><p>Nunca he hecho algo peligroso solo por el placer de hacerlo</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            
            <!--Pregunta 101-->
            <br><p>A menudo siento como si tuviera una venda puesta fuertemente alrededor 
                de mi cabeza
            </p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            
            <!--Pregunta 102-->
            <br><p>Alguna vez me enojo</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            
            <!--Pregunta 103-->
            <br><p>Me divierte más un juego cuando apuesto</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            
            <!--Pregunta 104-->
            <br><p>La mayoría de la gente es honrada por temor a ser descubierta</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            
            <!--Pregunta 105-->
            <br><p>En el colegio, algunas veces, fui enviado al director a causa 
                de mi mala conducta
            </p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            
            <!--Pregunta 106-->
            <br><p>Mi manera de hablar es como siempre (ni más rápvaluea, ni más lenta, 
                ni más atropellada, no tengo carraspera)</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            
            <!--Pregunta 107-->
            <br><p>Mis modales en la mesa no son tan correctos en mi casa como cuando salgo a comer afuera</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            
            <!--Pregunta 108-->
            <br><p>Cualquier persona capacitada y dispuesta a trabajar fuerte, tiene muchas probabiliades 
                de tener éxito
            </p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            
            <!--Pregunta 109-->
            <br><p>Me parece ser tan capaz y despierto como la mayor parte de los que me rodean</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            
            <!--Pregunta 110-->
            <br><p>Para no perder un beneficio o ventaja, la mayoría de la gente está dispuesta 
                a hacer cualquier cosa
            </p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            
            <!--Pregunta 111-->
            <br><p>Tengo bastantes trastornos digestivos</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            
            <!--Pregunta 112-->
            <br><p>Me gusta el teatro y el cine</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>

            <!--Pregunta 113-->
            <br><p>Se quien es el responsable de muchos de mis problemas</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            
            <!--Pregunta 114-->
            <br><p>A veces me siento tan atraído por las cosas de otros (zapatos, reloj), 
                que tengo ganas de robarlas
            </p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            
            <!--Pregunta 115-->
            <br><p>Ver sangre no me da miedo ni me hace mal</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            
            <!--Pregunta 116-->
            <br><p>Frecuentemente no puedo comprender porque he estado tan gruñón 
                y malhumorado
            </p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            
            <!--Pregunta 117-->
            <br><p>Nunca he vomitado sangre, ni sangrado al toser</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            
            <!--Pregunta 118-->
            <br><p>No me preocupa contraer una enfermedad</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            
            <!--Pregunta 119-->
            <br><p>Me gusta recoger flores o cultivar plantas en casa</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            
            <!--Pregunta 120-->
            <br><p>Frecuentemente encuentro necesario defender lo que es justo</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[30]">
            <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>