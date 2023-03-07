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
<html>
    <link rel="stylesheet" href="style.css">
   <head>
    <title>Preguntas 271-300</title>
    <link rel="shortcut icon" href="ico.ico" />
   </head>
   <body>
    <header>
        <h1 id="titulo"> Cuestionario </h1>
        <h2> Responda las siguientes preguntas </h2>
      </header>
      
      <main id="principal">
        <p id="description"> Lea con atención las siguientes preguntas y responda con total honestidad</p>
      
        <form id="formulario">

        <form method="post" action="Form_301-330.php">
             <!--Pregunta 271-->
             <p>Creo que mi sensibilidad es más intensa que la de la mayor parte de la gente</p>
             <input type="radio" value="true" name="Q[1]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[1]">
             <label>falso</label>
 
             <!--Pregunta 272-->
             <p>En ningún momento de mi vida me ha gustado jugar con muñecos</p>
             <input type="radio" value="true" name="Q[2]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[2]">
             <label>falso</label>
 
             <!--Pregunta 273-->
             <p>Para mí, la vida es tensión la mayor parte del tiempo</p>
             <input type="radio" value="true" name="Q[3]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[3]">
             <label>falso</label>
 
             <!--Pregunta 274-->
             <p>Soy tan susceptible en algunos asuntos que no puedo hablar de ellos</p>
             <input type="radio" value="true" name="Q[4]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[4]">
             <label>falso</label>
 
             <!--Pregunta 275-->
             <p>Me costaba mucho hablar delante de todos en el colegio</p>
             <input type="radio" value="true" name="Q[5]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[5]">
             <label>falso</label>
 
             <!--Pregunta 276-->
             <p>Quiero a mi madre (o la quise si falleció)</p>
             <input type="radio" value="true" name="Q[6]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[6]">
             <label>falso</label>
 
             <!--Pregunta 277-->
             <p>Incluso cuando estoy con gente, me siento solo la mayor parte del tiempo</p>
             <input type="radio" value="true" name="Q[7]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[7]">
             <label>falso</label>
 
 
             <!--Pregunta 278-->
             <p>Consigo todas las simpatías que debería</p>
             <input type="radio" value="true" name="Q[8]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[8]">
             <label>falso</label>
 
             <!--Pregunta 279-->
             <p>Me niego a participar en algunos juegos porque no soy hábil en ellos</p>
             <input type="radio" value="true" name="Q[9]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[9]">
             <label>falso</label>
 
             <!--Pregunta 280-->
             <p>Me parece que hago amigos tan rápido como los demás</p>
             <input type="radio" value="true" name="Q[10]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[10]">
             <label>falso</label>
 
             <!--Pregunta 281-->
             <p>Me desagrada tener gente a mi alrededor</p>
             <input type="radio" value="true" name="Q[11]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[11]">
             <label>falso</label>
 
 
             <!--Pregunta 282-->
             <p>Dicen que hablo cuando duermo</p>
             <input type="radio" value="true" name="Q[12]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[12]">
             <label>falso</label>
 
 
             <!--Pregunta 283-->
             <p>Quien provoca la tentación dejando una cosa valiosa sin protegerla es tan culpable del robo como quien la roba</p>
             <input type="radio" value="true" name="Q[13]">
             <label>verdadero</label><br>
             <input type="radio" value="false" name="Q[13]">
             <label>falso</label>

            <!--Pregunta 284-->            
            <p>Pienso que casi todo el mundo diria una mentira para evitar problemas</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>

            <!--Pregunta 285-->
            <p>Soy mas sensible que la mayoria de la gente</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>
      
            <!--Pregunta 286-->
            <p>A la mayor parte de la gente le desagrada interiormente dejar lo suyo para ayudar a los demás</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label>  <br>          
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>

            <!--Pregunta 287-->            
            <p>Muchos de mis sueños son sobre temas sexuales</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label>  <br>          
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>

            <!--Pregunta 288-->
            <p>Mis padres y familiares encuentran mas defectos en mi de lo que deberían</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label>     <br>       
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>

            <!--Pregunta 289-->
            <p>Me aturdo fácilmente</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>

            <!--Pregunta 290-->            
            <p>Me preocupan el dinero y los negocios</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>

            <!--Pregunta 291-->
            <p>Nunca he estado enamorado de alguien</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label>    <br>        
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>

            <!--Pregunta 292-->
            <p>Me han asustado ciertas cosas que han hecho algunos de mis familiares</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>

            <!--Pregunta 293-->            
            <p>Casi nunca sueño</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>

            <!--Pregunta 294-->
            <p>A menudo me salen manchas rojas en el cuello</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>

            <!--Pregunta 295-->
            <p>Nunca he tenido parálisis ni sufrido una debilidad desacostumbrada en algunos de mis músculos</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label>        <br>    
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>

            <!--Pregunta 296-->            
            <p>Algunas veces pierdo o se me cambia la voz, incluso sin estar resfriado</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>

            <!--Pregunta 297-->
            <p>Mi padre o mi padre me obligaron frecuentemente a obedecer, incluso cuando yo pensaba que ello no era razonable</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label>       <br>     
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
      
            <!--Pregunta 298-->
            <p>A veces percibo olores extraños</p>
            <input type="radio" value="true" name="[Q28]">
            <label>verdadero</label>        <br>    
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>

            <!--Pregunta 299-->            
            <p>No puedo concentrarme en una sola cosa</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label>      <br>      
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>

            <!--Pregunta 300-->
            <p>Tengo razones para sentirme celoso de uno o más de mis familiares</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label>          <br>  
            <input type="radio" value="false" name="Q[30]">
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












     
            




       