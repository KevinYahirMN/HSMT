<?php
include('../Interfaces/ISuggestions.php');
class Suggestions_B implements ISuggestions{
    function highPositive(){
        $text = "Esta bien consciente de las actividades 
        del grupo. Tiene interés en cómo se 
        siente el grupo y tiene un gusto natural 
        por las personas.";
        return $text;
    }

    function highNegative(){
        $text = "Es dependiente del grupo. Puede ser 
        demasiado sensitivo a las necesidades 
        del mismo y cegarse a otras 
        necesidades: como la de producción.";
        return $text;
    }

    function lowPositive(){
        $text = "Puede hacer frente a un grupo y 
        pensar independientemente de él. La 
        presión que el grupo ejerce no le 
        convence con facilidad. Deben 
        presentársele argumentos de peso.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Es básicamente un lobo solitario. No es 
        sensitivo a las actividades y sentimientos 
        del grupo.";
        return $text;
    }
}
?>