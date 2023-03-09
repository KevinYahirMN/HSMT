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
    <title>Preguntas 454-484</title>
    <link rel="shortcut icon" href="ico.ico" />
   </head>
   <body>
    <header>
        <h1 id="titulo"> Cuestionario </h1>
        <h2> Responda las siguientes preguntas </h2>
      </header>    
      <main id="principal">
        <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
          <form method="post" action="Form_485-515.php">
          
          <!--Pregunta 454-->
          <p>Para mí el futuro carece de esperanza</p>
          <input type="radio" id="true" name="Q[1]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[1]">
          <label>falso</label>
          
          <!--Pregunta 455-->
          <p>Mis familiares y parientes más cercanos se llevan bastante bien</p>
          <input type="radio" id="true" name="Q[2]">
          <label>verdadero</label>     <br>       
          <input type="radio" id="false" name="Q[2]">
          <label>falso</label>
          
          <!--Pregunta 456-->
          <p>Me gustaría tener ropa cara</p>
          <input type="radio" id="true" name="Q[3]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[3]">
          <label>falso</label>
                                                                          
          <!--Pregunta 457-->
          <p>La gente puede hacerme cambiar de opinión muy fácilmente, incluso en materias en las 
            que creía tener ya un criterio firme</p>
          <input type="radio" id="true" name="Q[4]">
          <label>verdadero</label>  <br>          
          <input type="radio" id="false" name="Q[4]">
          <label>falso</label>
                                 
          <!--Pregunta 458-->
          <p>Ciertos animales me ponen nervioso</p>
          <input type="radio" id="true" name="Q[5]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[5]">
          <label>falso</label>
          
          <!--Pregunta 459-->
          <p>Puedo soportar tanto dolor como los demás</p>
          <input type="radio" id="true" name="Q[6]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[6]">
          <label>falso</label>
          
          <!--Pregunta 460-->
          <p>Varias veces he sido el último en darme por vencido al tratar de hacer algo</p>
          <input type="radio" id="true" name="Q[7]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[7]">
          <label>falso</label>
          
          <!--Pregunta 461-->
          <p>Me pone de mal humor que la gente me apure</p>
          <input type="radio" id="true" name="Q[8]">
          <label>verdadero</label>  <br>          
          <input type="radio" id="false" name="Q[8]">
          <label>falso</label>
          
          <!--Pregunta 462-->
          <p>No tengo miedo a los ratones</p>
          <input type="radio" id="true" name="Q[9]">
          <label>verdadero</label>    <br>        
          <input type="radio" id="false" name="Q[9]">
          <label>falso</label>
          
          <!--Pregunta 463-->
          <p>Varias veces a la semana siento como si fuera a suceder algo espantoso</p>
          <input type="radio" id="true" name="Q[10]">
          <label>verdadero</label>      <br>      
          <input type="radio" id="false" name="Q[10]">
          <label>falso</label>
          
          <!--Pregunta 464-->
          <p>Me siento cansado una buena parte del tiempo</p>
          <input type="radio" id="true" name="Q[11]">
          <label>verdadero</label>      <br>      
          <input type="radio" id="false" name="Q[11]">
          <label>falso</label>
            
          <!--Pregunta 465-->
          <p>Me gusta arreglar las cerraduras de las puertas</p>
          <input type="radio" id="true" name="Q[12]">
          <label>verdadero</label>        <br>    
          <input type="radio" id="false" name="Q[12]">
          <label>falso</label>
            
          <!--Pregunta 466-->
          <p>Algunas veces estoy seguro de que otro puede decir lo que estoy pensando</p>
          <input type="radio" id="true" name="Q[13]">
          <label>verdadero</label>         <br>   
          <input type="radio" id="false" name="Q[13]">
          <label>falso</label>
           
          <!--Pregunta 467-->
          <p>Me gusta leer temas científicos</p>
          <input type="radio" id="true" name="Q[14]">
          <label>verdadero</label>       <br>     
          <input type="radio" id="false" name="Q[14]">
          <label>falso</label>
            
          <!--Pregunta 468-->
          <p>Temo estar solo en lugares amplios y abiertos</p>
          <input type="radio" id="true" name="Q[15]">
          <label>verdadero</label>    <br>        
          <input type="radio" id="false" name="Q[15]">
          <label>falso</label>
            
          <!--Pregunta 469-->
          <p>Algunas veces me siento al borde de uan crisis nerviosa</p>
          <input type="radio" id="true" name="Q[16]">
          <label>verdadero</label>     <br>       
          <input type="radio" id="false" name="Q[16]">
          <label>falso</label>
            
          <!--Pregunta 470-->
          <p>Muchas personas tienen mala conducta sexual</p>
          <input type="radio" id="true" name="Q[17]">
          <label>verdadero</label>    <br>        
          <input type="radio" id="false" name="Q[17]">
          <label>falso</label>
            
          <!--Pregunta 471-->
          <p>A menudo he sentido miedo en plena noche</p>
          <input type="radio" id="true" name="Q[18]">
          <label>verdadero</label>   <br>         
          <input type="radio" id="false" name="Q[18]">
          <label>falso</label>
            
          <!--Pregunta 472-->
          <p>Me molesta mucho olvidarme donde pongo las cosas</p>
          <input type="radio" id="true" name="Q[19]">
          <label>verdadero</label>        <br>    
          <input type="radio" id="false" name="Q[19]">
          <label>falso</label>
            
          <!--Pregunta 473-->
          <p>La persona hacia quien sentía más afecto y admiración cuando era niño, fue una mujer 
            (madre, hermana tía u otra mujer)</p>
          <input type="radio" id="true" name="Q[20]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[20]">
          <label>falso</label>
            
          <!--Pregunta 474-->
          <p>Me gustan más las historias de aventuras que las románticas</p>
          <input type="radio" id="true" name="Q[21]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[21]">
          <label>falso</label>
            
          <!--Pregunta 475-->
          <p>A veces me confundo y no sé que decir</p>
          <input type="radio" id="true" name="Q[22]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[22]">
          <label>falso</label>
            
          <!--Pregunta 476-->
          <p>Soy una persona poco agradable</p>
          <input type="radio" id="true" name="Q[23]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[23]">
          <label>falso</label>
            
          <!--Pregunta 477-->
          <p>Me gustan los deportes fuertes como el fútbol o rugby</p>
          <input type="radio" id="true" name="Q[24]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[24]">
          <label>falso</label>
            
          <!--Pregunta 478-->
          <p>Detesto a mi familia</p>
          <input type="radio" id="true" name="Q[25]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[25]">
          <label>falso</label>
            
          <!--Pregunta 479-->
          <p>Algunas personas piensan que es difícil conocerme, saber como soy</p>
          <input type="radio" id="true" name="Q[26]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[26]">
          <label>falso</label>
            
          <!--Pregunta 480-->
          <p>Paso mucho tiempo a solas</p>
          <input type="radio" id="true" name="Q[27]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[27]">
          <label>falso</label>
            
          <!--Pregunta 481-->
          <p>Me gusta que la gente conozca mi punto de vista cuando hacen cosas que me enojan</p>
          <input type="radio" id="true" name="Q[28]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[28]">
          <label>falso</label>
            
          <!--Pregunta 482-->
          <p>Me cuesta tomar decisiones</p>
          <input type="radio" id="true" name="Q[29]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[29]">
          <label>falso</label>
            
          <!--Pregunta 483-->
          <p>Soy una persona poca atractiva</p>
          <input type="radio" id="true" name="Q[30]">
          <label>verdadero</label><br>
          <input type="radio" id="false" name="Q[30]">
          <label>falso</label>
            
          <!--Pregunta 484-->
          <p>La gente es poco amable conmigo</p>
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

