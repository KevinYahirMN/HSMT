<?php

class suggestions_ls1{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "La escala es bipolar significa que las puntuaciones 
                bajas indican lo contrario a las puntajes altos.";
            break;
            case $count > 64:
                $text = "Son tímidos en las situaciones interpersonales, 
                muestran incomodidad al estar rodeados de otros y 
                son reacios para iniciar relaciones. No se 
                consideran a sí mismos como sociables. Las 
                personas pueden mostrase tímidas con los demás, 
                apenarse fácilmente, molestas en situaciones 
                sociales e incomodas en situaciones nuevas.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>