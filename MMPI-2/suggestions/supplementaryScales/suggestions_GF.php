<?php

class suggestions_GF{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Puntuación baja";
            break;
            case $count > 64:
                $text = "Las puntuaciones elevadas tanto en 
                hombres con mujeres, son 
                características positivas, debido a que 
                son personas que tienden a tener 
                confianzas en sí mismas y libres de 
                temores y preocupaciones. En caso de 
                varones GM se relaciona con una gran 
                confianza en sí mismos, gran 
                perseverancia y amplios intereses, 
                además de la carencia de temores o 
                sentimientos referentes de sí mismos.
                Para las mujeres GM se vincula con una 
                gran confianza en sí mismas, con 
                honestidad y la disposición para probar 
                nuevas cosas, además de que indica la 
                carencia de preocupaciones y 
                sentimientos referidos a sí mismas.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>