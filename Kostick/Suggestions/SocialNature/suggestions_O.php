<?php
include('../Interfaces/ISuggestions.php');
class Suggestions_O implements ISuggestions{
    function highPositive(){
        $text = "Esta consciente de las necesidades de 
        los demás y probablemente tiene 
        conocimientos sutiles acerca de otros. 
        Establece buenas relaciones muy 
        cordiales y sinceras con las personas.";
        return $text;
    }

    function highNegative(){
        $text = "Puede se lastimado profundamente. 
        Evalúa lo que le dicen en términos de sí 
        es o no apreciado. Tiende a prejuciarse 
        cuando juzga a otros porque vive en un 
        mundo emocional controlado por 
        relaciones interpersonales intensas.";
        return $text;
    }

    function lowPositive(){
        $text = "Es muy analítico en su manera de 
        pensar. Tiende a ser imparcial.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Se resiste a intimar con las personas. 
        Sería incompatible con puntuaciones 
        altas en esta letra.";
        return $text;
    }
}
?>