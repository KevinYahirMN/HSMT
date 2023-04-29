<?php
include_once('../Interfaces/ISuggestions.php');
class Suggestions_F implements ISuggestions{
    function highPositive(){
        $text = "Es un hombre bueno, leal, de 
        compañía. Es sensible a cómo se siente 
        la gente y tiene buenos conocimientos 
        en cuanto a lo que se dice y se siente.";
        return $text;
    }

    function highNegative(){
        $text = "No está preocupado en cuanto a 
        agradar a su jefe. Raras veces toma la 
        posición de estar fuertemente en contra 
        de una posición.";
        return $text;
    }

    function lowPositive(){
        $text = "No necesita ningún empuje de su jefe. 
        Es motivado por el trabajo, no por la 
        “palmada en la espalda” de su jefe.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Tiende a ser rebelde, está pronto a retar 
        a la autoridad y bajarla de pedestal.";
        return $text;
    }
}
?>