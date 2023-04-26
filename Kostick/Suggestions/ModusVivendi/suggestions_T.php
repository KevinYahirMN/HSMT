<?php
class Suggestions_T implements ISuggestions{
    function highPositive(){
        $text = "Trabaja aprisa y logra bastante. Está 
        preparado internamente para la alta 
        producción.";
        return $text;
    }

    function highNegative(){
        $text = "Tiene mucha visión interna y tiende a 
        ser neurótico. Puede andar apresurado 
        excesivamente. No pude lograr terminar 
        su trabajo de forma eficiente.";
        return $text;
    }

    function lowPositive(){
        $text = "Esta persona es tranquila, no está 
        frustrada, sabe tomar las cosas como 
        son y raras veces se apresura.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Poco le importa el tiempo y el ritmo de 
        trabajo. Toma las cosas con mucha 
        facilidad a un ritmo que resulta 
        inconsistente.";
        return $text;
    }
}
?>