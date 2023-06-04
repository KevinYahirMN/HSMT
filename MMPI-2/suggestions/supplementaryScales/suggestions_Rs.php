<?php

class suggestions_Rs{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Quienes obtienen puntuaciones bajas en 
                Rs, debajo de 40, se caracterizan por no 
                estar dispuestas a asumir 
                responsabilidades y tal vez no hayan 
                aceptado valores o normas sociales; por 
                otra parte no pueden ser vistos a sí mismos 
                como poco dignos de confianza, faltos de 
                integridad y con pobre sentido de 
                responsabilidad para con el grupo.";
            break;
            case $count > 64:
                $text = "Las personas que tienen más de 25 años 
                con puntuaciones altas tienden a aceptar 
                su sistema de valores actual e intentan 
                continuar utilizándolo, y quienes obtienen 
                puntuaciones bajas pueden cuestionar su 
                sistema de valores presente o rechazar los 
                recién adquiridos. Para las personas más 
                jóvenes, las puntuaciones RS altas indican 
                que aceptan el sistema de valores de los 
                padres, mientras que las puntuaciones 
                bajas indican el cuestionamiento o rechazo 
                del sistema de valores de los padres. 
                Puntuaciones altas en RS sugieren que un 
                individuo tiende a verse a sí mismo y ser 
                visto por otras personas como dispuesto a 
                aceptar las consecuencias de su propia 
                conducta y como responsable, así mismo 
                se le considera digno de confianza y 
                persona íntegra, con sentido de 
                responsabilidad para el grupo; además, es 
                probable que se encuentre en situaciones 
                de liderazgo y toma de decisiones.
                Puntuaciones altas arriba de 60, indican 
                un fuerte sentido de justicia y un alto 
                sentido a las normas, indican también que
                la persona tiene confianza en sí misma, es 
                digna de confianza y responsable, y que 
                posee, además, un sentido de compromiso 
                social. Así mismo, están profundamente 
                interesados en problemas éticos y morales: 
                rechazan los privilegios y favores, y dan un 
                énfasis excesivo al cumplimiento de su 
                parte correspondiente de cargas y deberes.";
            break;  
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>