<?php
include('../Interfaces/ISuggestions.php');
class Suggestions_S implements ISuggestions{
    function highPositive(){
        $text = "Crea una buena atmósfera, buenas 
        relaciones sociales, se interesa por los 
        derechos de los demás y de sí mismo y 
        establece buenas comunicaciones.";
        return $text;
    }

    function highNegative(){
        $text = "Puede estar preocupado por los 
        aspectos sociales. Puede empelar 
        bastante tiempo en las amenidades 
        sociales en lugar de hacer un trabajo 
        bien o resolver un conflicto.";
        return $text;
    }

    function lowPositive(){
        $text = "Es un ganador, un trabajador que 
        dirige bien la energía.";
        return $text;
    }
    
    function lowNegative(){
        $text = "A menudo no tiene tacto social. Es un 
        introvertido y se siente torpe 
        socialmente.";
        return $text;
    }
}
?>