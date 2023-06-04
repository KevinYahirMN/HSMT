<?php

class suggestions_OBS{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Dificultades para tomar decisiones y meditan 
                excesivamente acerca de sus asuntos o problemas, 
                provocando que otros se impacienten.
                Tener que llevar a cabo cambios los llena de tensión 
                y pueden manifestarse algunas conductas compulsivas, 
                como contar o guardar cosas sin importancia.
                Tienden a preocuparse en exceso lo que con frecuencia 
                puede llevarlos a sentirse abrumados por sus propios pensamientos. 
                Los hombres que calificaron alto fueron descritos por sus parejas 
                como: desinteresados en las cosas y faltos de confianza en sí mismos. 
                Las mujeres fueron descritas como realistas acerca de sus habilidades, 
                exageradamente autocríticas y con tendencia a culparse a sí mismas.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>