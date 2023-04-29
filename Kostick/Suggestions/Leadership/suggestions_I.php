<?php
include_once('../Interfaces/ISuggestions.php');
class Suggestions_I implements ISuggestions{
    function highPositive(){
        $text = "Es oprtimista, agresivo, entusiasta, 
        rápido en dar respuestas y presiona 
        PATRA acelerar la toma de decisiones.";
        return $text;
    }

    function highNegative(){
        $text = "Es una persona impulsiva que puede 
        convertirse en mentalmente sobreactivo 
        y toma decisiones apresuradas. Con 
        frecuencia se impacienta.";
        return $text;
    }

    function lowPositive(){
        $text = "Es muy precavido, sumamente serio.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Tiene problemas en la toma de 
        decisiones, vacila demasiado.";
        return $text;
    }
}
?>