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
    <title>Preguntas 423-453</title>
    <link rel="shortcut icon" href="ico.ico" />
  </head>
  <body>
    <header>
      <h1 id="titulo"> Cuestionario </h1>
      <h2> Responda las siguientes preguntas </h2>
    </header>
    
    <main id="principal">
      
    <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
    
    <form method="post" action="Form_454-484.php">
      <!--Pregunta 423-->
      <p>Con frecuencia me esfuerzo para triunfar sobre alguien que se enfrenta a mí</p>
      <input type="radio" id="true" name="Q[1]">
      <label>verdadero</label>    <br>        
      <input type="radio" id="false" name="Q[1]">
      <label>falso</label>
      
      <!--Pregunta 424-->
      <p>Me molesta que me mire gente desconocida, en el colectivo, en los negocios</p>
      <input type="radio" id="true" name="Q[2]">
      <label>verdadero</label>    <br>         
      <input type="radio" id="false" name="Q[2]">
      <label>falso</label>
      
      <!--Pregunta 425-->
      <p>El hombre que más tuvo que ver conmigo cuando era niño (como mi padre, padrastro, etc.) fue muy rígido</p>
      <input type="radio" id="true" name="Q[3]">
      <label>verdadero</label> <br>            
      <input type="radio" id="false" name="Q[3]">
      <label>falso</label>

      <!--Pregunta 426-->
      <p>Cuando era chico, me gustaba jugar al rango y a la soga</p>
      <input type="radio" id="true" name="Q[4]">
      <label>verdadero</label>   <br>         
      <input type="radio" id="false" name="Q[4]">
      <label>falso</label>
      
      <!--Pregunta 427-->
      <p>Nunca eh tenido una "visión"</p>
      <input type="radio" id="true" name="Q[5]">
      <label>verdadero</label>  <br>           
      <input type="radio" id="false" name="Q[5]">
      <label>falso</label>
      
      <!--Pregunta 428-->
      <p>Varias veces he cambiado de modo de pensar acerca de mí trabajo</p>
      <input type="radio" id="true" name="Q[6]">
      <label>verdadero</label>  <br>           
      <input type="radio" id="false" name="Q[6]">
      <label>falso</label>
      
      <!--Pregunta 429-->
      <p>Nunca tomo drogas o pastillas para dormir, a no ser por orden del médico</p>
      <input type="radio" id="true" name="Q[7]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[7]">
      <label>falso</label>
      
      <!--Pregunta 430-->
      <p>Frecuentemente lamento tener mal carácter o ser tan protestón</p>
      <input type="radio" id="true" name="Q[8]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[8]">
      <label>falso</label>
      
      <!--Pregunta 431-->
      <p>En la escuela, mis calificaciones en conducta fueron generalmente malas</p>
      <input type="radio" id="true" name="Q[9]">
      <label>verdadero</label>   <br>         
      <input type="radio" id="false" name="Q[9]">
      <label>falso</label>
      
      <!--Pregunta 432-->
      <p>Me fascina el fuego</p>
      <input type="radio" id="true" name="Q[10]">
      <label>verdadero</label>   <br>          
      <input type="radio" id="false" name="Q[10]">
      <label>falso</label>
      
      <!--Pregunta 433-->
      <p>Cuando estoy en una situacion difícil sólo digo aquella parte de la verdad que probablemente no me a perjudicar</p>
      <input type="radio" id="true" name="Q[11]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[11]">
      <label>falso</label>
      
      <!--Pregunta 434-->
      <p>Si estuviera en difícultades junto con varios amigos que fueran tan culpables como yo, preferiría echarme la culpa antes de encubrirlos</p>
      <input type="radio" id="true" name="Q[12]">
      <label>verdadero</label>   <br>          
      <input type="radio" id="false" name="Q[12]">
      <label>falso</label>
      
      <!--Pregunta 435-->
      <p>A menudo tengo miedo a la oscuridad</p>
      <input type="radio" id="true" name="Q[13]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[13]">
      <label>falso</label>
      
      <!--Pregunta 436-->
      <p>Cuando un hombre está con una mujer, generalmente está pensando cosas relacionadas con el sexo de ella</p>
      <input type="radio" id="true" name="Q[14]">
      <label>verdadero</label>    <br>         
      <input type="radio" id="false" name="Q[14]">
      <label>falso</label>
      
      <!--Pregunta 437-->
      <p>Generalmente "le hablo claro" a la gente que estoy intentando corregir o mejorar</p>
      <input type="radio" id="true" name="Q[15]">
      <label>verdadero</label>    <br>         
      <input type="radio" id="false" name="Q[15]">
      <label>falso</label>
      
      <!--Pregunta 438-->
      <p>Me aterroriza la idea de un terremoto</p>
      <input type="radio" id="true" name="Q[16]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[16]">
      <label>falso</label>
      
      <!--Pregunta 439-->
      <p>Rápidamente me convenzo por completo de una buena idea</p>
      <input type="radio" id="true" name="Q[17]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[17]">
      <label>falso</label>
      
      <!--Pregunta 440-->
      <p>Generalmente hago las cosas por mí mismo, en vez de buscar a alguien que me diga como hacerlas</p>
      <input type="radio" id="true" name="Q[18]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[18]">
      <label>falso</label>

      <!--Pregunta 441-->
      <p>Siento miedo cuando estoy en un lugar pequeño y cerrado</p>
      <input type="radio" id="true" name="Q[19]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[19]">
      <label>falso</label>
      
      <!--Pregunta 442-->
      <p>Admito que a veces me he preocupado sin motivo alguno por cosas que no valían la pena</p>
      <input type="radio" id="true" name="Q[20]">
      <label>verdadero</label>    <br>         
      <input type="radio" id="false" name="Q[20]">
      <label>falso</label>
      
      <!--Pregunta 443-->
      <p>No trato de disimular mi pobre opinión o lástima sobre algunas personas</p>
      <input type="radio" id="true" name="Q[21]">
      <label>verdadero</label>   <br>          
      <input type="radio" id="false" name="Q[21]">
      <label>falso</label>
      
      <!--Pregunta 444-->
      <p>Soy una persona de una gran tensión</p>
      <input type="radio" id="true" name="Q[22]">
      <label>verdadero</label>   <br>          
      <input type="radio" id="false" name="Q[22]">
      <label>falso</label>
      
      <!--Pregunta 445-->
      <p>Frecuentemente he trabajado a las órdenes de personas que parecen haber arreglado las cosas de tal modo, que ellas son las que reciben el reconocimiento de una buena labor y, en cambio, atribuyen los errores a sus subordinados</p>
      <input type="radio" id="true" name="Q[23]">
      <label>verdadero</label>  <br>           
      <input type="radio" id="false" name="Q[23]">
      <label>falso</label>
      
      <!--Pregunta 446-->
      <p>A veces me es difícil defender mis derechos por ser tan reservado</p>
      <input type="radio" id="true" name="Q[24]">
      <label>verdadero</label>   <br>          
      <input type="radio" id="false" name="Q[24]">
      <label>falso</label>
      
      <!--Pregunta 447-->
      <p>La suciedad me espanta o me disgusta</p>
      <input type="radio" id="true" name="Q[25]">
      <label>verdadero</label>    <br>         
      <input type="radio" id="false" name="Q[25]">
      <label>falso</label>
      
      <!--Pregunta 448-->
      <p>Vivo una vida de ensueño, acerca de la cual no digo nada a nadie</p>
      <input type="radio" id="true" name="Q[26]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[26]">
      <label>falso</label>

      <!--Pregunta 449-->
      <p>Algunos de mis familiares tienen mal carácter</p>
      <input type="radio" id="true" name="Q[27]">
      <label>verdadero</label>     <br>        
      <input type="radio" id="false" name="Q[27]">
      <label>falso</label>
      
      <!--Pregunta 450-->
      <p>No puedo hacer bien ninguna cosa</p>
      <input type="radio" id="true" name="Q[28]">
      <label>verdadero</label><br>         
      <input type="radio" id="false" name="Q[28]">
      <label>falso</label>
      
      <!--Pregunta 451-->
      <p>A menudo me he sentido culpable porque he fingido mayor sufrimiento del que realmente sentía</p>
      <input type="radio" id="true" name="Q[29]">
      <label>verdadero</label><br>
      <input type="radio" id="false" name="Q[29]">
      <label>falso</label>
  
      <!--Pregunta 452-->
      <p>Por regla general defiendo con tenacidad mis opiniones</p>
      <input type="radio" id="true" name="Q[30]">
      <label>verdadero</label><br>          
      <input type="radio" id="false" name="Q[30]">
      <label>falso</label>
      
      <!--Pregunta 453-->
      <p>No temo a las arañas</p>
      <input type="radio" id="true" name="Q[31]">
      <label>verdadero</label>  <br>           
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

