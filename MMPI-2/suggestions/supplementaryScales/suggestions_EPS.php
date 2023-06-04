<?php

class suggestions_EPS{
    
    function suggestions($count){        
        switch($count){
            case $count > 64:
                $text = "Parece estar muy relacionada con los 
                índices de ansiedad y con la Pt y A. La escala EPS 
                tiende a elevarse en personas que presentan trastornos 
                somáticos en los que la ansiedad es un componente importante.
                Se encontró muy elevada en pacientes con colon irritable y 
                también en pacientes con dermatitis, lo que podría indicar 
                que tiende a elevarse en personas que presentan trastornos 
                somáticos en los que la ansiedad es un componente 
                importante.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>