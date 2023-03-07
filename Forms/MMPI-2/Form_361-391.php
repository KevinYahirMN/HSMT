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
    <title>Preguntas 361-391</title>
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
          <form method="post" action="Form_392-422.php"></form>
       
      <!--Pregunta 361-->
      <p>Alguien ha tratado de influenciar mi mente</p>
      <input type="radio" value="true" name="Q[1]">
      <label>verdadero</label>      <br>      
      <input type="radio" value="false" name="Q[1]">
      <label>falso</label>
                                              
                                          
                                          
                          
                         
                              
                                  <!--Pregunta 362-->            
      <p>He fingido "estar enfermo" para evitar hacer algo</p>
      <input type="radio" value="true" name="Q[2]">
      <label>verdadero</label>   <br>         
      <input type="radio" value="false" name="Q[2]">
      <label>falso</label>

       
                                  
                        
                              
                                 
        <!--Pregunta 363-->
      <p>Mis preocupaciones tienden a desaparecer cuando me junto con amigos</p>
      <input type="radio" value="true" name="Q[3]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[3]">
      <label>falso</label>
                                  
                      <!--Pregunta 364-->
      <p>Tiendo a abandonar lo que estoy haciendo si me sale mal</p>
      <input type="radio" value="true" name="Q[4]">
      <label>verdadero</label>   <br>         
      <input type="radio" value="false" name="Q[4]">
      <label>falso</label>
                                          
                                      
                 <!--Pregunta 365-->            
      <p>Me gusta que la gente conozca lo que realmente pienso</p>
      <input type="radio" value="true" name="Q[5]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[5]">
      <label>falso</label>
                                              
                                          
                                              <!--Pregunta 366-->
      <p>He tenido períodos en los que me sentí tan lleno de fuerzas que no necesitaba dormir</p>
      <input type="radio" value="true" name="Q[6]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[6]">
      <label>falso</label>

                                              
                                        
                                                <!--Pregunta 367-->
      <p>Siempre que se vea posible evito estar en una multitud</p>
      <input type="radio" value="true" name="Q[7]">
      <label>verdadero</label>      <br>      
      <input type="radio" value="false" name="Q[7]">
      <label>falso</label>

                                              
                                          
                                                 <!--Pregunta 368-->
      <p>Trato de evitar situaciones de crisis o dificultad</p>
      <input type="radio" value="true" name="Q[8]">
      <label>verdadero</label>      <br>      
      <input type="radio" value="false" name="Q[8]">
      <label>falso</label>
                                            

                                              
                                          
                                               <!--Pregunta 369-->
      <p>Me considero capaz de lograr lo que me propongo cuando otros creen que no vale la pena</p>
      <input type="radio" value="true" name="Q[9]">
      <label>verdadero</label>     <br>       
      <input type="radio" value="false" name="Q[9]">
      <label>falso</label>

                                              
                                         
                                               <!--Pregunta 370-->
      <p>Me gustan las fiestas y reuniones sociales</p>
      <input type="radio" value="true" name="Q[10]">
      <label>verdadero</label>     <br>       
      <input type="radio" value="false" name="Q[10]">
      <label>falso</label>

                                            

                                              
                                         
                                              <!--Pregunta 371-->
      <p>Muchas veces desee pertenecer al sexo opuesto</p>
      <input type="radio" value="true" name="Q[11]">
      <label>verdadero</label>   <br>         
      <input type="radio" value="false" name="Q[11]">
      <label>falso</label>
                                            

                                              
                                         
                                             <!--Pregunta 372-->
      <p>No me enojo fácilmente</p>
      <input type="radio" value="true" name="Q[12]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[12]">
      <label>falso</label>


                                              
                                          
                                                  <!--Pregunta 373-->
      <p>He hecho algunas cosas malas en el pasado que no se las conté a nadie</p>
      <input type="radio" value="true" name="Q[13]">
      <label>verdadero</label>       <br>     
      <input type="radio" value="false" name="Q[13]">
      <label>falso</label>
                                            

                                              
                                         
                                              <!--Pregunta 374-->
      <p>La mayoria de la gente puede hacer cosas incorrectas con tal de lograr su propósito</p>
      <input type="radio" value="true" name="Q[14]">
      <label>verdadero</label>       <br>     
      <input type="radio" value="false" name="Q[14]">
      <label>falso</label>

                                              
                                          
                                            
<!--Pregunta 375-->
<p>Me pongo nervioso cuando la gente me hacer preguntas personales</p>
<input type="radio" value="true" name="Q[15]">
<label>verdadero</label>       <br>     
<input type="radio" value="false" name="Q[15]">
<label>falso</label>
                                              
                                         
                                              <!--Pregunta 376-->
      <p>Me siento incapaz de planificar mi futuro</p>
      <input type="radio" value="true" name="Q[16]">
      <label>verdadero</label>      <br>      
      <input type="radio" value="false" name="Q[16]">
      <label>falso</label>
                                            

                                              
                                        
                                            
<!--Pregunta 377-->
<p>Me desagrada mi forma de ser</p>
<input type="radio" value="true" name="Q[17]">
<label>verdadero</label>   <br>         
<input type="radio" value="false" name="Q[17]">
<label>falso</label>
                                              
                                         
                                            <!--Pregunta 378-->
      <p>Generalmente me enojo cuando amigos o familiares me dan consejos</p>
      <input type="radio" value="true" name="Q[18]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[18]">
      <label>falso</label>

                                              
                                        
                                            <!--Pregunta 379-->
      <p>Me golpearon mucho cuando era chico</p>
      <input type="radio" value="true" name="Q[19]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[19]">
      <label>falso</label>

                                              
                                          
                                                   <!--Pregunta 380-->
      <p>Me molesto cuando la gente me elogia</p>
      <input type="radio" value="true" name="Q[20]">
      <label>verdadero</label>  <br>          
      <input type="radio" value="false" name="Q[20]">
      <label>falso</label>

                                              
                                         
                                            <!--Pregunta 381-->
      <p>Me disgusta escuchar a la gente que da sus opiniones acerca de la vida</p>
      <input type="radio" value="true" name="Q[21]">
      <label>verdadero</label>     <br>       
      <input type="radio" value="false" name="Q[21]">
      <label>falso</label>

                                              
                                         
                                            <!--Pregunta 382-->
      <p>A menudo he tenido desacuerdos serios con gente amiga</p>
      <input type="radio" value="true" name="Q[22]">
      <label>verdadero</label>  <br>          
      <input type="radio" value="false" name="Q[22]">
      <label>falso</label>


                                              
                                         
                                            
<!--Pregunta 383-->
<p>Se que puedo contar con la ayuda de mi familia cuando las cosas me van mal</p>
<input type="radio" value="true" name="Q[23]">
<label>verdadero</label>      <br>      
<input type="radio" value="false" name="Q[23]">
<label>falso</label>
                                              
                                          
                                                <!--Pregunta 384-->
      <p>Me gustaba jugar "a la mamá" o "al papá" cuando era niño</p>
      <input type="radio" value="true" name="Q[24]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[24]">
      <label>falso</label>

                                              
                                        
                                             <!--Pregunta 385-->
      <p>No le tengo miedo al fuego</p>
      <input type="radio" value="true" name="Q[25]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[25]">
      <label>falso</label>

                                              
                                         
                                                  <!--Pregunta 386-->
      <p>Muchas veces me he alejado de alguna persona por temor de decir o hacer algo de lo que después podría arrepentirme</p>
      <input type="radio" value="true" name="Q[26]">
      <label>verdadero</label>   <br>         
      <input type="radio" value="false" name="Q[26]">
      <label>falso</label>

                                              
                                        <!--Pregunta 387-->

                                          
                                              <p>Sólo puedo expresar lo que realmente siento cuando bebo</p>
                                              <input type="radio" value="true" name="Q[27]">
                                              <label>verdadero</label>  <br>          
                                              <input type="radio" value="false" name="Q[27]">
                                              <label>falso</label>

                                              
                                      

                                        
                                                <!--Pregunta 388-->
      <p>Rara vez tengo momentos de depresión (de bajoneo)</p>
      <input type="radio" value="true" name="Q[28]">
      <label>verdadero</label>   <br>         
      <input type="radio" value="false" name="Q[28]">
      <label>falso</label>


                                              
                                    
                                        <!--Pregunta 389-->
      <p>Me han dicho con frecuencia que tengo mal carácter</p>
      <input type="radio" value="true" name="Q[29]">
      <label>verdadero</label>  <br>          
      <input type="radio" value="false" name="Q[29]">
      <label>falso</label>



                                    
                                        <!--Pregunta 390-->
      <p>Desearia haber podido dejar de preocuparme por cosas que dije y que pudieron lastimar los sentimientos de algunas personas</p>
      <input type="radio" value="true" name="Q[30]">
      <label>verdadero</label>     <br>       
      <input type="radio" value="false" name="Q[30]">
      <label>falso</label>


                                          
                                     
        <!--Pregunta 391-->
      <p>Me siento incapaz de contarle a alguien todas mis cosas</p>
      <input type="radio" value="true" name="Q[31]">
      <label>verdadero</label>    <br>        
      <input type="radio" value="false" name="Q[31]">
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

