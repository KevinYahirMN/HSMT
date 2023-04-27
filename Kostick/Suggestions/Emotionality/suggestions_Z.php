<?php
class Suggestions_Z implements ISuggestions{
    function highPositive(){
        $text = "Es abierto a nuevas ideas y entusiasta 
        acerca del cambio.";
        return $text;
    }

    function highNegative(){
        $text = "No tiene descanso interno y se aburre 
        fácilmente. Puede no permanecer en 
        una función el tiempo suficiente como 
        para su valor real.";
        return $text;
    }

    function lowPositive(){
        $text = "Se puede adaptar a la rutina fácilmente 
        sin aburrirse.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Es el tipo de “vara en el lodo” y ofrece 
        resistencia al cambio.";
        return $text;
    }
}
?>