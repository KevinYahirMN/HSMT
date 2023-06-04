<?php

class suggestions_Do{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Las puntuaciones bajas en Do, muestran a personas 
                sumisas, poco enérgicas y fácilmente influenciables por 
                otras personas, carecen de confianza en sí mismas y 
                sienten que manejan sus problemas inadecuadamente.";
            break;
            case $count > 64:
                $text = "Los puntajes altos de Do son asociados con 
                equilibrio, confianza, liderazgo, seguridad en sí mismo, 
                iniciativa social, perseverancia, resolución y liderazgo 
                de grupo, es decir, son características de personas consideradas 
                generalmente como dominantes en situaciones sociales, que se 
                consideran a sí mismos y son considerados por los demás 
                capaces de enfrentar apropiadamente las situaciones personales, 
                no se intimidan fácilmente y se sienten seguros. 
                Suelen ser personas optimistas, eficientes, realistas y
                orientadas a las tareas que les son encomendadas, por lo que 
                se muestran muy perseverantes y ecuánimes ante situaciones adversas.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>