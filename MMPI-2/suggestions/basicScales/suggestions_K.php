<?php

class suggestions_K{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = 'Se respondió verdadero a la mayoría 
                de reactivos.
                Desorganización emocional, ingenuidad, 
                autocrítica, debilidad yoica.
                Pretende proyetar una imagen inaceptable de su 
                persona.
                Exageración de conflictos.
                Timidez, inhibición, incapacidad de relacionarse 
                con los demás.
                Sincero y torpe en sus relaciones, cínico o 
                incrédulo.
                Conformista.
                Abulia.
                Desconfianza, suspicacia de los demás.
                Dificultad para enfrentar los problemas o darles 
                solución.
                Confusión orgánica o psicótica.
                Niveles bajos de autoconocimiento y 
                autocomprensión.';
            break;
            case $count < 71:
                $text = 'Adaptación, sociabilidad, capacidad 
                intelectual alta.
                Independencia, autoconfianza.
                Alto nivel de comunicación con el medio.
                Comprensión y solución de problemas de forma 
                independiente y razonable.
                Ingenio y versatilidad.
                Elevado control en sus relaciones 
                interpersonales.
                Pensamiento claro.
                Pocos síntomas de trastorno emocional.';
            break;
            default:
                $text = 'Posible negación de problemas 
                personales.
                Respondió falso a gran parte de los reactivos.
                Pretende dar una imagen de control y eficacia.
                Timidez, indecisión, inhibición.
                Falta de autoconocimiento y autoentendimiento.
                Intolerancia a convicciones exrtañas o poco 
                convencionales.
                Baja probabilidad de conductas antisociales.';
            break;
        }
        return $text;
    }
}

?>