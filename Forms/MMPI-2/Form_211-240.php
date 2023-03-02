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
        <form method="post" action="Form_241-270.php">
             <!--Pregunta 211-->
             <br><p>Me han sugervalueo una forma de vvaluea basada en el deber y desde entonces la he seguvalueo cuvalueadosamente</p>
             <input type="radio" value="true" name="Q[1]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[1]">
             <label>falso</label>
 
             <!--Pregunta 212-->
             <br><p>A veces traté de que alguien no hiciera algo, porque eso estaba en contra de mis principios</p>
             <input type="radio" value="true" name="Q[2]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[2]">
             <label>falso</label>
 
             <!--Pregunta 213-->
             <br><p>Me enojo fácilmente, pero se me pasa pronto</p>
             <input type="radio" value="true" name="Q[3]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[3]">
             <label>falso</label>
 
             <!--Pregunta 214-->
             <br><p>He vivivo bastante libre e independiente de las normas familiares</p>
             <input type="radio" value="true" name="Q[4]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[4]">
             <label>falso</label>
 
             <!--Pregunta 215-->
             <br><p>Me preocupo muchísimo</p>
             <input type="radio" value="true" name="Q[5]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[5]">
             <label>falso</label>
 
             <!--Pregunta 216-->
             <br><p>Alguien ha tratado de robarme</p>
             <input type="radio" value="true" name="Q[6]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[6]">
             <label>falso</label>
 
             <!--Pregunta 217-->
             <br><p>Casi todos mis familiares simpatizan conmigo</p>
             <input type="radio" value="true" name="Q[7]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[7]">
             <label>falso</label>
 
             <!--Pregunta 218-->
             <br><p>Hay momentos en que estoy tan nervioso que no puedo estar sentado mucho tiempo</p>
             <input type="radio" value="true" name="Q[8]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[8]">
             <label>falso</label>
 
             <!--Pregunta 219-->
             <br><p>He tenvalueo desengaños amorosos</p>
             <input type="radio" value="true" name="Q[9]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[9]">
             <label>falso</label>
 
             <!--Pregunta 220-->
             <br><p>Nunca me preocupo por mi apariencia</p>
             <input type="radio" value="true" name="Q[10]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[10]">
             <label>falso</label>
 
             <!--Pregunta 221-->
             <br><p>Sueño frecuentemente con cosas que es mejor guardarlas para mí mismo</p>
             <input type="radio" value="true" name="Q[11]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[11]">
             <label>falso</label>
 
             <!--Pregunta 222-->
             <br><p>Debería enseñarse a los niños lo principal ac erca de la vvaluea sexual</p>
             <input type="radio" value="true" name="Q[12]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[12]">
             <label>falso</label>
 
             <!--Pregunta 223-->
             <br><p>Creo que no soy más nervioso que la mayoría</p>
             <input type="radio" value="true" name="Q[13]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[13]">
             <label>falso</label>
 
             <!--Pregunta 224-->
             <br><p>Tengo pocos o ningún dolor</p>
             <input type="radio" value="true" name="Q[14]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[14]">
             <label>falso</label>
 
             <!--Pregunta 225-->
             <br><p>Mi modo de hacer las cosas tiende a ser mal interpreado por los demás</p>
             <input type="radio" value="true" name="Q[15]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[15]">
             <label>falso</label>
 
             <!--Pregunta 226-->
             <br><p>Algunas veces, sin razón alguna, incluso cuando las cosas van mal, me siento feliz, "flotando entre las nubes"</p>
             <input type="radio" value="true" name="Q[16]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[16]">
             <label>falso</label>
 
             <!--Pregunta 227-->
             <br><p>No culpo a nadie por tratar de apoderarse de todo lo que pueda en este mundo</p>
             <input type="radio" value="true" name="Q[17]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[17]">
             <label>falso</label>
 
             <!--Pregunta 228-->
             <br><p>Hay personas que están intentando apoderarse de mis valueeas y proyectos</p>
             <input type="radio" value="true" name="Q[18]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[18]">
             <label>falso</label>
 
             <!--Pregunta 229-->
             <br><p>He tenvalueo momentos de nerviosismo que interrumpieron mis activvalueades, y en los que no sabía que ocurría a mi alrededor</p>
             <input type="radio" value="true" name="Q[19]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[19]">
             <label>falso</label>
 
             <!--Pregunta 230-->
             <br><p>Puedo mostrarme amistoso con la gente que hace cosas que yo consvalueero incorrectas</p>
             <input type="radio" value="true" name="Q[20]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[20]">
             <label>falso</label>
 
             <!--Pregunta 231-->
             <br><p>Me gusta estar en un grupo en el que se hacen bromas mutuamente</p>
             <input type="radio" value="true" name="Q[21]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[21]">
             <label>falso</label>
 
             <!--Pregunta 232-->
             <br><p>En las elecciones,algunas veces, voto candvalueatos que conozco muy poco</p>
             <input type="radio" value="true" name="Q[22]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[22]">
             <label>falso</label>
 
             <!--Pregunta 233-->
             <br><p>Me cuesta empezar a hacer cualquier cosa</p>
             <input type="radio" value="true" name="Q[23]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[23]">
             <label>falso</label>
 
             <!--Pregunta 234-->
             <br><p>Siento que soy una persona condenada</p>
             <input type="radio" value="true" name="Q[24]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[24]">
             <label>falso</label>
 
             <!--Pregunta 235-->
             <br><p>En el colegio era lento para aprender</p>
             <input type="radio" value="true" name="Q[25]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[25]">
             <label>falso</label>
 
             <!--Pregunta 236-->
             <br><p>Si fuera artista me gustaría dibujar flores</p>
             <input type="radio" value="true" name="Q[26]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[26]">
             <label>falso</label>
 
             <!--Pregunta 237-->
             <br><p>No me molesta ser poco elegante</p>
             <input type="radio" value="true" name="Q[27]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[27]">
             <label>falso</label>
 
             <!--Pregunta 238-->
             <br><p>Transpiro muy fácilmente, incluso en días fríos</p>
             <input type="radio" value="true" name="Q[28]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[28]">
             <label>falso</label>
 
             <!--Pregunta 239-->
             <br><p>Soy una persona plenamente segura de sí misma</p>
             <input type="radio" value="true" name="Q[29]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[29]">
             <label>falso</label>
 
             <!--Pregunta 240-->
             <br><p>A veces me es imposible vencer la tentación de robar</p>
             <input type="radio" value="true" name="Q[30]">
             <label>verdadero</label>
             <input type="radio" value="false" name="Q[30]">
             <label>falso</label>
            <br>
            <input type="submit" value="Siguiente">
        </form>
    </body>
</html>