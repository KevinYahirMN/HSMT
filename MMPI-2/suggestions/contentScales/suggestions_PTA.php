<?php

class suggestions_PTA{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Las personas con puntuaciones elevadas 
                en esta escala son muy trabajadoras, activas y 
                orientadas hacia el trabajo: frecuentemente se 
                muestran impacientes, irritables y tensas. 
                Para ellos, no hay suficiente tiempo en el día 
                para terminar sus tareas, por lo que no les gusta 
                esperar y ser interrumpidos. 
                Son muy directos y pueden ser desagradables en sus 
                relaciones con otros, a quienes presionan mediante su agresividad. 
                Suelen ser hostiles y se enojan con facilidad. 
                Al parecer en mujeres esta es una medida de desadaptación, 
                quienes obtienen puntajes altos son consideradas como suspicaces. 
                Se refieren a expresiones de enojo y competencia.
                Las esposas de los hombres que obtuvieron puntuaciones 
                elevadas, los describen como mundanos, críticos, enojones y tensos.';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;          
        }
        return $text;
    }
}

?>