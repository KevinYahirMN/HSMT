<?php

class suggestions_ENJ{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Las personas con puntajes altos en 
                esta escala presentan problemas de control del enojo, 
                se consideran a si mismas como irritables y gruñonas, 
                además de impacientes, temperamentales y tercas. 
                A veces sienten deseos de maldecir o destrozar cosas. 
                Pueden perder el autocontrol y dañar fisicamente a la gente o a objetos. 
                Mientras más alta la escala más probabilidades de que se muestre abiertamente agresiva.
                Los hombres fueron descritos por sus parejas como 
                desagradables, tercos, con problemas en sus relaciones 
                interpersonales, enojonas y con arrebatos agresivos.
                Las mujeres presentaban estas mismas características, 
                pero además se entristecían fácilmente y se les dificultaba salir de ese estado.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>