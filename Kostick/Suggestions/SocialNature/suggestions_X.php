<?php
include_once('../Interfaces/ISuggestions.php');
class Suggestions_X implements ISuggestions{
    function highPositive(){
        $text = "Tiene orgullo de sí mismo y de su 
        estilo. Puede ser efectivo en grupos 
        cuando no se muestre demasiado 
        exhibicionista.";
        return $text;
    }

    function highNegative(){
        $text = "Es un exhibicionista. Hace las cosas para 
        causar buena impresión, más que para 
        ser efectivo.";
        return $text;
    }

    function lowPositive(){
        $text = "Puede tener una pequeña motivación a 
        representar un papel y a no ser 
        sincero. Es modesto.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Es tímido y no se vende a sí mismo.";
        return $text;
    }
}
?>