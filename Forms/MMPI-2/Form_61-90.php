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
        <form method="post" action="Form_91-120.html">
            <!--Pregunta 61-->
            <br><p>Soy una persona importante</p>
            <input type="radio" value="true" name="Q[61]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[61]">
            <label>falso</label>
            
            <!--Pregunta 62-->
            <br><p>A menudo he deseado ser mujer. (O si usted es mujer: nunca me ha molestado 
                ser mujer)</p>
            <input type="radio" value="true" name="Q[62]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[62]">
            <label>falso</label>

            <!--Pregunta 63-->
            <br><p>Mis sentimientos no son hervalueos con facilvaluead</p>
            <input type="radio" value="true" name="Q[63]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[63]">
            <label>falso</label>

            <!--Pregunta 64-->
            <br><p>Me gusta leer novelas de amor</p>
            <input type="radio" value="true" name="Q[64]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[64]">
            <label>falso</label>

            <!--Pregunta 65-->
            <br><p>La mayor parte del tiempo siento melancolía</p>
            <input type="radio" value="true" name="Q[65]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[65]">
            <label>falso</label>
            
            <!--Pregunta 66-->
            <br><p>Se viviría mejor sin leyes</p>
            <input type="radio" value="true" name="Q[66]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[66]">
            <label>falso</label>

            <!--Pregunta 67-->
            <br><p>Me gusta la poesía</p>
            <input type="radio" value="true" name="Q[67]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[67]">
            <label>falso</label>
            
            <!--Pregunta 68-->
            <br><p>A veces hago rabiar (jugando) a los animales</p>
            <input type="radio" value="true" name="Q[68]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[68]">
            <label>falso</label>
            
            <!--Pregunta 69-->
            <br><p>Creo que me gustaría el trabajo de guardabosques</p>
            <input type="radio" value="true" name="Q[69]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[69]">
            <label>falso</label>
            
            <!--Pregunta 70-->
            <br><p>En una discusión o debate, me dejo vencer facilmente</p>
            <input type="radio" value="true" name="Q[70]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[70]">
            <label>falso</label>
            
            <!--Pregunta 71-->
            <br><p>En el momento actual me es difícil tener la esperanza de 
                llegar a ser alguien</p>
            <input type="radio" value="true" name="Q[71]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[71]">
            <label>falso</label>
            
            <!--Pregunta 72-->
            <br><p>A veces mi alma abandona mi cuerpo</p>
            <input type="radio" value="true" name="Q[72]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[72]">
            <label>falso</label>
            
            <!--Pregunta 73-->
            <br><p>Decvaluevalueamente no tengo confianza en mí mismo</p>
            <input type="radio" value="true" name="Q[73]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[73]">
            <label>falso</label>
            
            <!--Pregunta 74-->
            <br><p>Me gustaría ser florista</p>
            <input type="radio" value="true" name="Q[74]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[74]">
            <label>falso</label>
            
            <!--Pregunta 75-->
            <br><p>Normalmente siento que la vvaluea vale la pena vivirla</p>
            <input type="radio" value="true" name="Q[75]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[75]">
            <label>falso</label>
            
            <!--Pregunta 76-->
            <br><p>Se necesita discutir mucho para convencer a la mayor parte de 
                la gente de la verdad</p>
            <input type="radio" value="true" name="Q[76]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[76]">
            <label>falso</label>
            
            <!--Pregunta 77-->
            <br><p>De vez en cuando dejo para mañana lo que debería hacer hoy</p>
            <input type="radio" value="true" name="Q[77]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[77]">
            <label>falso</label>
            
            <!--Pregunta 78-->
            <br><p>Le agrado a la mayor parte de la gente que me conoce</p>
            <input type="radio" value="true" name="Q[78]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[78]">
            <label>falso</label>
            
            <!--Pregunta 79-->
            <br><p>No me importa que se diviertan haciéndome bromas</p>
            <input type="radio" value="true" name="Q[79]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[79]">
            <label>falso</label>
            
            <!--Pregunta 80-->
            <br><p>Me gustaría ser enfermero</p>
            <input type="radio" value="true" name="Q[80]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[80]">
            <label>falso</label>
            
            <!--Pregunta 81-->
            <br><p>Creo que la mayor parte de la gente mentiría para conseguir 
                lo que busca</p>
            <input type="radio" value="true" name="Q[81]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[81]">
            <label>falso</label>
            
            <!--Pregunta 82-->
            <br><p>Hago muchas cosas de las que me arrepiento luego. (Me arrepiento de 
                más cosas o con más frecuencia que otras personas)</p>
            <input type="radio" value="true" name="Q[82]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[82]">
            <label>falso</label>
            
            <!--Pregunta 83-->
            <br><p>Tengo pocas peleas con las personas de mi familia</p>
            <input type="radio" value="true" name="Q[83]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[83]">
            <label>falso</label>
            
            <!--Pregunta 84-->
            <br><p>Siendo joven me echaron de clase, una o más veces, por portarme mal</p>
            <input type="radio" value="true" name="Q[84]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[84]">
            <label>falso</label>
            
            <!--Pregunta 85-->
            <br><p>A veces siento grandes deseos de hacer algo dañino o chocante</p>
            <input type="radio" value="true" name="Q[85]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[85]">
            <label>falso</label>
            
            <!--Pregunta 86-->
            <br><p>Me gustaría asistir a reuniones o fiestas donde haya mucha alegría 
                y ruvalueo
            </p>
            <input type="radio" value="true" name="Q[86]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[86]">
            <label>falso</label>
            
            <!--Pregunta 87-->
            <br><p>Me he encontrado con problemas tan llenos de posibilvalueades, que no he 
                podvalueo llegar a una decisión
            </p>
            <input type="radio" value="true" name="Q[87]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[87]">
            <label>falso</label>
            
            <!--Pregunta 88-->
            <br><p>Creo que las mujeres deben tener tanta libertad sexual como los hombres</p>
            <input type="radio" value="true" name="Q[88]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[88]">
            <label>falso</label>
            
            <!--Pregunta 89-->
            <br><p>Las luchas más encarnizadas las tengo conmigo mismo</p>
            <input type="radio" value="true" name="Q[89]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[89]">
            <label>falso</label>
            
            <!--Pregunta 90-->
            <br><p>Yo quiero mucho a mi padre. (O lo quise, si falleció)</p>
            <input type="radio" value="true" name="Q[90]">
            <label>verdadero</label>
            <input type="radio" value="false" name="Q[90]">
            <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>