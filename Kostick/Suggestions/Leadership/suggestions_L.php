<?php
include_once('../Interfaces/ISuggestions.php');
class Suggestions_L implements ISuggestions{
    function highPositive(){
        $text = "Tiene confianza, se apoya del 
        liderazgo. Se tiene confianza que no 
        compite con sus subordinados.";
        return $text;
    }

    function highNegative(){
        $text = "Le interesa más la imagen y el status 
        dentro del grupo en donde interactúa. 
        Con frecuencia es un individuo 
        ostentoso con exceso de confianza.";
        return $text;
    }

    function lowPositive(){
        $text = "No es altamente competitivo. Puede 
        estar contento de permanecer como 
        trabajador y por lo tanto está hecho 
        para un trabajo en el que no haya 
        expectaciones por el liderazgo.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Tiene un complejo en función del 
        liderazgo. No se ve a sí mismo como un 
        líder. No es dominante.";
        return $text;
    }
}
?>