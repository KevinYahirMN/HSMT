<?php

class suggestions_AMAC{
    
    function suggestions($count){        
        switch($count){
            case $count < 41:
                $text = "Los puntajes bajos indican que el 
                individuo tiende a ser introvertido, tímido y 
                con falta de confianza en sí mismo. 
                Puntajes crudos menores de 24 contraindican 
                abuso de substancias.";
            break;
            case $count > 64:
                $text = "La elevación de la escala Mac Andrew 
                no sugiere desarrollo de adicción a las substancias 
                ni indica la presencia de uso o abuso de substancias, 
                solamente sugiere un desarrollo potencial de 
                alcoholismo o posibles problemas de abuso de drogas.
                Los puntajes altos son característicos también de 
                individuos que son socialmente extrovertidos y que 
                están dispuestos a correr riesgos, además tienen 
                problemas para concentrarse, pueden tener historias 
                de problemas de conducta en la escuela o con la 
                ley y disfrutan las competencias de cualquier tipo. 
                Los puntajes naturales arriba de 24 sugieren abuso 
                de substancias, ya sea alcohol u otras drogas.";
            break;   
            default:
            $text = "Puntuación normal";
            break;
        }
        return $text;
    }
}

?>