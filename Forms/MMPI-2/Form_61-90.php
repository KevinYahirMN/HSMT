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
        <form method="post" action="Form_91-120.php">
            <!--Pregunta 61-->
            <br><p>Soy una persona importante</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            
            <!--Pregunta 62-->
            <br><p>A menudo he deseado ser mujer. (O si usted es mujer: nunca me ha molestado 
                ser mujer)</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>

            <!--Pregunta 63-->
            <br><p>Mis sentimientos no son hervalueos con facilvaluead</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>

            <!--Pregunta 64-->
            <br><p>Me gusta leer novelas de amor</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>

            <!--Pregunta 65-->
            <br><p>La mayor parte del tiempo siento melancolía</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            
            <!--Pregunta 66-->
            <br><p>Se viviría mejor sin leyes</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>

            <!--Pregunta 67-->
            <br><p>Me gusta la poesía</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            
            <!--Pregunta 68-->
            <br><p>A veces hago rabiar (jugando) a los animales</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>
            
            <!--Pregunta 69-->
            <br><p>Creo que me gustaría el trabajo de guardabosques</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>
            
            <!--Pregunta 70-->
            <br><p>En una discusión o debate, me dejo vencer facilmente</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            
            <!--Pregunta 71-->
            <br><p>En el momento actual me es difícil tener la esperanza de 
                llegar a ser alguien</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>
            
            <!--Pregunta 72-->
            <br><p>A veces mi alma abandona mi cuerpo</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>
            
            <!--Pregunta 73-->
            <br><p>Decvaluevalueamente no tengo confianza en mí mismo</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>
            
            <!--Pregunta 74-->
            <br><p>Me gustaría ser florista</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>
            
            <!--Pregunta 75-->
            <br><p>Normalmente siento que la vvaluea vale la pena vivirla</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
            
            <!--Pregunta 76-->
            <br><p>Se necesita discutir mucho para convencer a la mayor parte de 
                la gente de la verdad</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>
            
            <!--Pregunta 77-->
            <br><p>De vez en cuando dejo para mañana lo que debería hacer hoy</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>
            
            <!--Pregunta 78-->
            <br><p>Le agrado a la mayor parte de la gente que me conoce</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>
            
            <!--Pregunta 79-->
            <br><p>No me importa que se diviertan haciéndome bromas</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>
            
            <!--Pregunta 80-->
            <br><p>Me gustaría ser enfermero</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>
            
            <!--Pregunta 81-->
            <br><p>Creo que la mayor parte de la gente mentiría para conseguir 
                lo que busca</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>
            
            <!--Pregunta 82-->
            <br><p>Hago muchas cosas de las que me arrepiento luego. (Me arrepiento de 
                más cosas o con más frecuencia que otras personas)</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>
            
            <!--Pregunta 83-->
            <br><p>Tengo pocas peleas con las personas de mi familia</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            
            <!--Pregunta 84-->
            <br><p>Siendo joven me echaron de clase, una o más veces, por portarme mal</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>
            
            <!--Pregunta 85-->
            <br><p>A veces siento grandes deseos de hacer algo dañino o chocante</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>
            
            <!--Pregunta 86-->
            <br><p>Me gustaría asistir a reuniones o fiestas donde haya mucha alegría 
                y ruvalueo
            </p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>
            
            <!--Pregunta 87-->
            <br><p>Me he encontrado con problemas tan llenos de posibilvalueades, que no he 
                podvalueo llegar a una decisión
            </p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            
            <!--Pregunta 88-->
            <br><p>Creo que las mujeres deben tener tanta libertad sexual como los hombres</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>
            
            <!--Pregunta 89-->
            <br><p>Las luchas más encarnizadas las tengo conmigo mismo</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>
            
            <!--Pregunta 90-->
            <br><p>Yo quiero mucho a mi padre. (O lo quise, si falleció)</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[30]">
            <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>