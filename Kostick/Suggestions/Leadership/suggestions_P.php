<?php
include_once('../Interfaces/ISuggestions.php');
class Suggestions_P implements ISuggestions{
    function highPositive(){
        $text = "Le gusta tomar responsabilidades. Con 
        frecuencia le gusta influenciar a todos 
        y a ayudarlos. Les agrada la función de 
        liderazgo.";
        return $text;
    }

    function highNegative(){
        $text = "Podemos sospechar que no confía en 
        que alguien dirija el “show”. Es muy 
        posesivo. Puede sabotear sutilmente 
        esfuerzos acaparando la autoridad.";
        return $text;
    }

    function lowPositive(){
        $text = "No es del tipo que sabotea y controla 
        los esfuersos del líder. Es tolerante.";
        return $text;
    }
    
    function lowNegative(){
        $text = "No toma de buen grado la 
        responsabilidad por otros y 
        posiblemente ni aún por sí mismo.";
        return $text;
    }
}
?>