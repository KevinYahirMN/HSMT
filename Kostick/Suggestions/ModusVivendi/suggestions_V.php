<?php
class Suggestions_V implements ISuggestions{
    function highPositive(){
        $text = "Tiene mucha energía para actividades 
        físicas. Comúnmente es un individuo 
        agradable, que tiene mucha fuerza 
        física, probablemente trabaja con 
        herramientas, tiene una actividad 
        deportiva.";
        return $text;
    }

    function highNegative(){
        $text = "Puede tender a involucrarse 
        exageradamente en actividades físicas, 
        cuando debería estar concentrado en 
        alguna cosa. Puede tener dificultad para 
        permanecer sentado durante ocho horas 
        al día.";
        return $text;
    }

    function lowPositive(){
        $text = "Tiene capacidad para permanecer 
        sentado.";
        return $text;
    }
    
    function lowNegative(){
        $text = "Se no ha estado enfermo recientemente 
        puede ser un neurótico cansado.";
        return $text;
    }
}
?>