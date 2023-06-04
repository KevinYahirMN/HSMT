<?php

class suggestions_ls3{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "La escala es bipolar significa que las puntuaciones 
                bajas indican lo contrario a las puntajes altos.";
            break;
            case $count > 64:
                $text = "Tienden a evitar estar en grupo, son poco 
                amigables, se aíslan socialmente y evitan participar 
                con los demás. Quizá les disguste las fiestas y los 
                bailes. Esta escala indica baja autoestima y poca confianza 
                autocrítica, cuestionamiento del juicio propio y sentimientos 
                de incapacidad para determinar el propio destino.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>