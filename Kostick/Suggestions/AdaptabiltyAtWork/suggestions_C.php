<?php
include_once('../Interfaces/ISuggestions.php');
class Suggestions_C implements ISuggestions{
    function highPositive(){
        $text = "Es una persona que estructura las 
        cosas y es agradable estar con ella 
        porque es pulcra, ordenada y 
        cuidadosa.";
        return $text;
    }

    function highNegative(){
        $text = "Tiende a ser muy terco y rígido. Puede 
        ser tan ordenado que llega al grado de 
        interferir con eficiencia.";
        return $text;
    }

    function lowPositive(){
        $text = "Tolera la confusión. Es flexible en su 
        manera de pensar.";
        return $text;
    }
    
    function lowNegative(){
        $text = "No se preocupa demasiado en cuanto al 
        orden y el sistema.";
        return $text;
    }
}
?>