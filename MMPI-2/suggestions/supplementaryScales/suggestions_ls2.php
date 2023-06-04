<?php

class suggestions_ls2{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "La escala es bipolar significa que las 
                puntuaciones bajas indican lo contrario a los 
                puntajes altos.";
            break;
            case $count > 64:
                $text = "Tienden a evitar estar en grupo, son poco 
                amigables, se aíslan socialmente y evitan participar 
                con los demás. Quizá les disguste las fiestas y los 
                bailes. Indica disgusto y repudio a las actividades 
                en grupo y al estar en multitudes, por lo que estos
                sujetos evitan el contacto con otras personas.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>