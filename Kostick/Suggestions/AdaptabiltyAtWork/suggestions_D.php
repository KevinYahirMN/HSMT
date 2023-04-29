<?php
include_once('../Interfaces/ISuggestions.php');
class Suggestions_D implements ISuggestions{
    function highPositive(){
        $text = "Encuentra gusto en trabajar con 
        detalles. Esta interesado y preocupado 
        acerca de la exactitud de las cosas";
        return $text;
    }

    function highNegative(){
        $text = "Puede perderse en el detalle y mal 
        interpretar conceptos.";
        return $text;
    }

    function lowPositive(){
        $text = "Puede ser un delegador y diferenciar 
        detalles importantes.";
        return $text;
    }
    
    function lowNegative(){
        $text = "No disfruta los detalles y por lo tanto 
        puede tratar de evitarlos.";
        return $text;
    }
}
?>