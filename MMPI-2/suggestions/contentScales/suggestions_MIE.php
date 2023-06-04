<?php

class suggestions_MIE{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Evalúa la presencia de miedos específicos, 
                que incluyen ver sangre, estar en lugares altos, 
                temor a dejar el hogar, a desastres naturales, etc. 
                Las mujeres muestran calificaciones más elevadas que los hombres.
                También se eleva en reclusos probablemente por miedo específico a ser castigado.
                Las mujeres que calificaron alto, fueron vistas por sus parejas como: 
                desadaptadas, nerviosas y preocupadas acerca de la muerte.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>