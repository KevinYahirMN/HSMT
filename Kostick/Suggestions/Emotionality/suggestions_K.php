<?php
class Suggestions_K{
    function highPositive(){
        $text = "Tiende a ser abierto y franco con las 
        personas. Tiende a desmenuzar el 
        conflicto más que a ignorarlo o 
        evitarlo.";
        return $text;
    }

    function highNegative(){
        $text = "Se ofende con facilidad. Tiene una 
        “basura en el hombro” y es fácil de 
        malinterpretar negativamente lo que se 
        le dice.";
        return $text;
    }

    function lowPositive(){
        $text = "Puede ver las cosas desde una posición 
        elevada y objetiva y no le gusta 
        lastimar a nadie.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Es un introvertido emocionalmente que 
        trata de embotellar sus sentimientos y 
        tiene problema para enfrentarse a los 
        conflictos.";
        return $text;
    }
}
?>