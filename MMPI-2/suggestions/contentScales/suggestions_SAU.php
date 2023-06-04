<?php

class suggestions_SAU{
    function suggestions($count){
        switch($count){
            case $count > 64:
                $text = 'Puntajes altos se presentan en personas 
                con síntomas físicos en diversos órganos corporales. 
                Se incluyen sintomas gastrointestinales 
                (estreñimiento, náuseas y vómitos, problemas estomacales, etc.) 
                problemas neurológicos (convulsiones, mareos, desmayos y parálisis) 
                problemas en la piel, dolor (cabeza, rodillas), problemas respiratorios 
                (tos, fiebre de heno o asma) estos individuos se preocupan por su salud 
                y se sienten más enfermos que el resto de las personas.
                Las personas que tienen problemas reales de salud puntuan elevadas en esta escala';
            break;
            case $count <= 64:
                $text = 'Puntuación normal';
            break;        
        }
        return $text;
    }
}

?>