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
    <title>Preguntas 121-150</title>
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

        <form method="post" action="Form_151-180.php">
            <!--Pregunta 121-->
            <p>Nunca me he entregado a prácticas sexuales fuera de lo común</p>
            <input type="radio" value="true" name="Q[1]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[1]">
            <label>falso</label>
            
            <!--Pregunta 122-->
            <p>A veces mi pensamiento ha ido más rápido y delante de mis palabras</p>
            <input type="radio" value="true" name="Q[2]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[2]">
            <label>falso</label>
            
            <!--Pregunta 123-->
            <p>Si pudiera entrar en un espectáculo sin pagar y estuviera seguro de 
                no ser visto, probablmente lo haría</p>
            <input type="radio" value="true" name="Q[3]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[3]">
            <label>falso</label>
            
            <!--Pregunta 124-->
            <p>Generalmente me pregunto que razón oculta puede tener otra persona 
                cuando me hace un favor</p>
            <input type="radio" value="true" name="Q[4]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[4]">
            <label>falso</label>

            <!--Pregunta 125-->
            <p>Creo que mi vida hogareña es tan agradable como la de mucha gente 
                que conozco</p>
            <input type="radio" value="true" name="Q[5]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[5]">
            <label>falso</label>
            
            <!--Pregunta 126-->
            <p>Es necesario reforzar las leyes vigentes</p>
            <input type="radio" value="true" name="Q[6]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[6]">
            <label>falso</label>
            
            <!--Pregunta 127-->
            <p>Me hieren profundamente las críticas y los retos</p>
            <input type="radio" value="true" name="Q[7]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[7]">
            <label>falso</label>
            
            <!--Pregunta 128-->
            <p>Me gusta cocinar</p>
            <input type="radio" value="true" name="Q[8]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[8]">
            <label>falso</label>

            <!--Pregunta 129-->
            <p>Mi conducta es ampliamente controlada por las costumbres que me 
                rodean</p>
            <input type="radio" value="true" name="Q[9]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[9]">
            <label>falso</label>

            <!--Pregunta 130-->
            <p>A veces siento que verdaderamente soy un inútil</p>
            <input type="radio" value="true" name="Q[10]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[10]">
            <label>falso</label>
            
            <!--Pregunta 131-->
            <p>Cuando era pertenecia a una banda que intentaba mantenerse 
                unida como "carne y uña"</p>
            <input type="radio" value="true" name="Q[11]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[11]">
            <label>falso</label>

            <!--Pregunta 132-->
            <p>Creo en la vida del allá</p>
            <input type="radio" value="true" name="Q[12]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[12]">
            <label>falso</label>

            <!--Pregunta 133-->
            <p>Me gustaría ser soldado</p>
            <input type="radio" value="true" name="Q[13]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[13]">
            <label>falso</label>

            <!--Pregunta 134-->
            <p>A veces siento deseos de tomarme a puñetazos con alguien</p>
            <input type="radio" value="true" name="Q[14]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[14]">
            <label>falso</label>

            <!--Pregunta 135-->
            <p>Frecuentemente he perdido o desaprovechado cosas por no saber
                 decidirme a tiempo</p>
            <input type="radio" value="true" name="Q[15]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[15]">
            <label>falso</label>

            <!--Pregunta 136-->
            <p>Me molesta que me pidan consejo o que me interrumpan cuando 
                estoy trabajando en algo importante</p>
            <input type="radio" value="true" name="Q[16]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[16]">
            <label>falso</label>

            <!--Pregunta 137-->
            <p>Solía llevar un diario personal</p>
            <input type="radio" value="true" name="Q[17]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[17]">
            <label>falso</label>

            <!--Pregunta 138-->
            <p>Creo que se trama algo contra mí</p>
            <input type="radio" value="true" name="Q[18]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[18]">
            <label>falso</label>

            <!--Pregunta 139-->
            <p>En un juego o partida suelo más ganar que perder</p>
            <input type="radio" value="true" name="Q[19]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[19]">
            <label>falso</label>

            <!--Pregunta 140-->
            <p>Casi todas las noches me duermo con ideas o pensamientos molestos</p>
            <input type="radio" value="true" name="Q[20]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[20]">
            <label>falso</label>

            <!--Pregunta 141-->
            <p>Durante los últimos años he estado sano casi siempre</p>
            <input type="radio" value="true" name="Q[21]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[21]">
            <label>falso</label>

            <!--Pregunta 142-->
            <p>Nunca he tenido un ataque o convulsión</p>
            <input type="radio" value="true" name="Q[22]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[22]">
            <label>falso</label>

            <!--Pregunta 143-->
            <p>Ahora no estoy subiendo o bajando de peso</p>
            <input type="radio" value="true" name="Q[23]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[23]">
            <label>falso</label>
            
            <!--Pregunta 144-->
            <p>Creo que me siguen</p>
            <input type="radio" value="true" name="Q[24]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[24]">
            <label>falso</label>

            <!--Pregunta 145-->
            <p>Creo que frecuentemente he sido castigado sin causa</p>
            <input type="radio" value="true" name="Q[25]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[25]">
            <label>falso</label>

            <!--Pregunta 146-->
            <p>Lloro con facilidad</p>
            <input type="radio" value="true" name="Q[26]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[26]">
            <label>falso</label>

            <!--Pregunta 147-->
            <p>Actualmente no comprendo lo que leo con la facilidad 
                que tenía antes</p>
            <input type="radio" value="true" name="Q[27]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[27]">
            <label>falso</label>
            
            <!--Pregunta 148-->
            <p>Nunca me he sentido mejor que ahora</p>
            <input type="radio" value="true" name="Q[28]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[28]">
            <label>falso</label>

            <!--Pregunta 149-->
            <p>A veces siento dolores en la parte superior de la cabeza</p>
            <input type="radio" value="true" name="Q[29]">
            <label>verdadero</label><br>
            <input type="radio" value="false" name="Q[29]">
            <label>falso</label>

            <!--Pregunta 150-->
            <p>A veces siento que tengo que hacerme daño a mi mismo o alguien</p>
            <input type="radio" value="true" name="Q[30]">
            <label>verdadero</label><br>
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












     
            







       