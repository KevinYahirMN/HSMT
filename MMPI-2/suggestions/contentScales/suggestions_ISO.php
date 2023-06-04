<?php

class suggestions_ISO{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'A los individuos con puntajes 
                altos les cuesta trabajo relacionarse 
                con los demás y prefieren estar solos.
                Es probable que en situaciones sociales 
                se sientan aislados y poco integrados al grupo.
                Se consideran a sí mismos como tímidos y no 
                les agradan las fiestas u otras reuniones sociales.
                Algunos tienen perturbaciones de sueño y 
                preocupaciones con respecto a la salud.
                Algunos se les diagnostican frecuentemente con 
                desórdenes depresivos. 
                Algunos fueron descritos por su pareja como tímidas, 
                tranquilas, poco amigables e incapaces de 
                disfrutar de las fiestas y de la convivencia con los amigos.
                ';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>